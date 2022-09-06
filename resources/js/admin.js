let fileinput = document.getElementById('image');
let imgtag = document.getElementsByClassName('showimage');
function showImg(){
    if(fileinput.files.length > 0){

        for (let i = 0; i < fileinput.files.length; i++) {
            imgtag[i].src= URL.createObjectURL(fileinput.files[i]);
            
        }
        document.getElementsByClassName('addRight')[0].style.display="unset";
    }
};