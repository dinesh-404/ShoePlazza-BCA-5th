var update = document.getElementById('updatebtn');
var fields = document.getElementsByClassName('fields');
update.addEventListener('click',  function(){
    for (let i = 0; i < fields.length; i++) {
        fields[i].disabled = false;
        
    }
    console.log(fields);
})