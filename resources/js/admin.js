let fileinput = document.getElementById('image');
let imgtag = document.getElementsByClassName('showimage');
let val = 1
function showImg(){
    if(fileinput.files.length > 0){

        for (let i = 0; i < fileinput.files.length; i++) {
            imgtag[i].src= URL.createObjectURL(fileinput.files[i]);
            
        }
        document.getElementsByClassName('addRight')[0].style.display="unset";
        if(fileinput.files.length<5 ||fileinput.files.length<5 ){

            console.log('less then')
        }
        if(fileinput.files.length==6){
            val =0;
        }
    }
};
function validate(){
    if(val==0){
        document.getElementById('add-products').submit();
    }
    else{
        console.log('cant do');
    }

}