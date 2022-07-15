// mouse cursor
var mouseCursor = document.querySelector(".cursor");
var midcur = document.querySelector(".innercursor");
var a = document.querySelectorAll("li");
var body = document.querySelectorAll("body");
var txtfield = document.querySelectorAll("txtfield");
var login = document.getElementById("center");
var logbutton = document.getElementById("logbtn");
document.addEventListener("DOMContentLoaded", function () {
    mouseCursor.classList.remove("changecursor");
    midcur.classList.remove("midcursor");
});
window.addEventListener("mousemove", cursor);
function cursor(e) {

    mouseCursor.style.top = e.pageY + "px";
    mouseCursor.style.left = e.pageX + "px";
    midcur.style.top = e.pageY + "px";
    midcur.style.left = e.pageX + "px";
}
body.forEach(item => {
    item.addEventListener("mousemove", function () {
        mouseCursor.classList.add("changecursor");
        midcur.classList.add("midcursor");
    });
    item.addEventListener("mouseleave", function () {
        mouseCursor.classList.remove("changecursor");
        midcur.classList.remove("midcursor");
    });
});
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

