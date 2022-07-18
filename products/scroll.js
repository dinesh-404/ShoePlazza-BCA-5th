var noscroll = document.getElementById('right');

window.onscroll=function (e){
  console.log(window.scrollY);
  if(window.scrollY>1600){
    noscroll.style.display="none";
  }
  else{
    noscroll.style.display="block";
  }
}
noscroll.onended=function (){
  console.log('boi');
}