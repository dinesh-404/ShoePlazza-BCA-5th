var update = document.getElementById('updatebtn');
var fields = document.getElementsByClassName('fields');
var form = document.getElementById('updateform');
update.addEventListener('click', function () {
    for (let i = 0; i < fields.length; i++) {
        fields[i].disabled = false;
    }
    console.log(fields);
})
function validate() {
    validate = 0;
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value == "") {
            fields[i].style.background = "red";
            validate++;
        }
    }
    var age = document.getElementById('age');
    if (isNaN(age.value) || age.value < 1 || age.value > 100) {
        console.log("ok");
        age.style.background = "red";
        validate++;
    }
    var mail = document.getElementById('email').value;
    var at = mail.search('@');
    var dot = mail.search(/\./);
    if (at < 2 || dot < 2 || mail == "") {
        document.getElementById('email').style.background = "red";
        validate++;
    }
    var pass = document.getElementById('password').value;
    if (!pass.length > 7 || !/[0-9]/.test(pass) || !/[a-z]/.test(pass)) {
        console.log('password bitchheshshshshsh');
        document.getElementById('password').style.background = "red";
        validate++;
    }
    var gender = document.getElementById('gender');
    var lower = gender.value.toLowerCase();
    if (lower != "male" && lower != "female") {
        document.getElementById('gender').style.background = 'red';
        validate++;
    }

    if (validate == 0) {
        form.submit();
    }
    else {
        return;
    }
}