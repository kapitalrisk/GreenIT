console.warn('nothing here, we need to be sure of what happens on the backend')
a = '#222222'
b = '#E1E1E1'
document.getElementById('button-co').onclick = function () {
    document.body.style.setProperty('--primary-color', a)
    document.body.style.setProperty('--grey-text', a)
    document.body.style.setProperty('--black-background', b)
    c = a;
    a = b;
    b = c;
};