let update = document.getElementById('updatebtn');
let fields = document.getElementsByClassName('fields');
let form = document.getElementById('updateform');
var en = 0;
function enable() {
    
    if (en == 0) {
        for (let i = 0; i < fields.length; i++) {
            fields[i].disabled = false;
        }
        en++;
    }
    else{
        for (let i = 0; i < fields.length; i++) {
            fields[i].disabled = true;
        }
        en=0;
    }

    console.log(en);
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
        top: 760,
        left: 0
    });
}
function filebrowse() {
    document.getElementById('filebrowse').click();
}

let wrapper = document.getElementsByClassName("txtfieldwrapper");
for (let i = 0; i < fields.length; i++) {
    fields[i].addEventListener("focusin",function(){
        wrapper[i].style.boxShadow="rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px";
    })
    fields[i].addEventListener("focusout",function(){
        wrapper[i].style.boxShadow="rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px";
    })
   
}