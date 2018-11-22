
let darkColor = '#222222'
let clearColor = '#E1E1E1'
document.getElementById('button-co').onclick = function () {
    document.body.style.setProperty('--primary-color', darkColor)
    document.body.style.setProperty('--grey-text', darkColor)
    document.body.style.setProperty('--black-background', clearColor)
    const tmp = darkColor;
    darkColor = clearColor;
    clearColor = tmp;
};

document.getElementById('save').onclick = function(e) {
    e.preventDefault();
    const data = new FormData(document.questionnaire);
    const req = fetch(location.pathname, {
        method: 'POST',
        body: data,

    })
    return false;
}