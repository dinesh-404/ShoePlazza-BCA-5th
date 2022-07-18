var a = document.getElementsByClassName("rbtn");
var lbl = document.getElementsByClassName("btncol");
function radiocolor() {
    for (let i = 0; i < a.length; i++) {
        if (a[i].checked) {
            lbl[i].classList.add('btnchange');
            console.log('ok');
        }
        else {
            lbl[i].classList.remove('btnchange');
        }

    }
}
function quantity(n) {
    var qty = document.getElementById("qty");
    var val = parseInt(qty.value);
    var num = 0;
    if (val >= 1) {
        num = val + n;
    }
    if(num>=1){
        qty.value=num;
        price(num);
    }
    
    console.log(qty);
}
var rate = 0;
window.addEventListener('DOMContentLoaded', () => {
    rate = document.getElementById('price').value;
});
function price(x){
    var valu = document.getElementById('price').value;
    var priceval = parseInt(rate);
    valu = priceval*x;
    document.getElementById('price').value=valu;
}