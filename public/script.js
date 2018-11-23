let darkColor = '#222222'
let clearColor = '#E1E1E1'
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
for (a of document.querySelectorAll('input[name="4"]')) {
    a.onclick = function() {
        h = document.querySelector('input[name="4"]:checked').id !== "4:0";
        console.log(h)
        for (let i = 5; i < 7; i++) {
            console.log(i)
            document.getElementById('question-' + i).hidden = h;
            console.log('-----')
        }
        for (let i = 11; i < 12; i++) {
            console.log(i)
            document.getElementById('question-' + i).hidden = h;
            console.log('-----')
        }
        
    }
}

for (a of document.querySelectorAll('input[name="12"]')) {
    a.onclick = function() {
        h = document.querySelector('input[name="12"]:checked').id !== "12:1";
        console.log(h)
        for (let i = 13; i < 50; i++) {
            console.log(i)
            document.getElementById('question-' + i).hidden = h;
            console.log('-----')
        }
        
    }
}

for (a of document.querySelectorAll('input[name="13"]')) {
    a.onclick = function() {
        h = document.querySelector('input[name="13"]:checked').id !== "13:1";
        console.log(h)
        for (let i = 14; i < 31; i++) {
            console.log(i)
            document.getElementById('question-' + i).hidden = h;
            console.log('-----')
        }
        
    }
}

for (a of document.querySelectorAll('input[name="39"]')) {
    a.onclick = function() {
        h = document.querySelector('input[name="39"]:checked').id !== "39:2";
        console.log(h)
        for (let i = 40; i < 42; i++) {
            console.log(i)
            document.getElementById('question-' + i).hidden = h;
            console.log('-----')
        }
        
    }
}

for (a of document.querySelectorAll('input[name="62"]')) {
    a.onclick = function() {
        h = document.querySelector('input[name="62"]:checked').id !== "62:1";
        console.log(h)
        for (let i = 63; i < 64; i++) {
            console.log(i)
            document.getElementById('question-' + i).hidden = h;
            console.log('-----')
        }
        
    }
}