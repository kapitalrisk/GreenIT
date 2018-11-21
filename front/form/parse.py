from re import match
from jinja2 import Template
from pandas import read_excel, notnull

QUESTION_TYPES = {
    'text field': 'TXT',
    'single choice': 'SC',
    'multiple choice': 'MC'
}


def xlsx_to_dict():
    df = read_excel('green_sheet.xlsx')
    df = df.where((notnull(df)), None)
    questions, question, nested = dict(), None, None
    for row in df.itertuples():
        if row[1] is not None:
            category = row[1]
        if row[2] is not None:
            category = f'{category} - {row[2]}'
        label, qtypes = row[3], row[7]
        comments = '' if row[8] is None else row[8]
        choices = (row[4], row[5], row[6])
        choices_available = None not in choices
        if label is not None and not choices_available and question is None:
            m = match(r'(?P<id>\d*)\. (?P<label>.*)', label)
            if m is not None:
                qid, label = m.group('id'), m.group('label')
                question = {
                    'type': 'Q',
                    'id': f'question:{qid}',
                    'label': label,
                    'answers': [],
                    'texts': [],
                    'comments': comments
                }
        if choices_available:
            nested = {
                'type': 'N',
                'label': label,
                'choices': [{
                    'label': str(choice),
                    'val': i,
                    'id': f'answer:{i}'
                } for i, choice in enumerate(choices)],
                'questions': [],
                'comments': comments
            }
            types = [
                QUESTION_TYPES[qtype.lower()]
                for qtype in qtypes.split(' + ')
            ]
            nested['types'] = types
            if 'SC' in types:
                nested['input_type'] = 'radio'
            elif 'MC' in types:
                nested['input_type'] = 'checkbox'
            nested['text_input'] = 'TXT' in types
            questions.setdefault(category, []).append(nested)
        elif qtypes is not None:
            types = [
                QUESTION_TYPES[qtype.lower()]
                for qtype in qtypes.split(' + ')
            ]
            question['types'] = types
            if 'SC' in types:
                question['input_type'] = 'radio'
            elif 'MC' in types:
                question['input_type'] = 'checkbox'
            question['text_input'] = 'TXT' in types
            questions.setdefault(category, []).append(question)
        elif label is None:
            question, nested = None, None
        else:
            if nested is None:
                m = match(
                    r'(?P<label>.*) >> response field to be added', str(label))
                aid = len(question['answers'])
                if m is None:
                    question['answers'].append({
                        'label': str(label),
                        'val': aid,
                        'id': f'answer:{aid}'
                    })
                else:
                    question['texts'].append({
                        'label': m.group('label'),
                        'val': aid,
                        'id': f'answer:{aid}'
                    })
                    question['text_input'] = False
            else:
                nested['questions'].append(question)
                question = None
    return questions


with open('template.html', 'r') as source:
    template = Template(source.read())
    print(template.render(data=xlsx_to_dict()))
