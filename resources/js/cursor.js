// mouse cursor variables
window.addEventListener('load', function() {
    document.getElementById('load').style.display="none";
});

let mouseCursor = document.querySelector(".cursor");
let midcur = document.querySelector(".innercursor");
let a = document.querySelectorAll("li");
let body = document.querySelectorAll("body");
let txtfield = document.querySelectorAll("txtfield");
let login = document.getElementById("center");
let logbutton = document.getElementById("logbtn");
let image = document.querySelectorAll('img');
let footer = document.getElementsByClassName('footer');

//hides when scroll
// window.onscroll=function(){
//     if(this){

//         var scroll = window.scrollY;
//         mouseCursor.style.top = scroll+400 + "px";
//         midcur.style.top = scroll+400 + "px";
//          mouseCursor.classList.remove("changecursor");
//           midcur.classList.remove("midcursor");
    
//     }
//     else{
//         mouseCursor.classList.add("changecursor");
//         midcur.classList.add("midcursor");
//     }
// };
//main cursor movements
window.addEventListener("mousemove", cursor);
function cursor(e) {
    //console.log(e.pageY);
    mouseCursor.style.top = e.pageY + "px";
    mouseCursor.style.left = e.pageX + "px";
    midcur.style.top = e.pageY + "px";
    midcur.style.left = e.pageX + "px";
}
//mouse click
document.addEventListener('mousedown', function () {

    mouseCursor.classList.add('onclick');
});
document.addEventListener('click', function () {
    mouseCursor.classList.add('onclick');
    mouseCursor.classList.remove('onclick');
});
document.addEventListener('mouseup', function () {
    mouseCursor.classList.remove('onclick');
});
//hover on linkss
a.forEach(item => {
    item.addEventListener('mouseover', () => {
        mouseCursor.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
        mouseCursor.classList.remove('hover');
    });
});
image.forEach(item => {
    item.addEventListener('mouseover', () => {
        mouseCursor.classList.add('imghover');
    });
    item.addEventListener('mouseleave', () => {
        mouseCursor.classList.remove('imghover');
    });
});
//no cursor if mouse not in webpage

document.addEventListener("mousemove", function () {
    mouseCursor.classList.add("changecursor");
    midcur.classList.add("midcursor");
});
document.addEventListener("mouseleave", function () {
    mouseCursor.classList.remove("changecursor");
    midcur.classList.remove("midcursor");
    console.log('body removwe');
});

function scolltop(){
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
}
function explore(){
    document.getElementById('explore').scrollIntoView({behavior:"smooth",block:"start",inline:"end"});
}

