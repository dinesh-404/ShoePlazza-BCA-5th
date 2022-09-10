
var txtfield = document.querySelectorAll("txtfield");
var midcur = document.querySelector(".innercursor");
var link = document.querySelectorAll('a');
var login = document.getElementById("center");
var mainCur = document.querySelector(".cursor");
var logbutton = document.getElementById("logbtn");
var image = document.querySelectorAll('img');
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
document.addEventListener('click', function () {
    mainCur.classList.add('onclick');
    mainCur.classList.remove('onclick');
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
image.forEach(item => {
    item.addEventListener('mouseover', () => {
        mainCur.classList.add('imghover');
    });
    item.addEventListener('mouseleave', () => {
        mainCur.classList.remove('imghover');
    });
});

// know cursor style and remove 

document.addEventListener('mouseover', () => {
    mainCur.classList.add("changecursor");
        midcur.classList.add("midcursor");
});
//no cursor if mouse not in webpage
window.addEventListener("mouseleave", function () {
    mainCur.classList.remove("changecursor");
    midcur.classList.remove("midcursor");
});
var prevScroll = window.scrollY;
window.onscroll = function(){
    var currentScroll = window.scrollY;
    if(prevScroll>currentScroll){
        document.getElementById('gototop').style.bottom="30px";
    }
    else{
        document.getElementById('gototop').style.bottom="-50px";
    }
    prevScroll=currentScroll;
}
function scolltop(){
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
}
function explore(){
    document.getElementById('explore').scrollIntoView({behavior:"smooth",block:"start",inline:"end"});
}
// footer.addEventListener("mouseover",function(){
//     midcur.classList.remove("midcursor");
//     mainCur.classList.remove("changecursor");
// });

window.addEventListener('load', () => {
    setTimeout(() => {
        document.getElementById('inner').classList.remove('loader-inner');
        document.getElementById('animation').classList.remove('loader');
        document.getElementById('afteranimation').style.opacity = "1";
    },1000);

    console.log('load');
})