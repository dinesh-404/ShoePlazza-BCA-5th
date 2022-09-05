let update = document.getElementById('updatebtn');
let fields = document.getElementsByClassName('fields');
let form = document.getElementById('updateform');
let wrapper = document.getElementsByClassName("txtfieldwrapper");
let pfp = document.getElementById('pfp');
let pfplabel = document.getElementById('pfplegend');
let fileinput = document.getElementById('filebrowse');
var en = 0;
function enable() {

    if (en == 0) {
        for (let i = 0; i < fields.length; i++) {
            fields[i].disabled = false;
            // wrapper[i].style.animation = "inputshadow .6s  1 ease-in-out";
            wrapper[i].style.boxShadow = "var(--wrappershadowaftr)";
            // wrapper[i].classList.add('shadowinput');
        }
        pfp.style.boxShadow = "rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset";
        pfplabel.innerHTML = "Double click to change profile pic";
        document.getElementById('updatebtn').classList.add('nodisplay');
        document.getElementById('updatesubmit').classList.remove('nodisplay');

        en++;
    }
    else {
        for (let i = 0; i < fields.length; i++) {
            fields[i].disabled = true;
            // wrapper[i].style.animation = "noinputshadow .6s ease-in-out";
            wrapper[i].style.boxShadow = "var(--wrappershadowbfr)";
        }
        pfp.style.boxShadow = "rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px";
        pfplabel.innerHTML = "Profile Pic";

        en = 0;
    }
}
function reload() {
    if (en == 0) {
        return;
    }
    else {
        return "alerrt";
    }
}
function validate() {
    let validate = 0;
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value == "") {
            fields[i].style.border = "2px solid red";
            validate++;
        }
    }
    var age = document.getElementById('age');
    if (isNaN(age.value) || age.value < 1 || age.value > 100) {
        console.log("ok");
        age.style.border = "2px solid red";
        validate++;
    }
    var mail = document.getElementById('email').value;
    var at = mail.search('@');
    var dot = mail.search(/\./);
    if (at < 2 || dot < 2 || mail == "") {
        document.getElementById('email').style.border = "2px solid red";
        validate++;
    }
    var pass = document.getElementById('password').value;
    if (!pass.length > 7 || !/[0-9]/.test(pass) || !/[a-z]/.test(pass)) {
        console.log('password bitchheshshshshsh');
        document.getElementById('password').style.border = "2px solid red";
        validate++;
    }
    var gender = document.getElementById('gender');
    var lower = gender.value.toLowerCase();
    if (lower != "male" && lower != "female") {
        document.getElementById('gender').style.border = "2px solid red"
        validate++;
    }

    if (validate == 0) {
        form.submit();
    }
    else {
        return;
    }
}
function scrollupdate() {
    window.scrollTo({
        behavior: 'smooth',
        top: 780,
        left: 0
    });
}
function readfile() {
    pfp.src = URL.createObjectURL(fileinput.files[0]);
}
function filebrowse() {
    if (en > 0) {
        document.getElementById('filebrowse').click();
    }
}

for (let i = 0; i < fields.length; i++) {
    fields[i].addEventListener("focus", function () {
        // wrapper[i].style.animation = "focus .6s  1 ease-in-out";
        wrapper[i].style.boxShadow = "var(--wrappershadowfocus)";
    })
    fields[i].addEventListener("focusout", function () {
        wrapper[i].style.boxShadow = "var(--wrappershadowaftr)";
    })
}
let prevScroll = window.scrollY;
window.onscroll = function(){
    var currentScroll = window.scrollY;
    if(prevScroll>currentScroll){
        document.getElementById('navbar').style.top="0";
    }
    else{
        document.getElementById('navbar').style.top="-50px";
    }
    prevScroll=currentScroll;
}