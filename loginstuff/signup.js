var currpage = 0;

show_tab(currpage);
let len = document.getElementsByClassName("tab").length;
var txtfield = document.getElementsByClassName("idpassinput");
function show_tab(n) {
    console.log(currpage);
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevbtn").style.display = "none";
    } else {
        document.getElementById("prevbtn").style.display = "inline";
    }

}
function current_tab(n) {
    console.log("val of n" + n);
    let x = document.getElementsByClassName("tab");
    if (n == 1 && !validation()) return false;
    x[currpage].style.display = "none";
    currpage = currpage + n;
    if (currpage >= x.length) {
        document.getElementById("signupbtn").onclick = () => {
            document.getElementById("signupform").submit();
            console.log("submitted")
            return false;
        }
    }
    show_tab(currpage);
}
var valid = true;
function validation() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currpage].getElementsByClassName("idpassinput");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].style.background = "red";
            valid = false;
        }
    }
    var age = document.getElementById('age');
    if (isNaN(age.value) || age.value < 1 || age.value > 100) {
        console.log("ok");
        age.style.background = "red";
       
    }
    else console.log("workedddddddddddddddd");
    if (!radio()) return false;
    if (valid) return valid;


}
function input(n) {//onclick html
    txtfield[n].style.background = "none";
}

function radio() {
    var r = document.getElementsByClassName('ok');
    var lbl = document.getElementsByClassName('radio');
    var a = 0;
    for (let i = 0; i < r.length; i++) {
        if (r[i].checked) {
            console.log('got');
            return true;
        }
        else a++; console.log('here');
    
        if (a == r.length) {
            for (let i = 0; i < lbl.length; i++) {
                lbl[i].style.background = "red";
            }
            console.log('red value error');
            return false;
        }
    }
}
function radioval() {//onclick html
    var lbl = document.getElementsByClassName('radio');
    for (let i = 0; i < lbl.length; i++) {
        lbl[i].style.background = "none";
        lbl[i].style.color = "black";

    }
}
function mobile() {
    var mobile = document.getElementById('mobileno');
    var mval = document.getElementById('mobileno').value;
    if(!isNaN(mobile)||mval.length !== 10||mval == "" || !mval.startsWith(6)||!mval.startsWith(7)||!mval.startsWith(8)||!mval.startsWith(9)){
     mobile.style.background="red";
    }
}
mobile();