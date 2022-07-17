var a = document.getElementsByClassName("rbtn");
var lbl = document.getElementsByClassName("btncol");
function radiocolor() {
    for (let i = 0; i < a.length; i++) {
        if (a[i].checked) {
            lbl[i].classList.add('btnchange');
            console.log('ok');
        }
        else{
            lbl[i].classList.remove('btnchange');
        }

    }
}
