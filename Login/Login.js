document.getElementById('showpass').onclick =
  function () {
    if (this.checked) {
      document.getElementById('pass').type = "text";
    }
    else {
      document.getElementById('pass').type = "password";
    }
  }