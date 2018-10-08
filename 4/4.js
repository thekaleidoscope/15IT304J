function ValidationEvent() {
  // Validate Name
  var name = document.getElementById("name").value;
  var pass = document.getElementById("pass").value;
  var email = document.getElementById("email").value;
  var f = 0;
  if (/^(?![a-z0-9]{5,})/.test(name)) {
    f = 1;
    document.getElementById("errormsg").innerHTML =
      '<p class="mer">Invalid Name</p>';
    console.log("WTF!");
  }

  if (/^(?![a-z0-9]{8,})/.test(pass)) {
    f = 1;
    document.getElementById("errormsg2").innerHTML =
      '<p class="mer">Invalid Password</p>';
  }
  //
  //
  if (/^(?![a-z0-9]{5,}@[+a-z\.com])/.test(email)) {
    f = 1;
    document.getElementById("errormsg3").innerHTML =
      '<p class="mer">Invalid Email</p>';
  }
  if (f === 1) return false;
  else return true;
}
