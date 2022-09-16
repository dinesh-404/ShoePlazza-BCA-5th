var txtfield = document.querySelectorAll("txtfield");
var midcur = document.querySelector(".innercursor");
var btn = document.querySelectorAll('button');
var link = document.querySelectorAll('a');
var login = document.getElementById("center");
var mainCur = document.querySelector(".cursor");
var logbutton = document.getElementById("logbtn");
var footer = document.getElementsByClassName('footer');
//main cursor movements
window.addEventListener("mousemove", cursor);
function cursor(e) {
    //console.log(e.pageY);
    mainCur.style.top = e.pageY + "px";
    mainCur.style.left = e.pageX + "px";
    midcur.style.top = e.pageY + "px";
    midcur.style.left = e.pageX + "px";
}
//mouse click
document.addEventListener('mousedown', function () {
    mainCur.classList.add('onclick');
});

document.addEventListener('mouseup', function () {
    mainCur.classList.remove('onclick');
});
//hover on linkss
link.forEach(item => {
    item.addEventListener('mouseover', () => {
        mainCur.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
        mainCur.classList.remove('hover');
    });
});


// change style on hover

document.addEventListener('mouseover', () => {
    mainCur.classList.add("changecursor");
    midcur.classList.add("midcursor");
});
//no cursor if mouse not in webpage
document.addEventListener("mouseout", function () {
    mainCur.classList.remove("changecursor");
    midcur.classList.remove("midcursor");
    console.log("out of window");
});
var prevScroll = window.scrollY;
window.onscroll = function () {
    var currentScroll = window.scrollY;
    if (prevScroll > currentScroll) {
        document.getElementById('gototop').style.bottom = "30px";
    }
    else {
        document.getElementById('gototop').style.bottom = "-50px";
    }
    prevScroll = currentScroll;
}
function scolltop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}
function explore() {
    document.getElementById('explore').scrollIntoView({ behavior: "smooth", block: "start", inline: "end" });
}