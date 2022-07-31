// mouse cursor variables
var mouseCursor = document.querySelector(".cursor");
var midcur = document.querySelector(".innercursor");
var a = document.querySelectorAll("li");
var body = document.querySelectorAll("body");
var txtfield = document.querySelectorAll("txtfield");
var login = document.getElementById("center");
var logbutton = document.getElementById("logbtn");
var image = document.querySelectorAll('img');
var footer = document.getElementsByClassName('footer');
//main cursor movements
window.addEventListener("mousemove", cursor);
function cursor(e) {

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

// know cursor style and remove 
document.addEventListener('mouseover', e => {
    const tgt = e.target;
    const computed = window.getComputedStyle(tgt)["cursor"];
    if (computed == 'none') {
        mouseCursor.classList.add("changecursor");
        midcur.classList.add("midcursor");
    }
    else {
        mouseCursor.classList.remove("changecursor");
        midcur.classList.remove("midcursor");
    }
});
//no cursor if mouse not in webpage
body.forEach(item => {
    item.addEventListener("mouseleave", function () {
        mouseCursor.classList.remove("changecursor");
        midcur.classList.remove("midcursor");
    });
});
footer.addEventListener("mouseover",function(){
    midcur.classList.remove("midcursor");
    mouseCursor.classList.remove("changecursor");
})