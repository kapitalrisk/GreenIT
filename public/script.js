document.getElementById('save').onclick = function save(e) {
    console.log('dasdasdaszdasdaszdsadasdasdsadsd')
    e.preventDefault();
    const data = new FormData(document.questionnaire);
    const req = fetch(location.pathname, {
        method: 'POST',
        body: data,

    })
    return false;
}
let backgroundColor = '#222222'
let textColor = '#E1E1E1'
function colors() {
    document.body.style.setProperty('--primary-color', backgroundColor)
    document.body.style.setProperty('--grey-text', backgroundColor)
    document.body.style.setProperty('--black-background', textColor)
    const tmp = backgroundColor;
    backgroundColor = textColor;
    textColor = tmp;
}
document.getElementById('button-co').onclick = colors;