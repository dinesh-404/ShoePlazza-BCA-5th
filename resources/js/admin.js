let fileinput = document.getElementById('image');
let imgtag = document.getElementsByClassName('showimage');
let txtinput = document.getElementsByClassName('input');
let val = 1
function showImg() {
    if (fileinput.files.length > 0) {

        for (let i = 0; i < fileinput.files.length; i++) {
            imgtag[i].src = URL.createObjectURL(fileinput.files[i]);

        }
        document.getElementsByClassName('addRight')[0].style.display = "unset";
        if (fileinput.files.length < 5 || fileinput.files.length < 5) {

            alert('enter 6 files');
        }
        if (fileinput.files.length == 6) {
            val = 0;
        }
    }
};
function validate() {
    for (let i = 0; i < txtinput.length; i++) {
        if (txtinput[i].value == "") {
            alert('please enter correct values');
            val++;
            break;
        }
        
    }
    if (val == 0) {
        document.getElementById('products').submit();
    }
    else {
        console.log('cant do');
    }

};
function adidas() {
    document.getElementById('adidas').click();
};
function puma() {
    document.getElementById('puma').click();
};
function nike() {
    document.getElementById('nike').click();
};