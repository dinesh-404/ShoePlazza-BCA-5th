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
    console.log('currpage '+currpage);
    if (currpage>=x.length) {
            document.getElementById("signupform").submit();
            console.log("submitted");
            return false;
        
    }
    show_tab(currpage);
}
var valid = true;
var validate = 0;
function validation() {
    //other remaining
    validate = 0;
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currpage].getElementsByClassName("idpassinput");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].style.background = "red";
            validate++;
        }
    }
    //age validation
    var age = document.getElementById('age');
    if (isNaN(age.value) || age.value < 1 || age.value > 100) {
        console.log("ok");
        age.style.background = "red";
        validate++;

    }
    else console.log("workedddddddddddddddd");
    //    radio gender validation
    var r = document.getElementsByClassName('ok');
    var lbl = document.getElementsByClassName('radio');
    var a = 0;
    for (let i = 0; i < r.length; i++) {
        if (r[i].checked) {
            console.log('got ' + r[i].value);
            
        }
        else {
            a++;
        }
    }

    if (a == r.length) {
        for (let i = 0; i < lbl.length; i++) {
            lbl[i].style.background = "red";
            
        }
        validate++;
        console.log('red value error' + validate);
    }
    //mobile validation
    if (currpage == 1) {
        var mobile = document.getElementById('mobileno');
        var mval = document.getElementById('mobileno').value;
        if (!isNaN(mobile) || !mval.length == 10 || mval == "" || !/[6-9]/.test(mval)) {
            mobile.style.background = "red";
            validate++;
        }

        //pass
        var pass = document.getElementById('pass').value;
        if (pass.length > 7 || !/[0-9]/.test(pass) || !/[a-z]/.test(pass)) {
            console.log('password bitchheshshshshsh');
            validate++;
        }

    }
    //email
    if (currpage == 0) {
        var mail = document.getElementById('mail').value;
        var at = mail.search('@');
        var dot = mail.search(/\./);
        if (at < 2 || dot < 2 || mail == "") {
            document.getElementById('mail').style.background = "red";
            validate++;
        }
    }
    if(currpage == 1 && validate==1){
        return true;
    }
    if (validate > 0) {
        return false;
    }
    return true;

}
function input(n) {//onclick html
    txtfield[n].style.background = "none";
}

function radioval() {//onclick html
    var lbl = document.getElementsByClassName('radio');
    for (let i = 0; i < lbl.length; i++) {
        lbl[i].style.background = "none";
        lbl[i].style.color = "black";

    }
}
