let pwd = document.getElementById('pass');
let showpwd = document.getElementById('pwdimg');
var click = 0;
function showpass() {
  if (click == 0) {
    document.getElementById('pass').type = "text";
    showpwd.src="/ShoePlazza/images/eyeopen.png";
    click++;
  }
  else {
    document.getElementById('pass').type = "password";
    showpwd.src="/ShoePlazza/images/eyeclosed.png";
    click = 0;
  }
}