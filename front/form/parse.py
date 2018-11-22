from re import match
from html import escape
from jinja2 import Template
from pandas import read_excel, notnull

QUESTION_TYPES = {
    'text field': 'TXT',
    'single choice': 'SC',
    'multiple choice': 'MC'
}

PREFIX = False


def xlsx_to_dict():
    df = read_excel('green_sheet.xlsx')
    df = df.where((notnull(df)), None)
    questions, question, nested = dict(), None, None
    for row in df.itertuples():
        if row[1] is not None:
            category = row[1]
        label, qtypes = row[3], row[7]
        comments = '' if row[8] is None else row[8]
        choices = (row[4], row[5], row[6])
        choices_available = None not in choices
        if label is not None and not choices_available and question is None:
            m = match(r'(?P<id>\d*)\. (?P<label>.*)', label)
            if m is not None:
                qid, label = m.group('id'), escape(m.group('label'))
                question = {
                    'type': 'Q',
                    'id': f'question:{qid}',
                    'label': f'{qid}. {label}' if PREFIX else label,
                    'answers': [],
                    'texts': [],
                    'comments': comments
                }
        if choices_available:
            m = match(r'(?P<id>\d*)\. (?P<label>.*)', label)
            if m is not None and not PREFIX:
                label = m.group('label')
            nested = {
                'type': 'N',
                'label': label,
                'choices': [{
                    'label': escape(str(choice)),
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
                if m is None:
                    aid = len(question['answers'])
                    question['answers'].append({
                        'label': escape(str(label)),
                        'val': aid,
                        'id': f'answer:{aid}'
                    })
                else:
                    aid = 10 + len(question['texts'])
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
