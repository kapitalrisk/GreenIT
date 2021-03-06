let darkColor = '#222222';
let clearColor = '#E1E1E1';
document.getElementById('save').onclick = function save(e) {
    e.preventDefault();
    e.stopPropagation();
    const data = new FormData(document.questionnaire);
    const req = fetch(location.pathname, {
        method: 'POST',
        body: data,
    })
        .then(function () {
            document.getElementById("intro-foot").hidden = false;
            document.getElementById("intro-head").hidden = true;
            document.querySelector("form").hidden = true;
        });

};
document.getElementById('button-co').onclick = function () {
    document.body.style.setProperty('--primary-color', darkColor);
    document.body.style.setProperty('--grey-text', darkColor);
    document.body.style.setProperty('--black-background', clearColor);
    const tmp = darkColor;
    darkColor = clearColor;
    clearColor = tmp;
};

var hide4 = function () {
    h = document.querySelector('input[name="4"]:checked').id === "4:1";
    for (let i = 5; i < 7; i++) {
        document.getElementById('question-' + i).hidden = h;
    }
    for (let i = 11; i < 12; i++) {
        document.getElementById('question-' + i).hidden = h;
    }
};

var hide12 = function () {
    h = document.querySelector('input[name="12"]:checked').id === "12:0";
    for (let i = 13; i < 50; i++) {
        document.getElementById('question-' + i).hidden = h;
    }
};
var hide13 = function () {
    h = document.querySelector('input[name="13"]:checked').id === "13:0";
    for (let i = 14; i < 31; i++) {
        document.getElementById('question-' + i).hidden = h;
    }
};

var hide39 = function () {
    h = document.querySelector('input[name="39"]:checked').id === "39:0" || document.querySelector('input[name="39"]:checked').id === "39:1";
    for (let i = 40; i < 42; i++) {
        document.getElementById('question-' + i).hidden = h;
    }
};

for (a of document.querySelectorAll('input[name="4"]')) {
    a.onclick = hide4;
}

for (a of document.querySelectorAll('input[name="12"]')) {
    a.onclick = hide12;
}

for (a of document.querySelectorAll('input[name="13"]')) {
    a.onclick = hide13;
}

for (a of document.querySelectorAll('input[name="39"]')) {
    a.onclick = hide39;
}

hide4();
hide12();
hide13();
hide39();

/**
 for (a of document.querySelectorAll('input[name="62"]')) {
    a.onclick = function() {
        h = document.querySelector('input[name="62"]:checked').id !== "62:1";
        for (let i = 63; i < 64; i++) {
            document.getElementById('question-' + i).hidden = h;
        }

    }
}
 */