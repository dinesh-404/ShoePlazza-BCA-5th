var currpage = 0;
show_tab(currpage);
var err = "";
let len = document.getElementsByClassName("tab").length;
var txtfield = document.getElementsByClassName("idpassinput");
let lbl = document.getElementsByClassName('idpasslbl');
function show_tab(n) {
    console.log(currpage);
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevbtn").style.display = "none";
        document.getElementById("signupbtn").innerHTML = "next";
    } else {
        document.getElementById("prevbtn").style.display = "block";
        document.getElementById("signupbtn").innerHTML = "submit";
    }
}
function current_tab(n) {
    let x = document.getElementsByClassName("tab");
    if (n == 1 && !validation()) {
        alert(err);
        err = "";
        return false;
    }
    x[currpage].style.display = "none";
    currpage = currpage + n;
    if (currpage >= x.length) {
        document.getElementById("signupform").submit();
        return false;
    }
    show_tab(currpage);
}
var valid = true;
var validate = 0;
function validation() {
    //other remaining
    validate = 0;
    var x, y, i;
    x = document.getElementsByClassName("tab");
    y = x[currpage].getElementsByClassName("idpassinput");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            lbl[i].style.color = "#ff3d3d";
            validate++;
        }
    }
    if (validate > 0) {
        err += "please enter empty fields\n";
    }
    //age validation
    let age = document.getElementById('age');
    let agelbl = document.getElementById('agelbl');
    if (isNaN(age.value) || age.value < 1 || age.value > 100) {
        agelbl.style.color = "red";
        err += "please enter valid age \n";
        validate++;
    }

    //    radio gender validation
    var r = document.getElementsByClassName('ok');
    var rdobtn = document.getElementsByClassName('radio');
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
        err += "please enter valid gender \n ";

        for (let i = 0; i < rdobtn.length; i++) {
            rdobtn[i].style.color = "red";
        }
        validate++;
    }
    //mobile validation
    if (currpage == 1) {
        let mobile = document.getElementById('mobileno');
        var mval = document.getElementById('mobileno').value;
        if (!isNaN(mobile) || !mval.length == 10 || mval == "" || !/[6-9]/.test(mval)) {
            document.getElementById('mobilelbl').style.color = "red";
            validate++;
            err += "mobile no already exists \n";
        }

        //passwrd
        let pass = document.getElementById('pass').value;
        if (pass.length > 7 || !/[0-9]/.test(pass) || !/[a-z]/.test(pass)) {
            err += "please enter valid password which have numbers and characters \n";
            document.getElementById('passlbl').style.color = "red";
            validate++;
        }
    }
    //email
    if (currpage == 0) {
        var mail = document.getElementById('mail').value;
        var at = mail.search('@');
        var dot = mail.search(/\./);
        if (at < 2 || dot < 2 || mail == "") {
            document.getElementById('maillbl').style.color = "red";
            err += "please enter an valid email \n";
            validate++;
        }
    }
    if (currpage == 1 && validate == 1) {
        return true;
    }
    if (validate > 0) {
        return false;
    }
    return true;
}
function input(n) {//onclick html
    lbl[n].style.color = "unset";
}

function radioval() {//onclick html
    var rdobtn = document.getElementsByClassName('radio');
    for (let i = 0; i < rdobtn.length; i++) {
        rdobtn[i].style.background = "none";
        rdobtn[i].style.color = "black";
    }
}
let tabrad = document.getElementsByClassName('tblradio');
for (let i = 0; i < tabrad.length; i++) {
    tabrad[i].addEventListener('check', () => {

    })
}
function admin() {
    document.getElementById('adminradio').click();
    document.getElementById('adminbtn').style.background = "gray";
    document.getElementById('userbtn').style.background = "";
}
function user() {
    document.getElementById('adminradio').click();
    document.getElementById('userbtn').style.background = "gray";
    document.getElementById('adminbtn').style.background = "";
}
