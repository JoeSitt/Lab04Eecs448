function Check(){
  var email = document.getElementById("email").value;
  var name = document.getElementById("name").value;
  var password = document.getElementById("pass").value;
  var i1 = document.getElementById("i1").value;
  var i2 = document.getElementById("i2").value;
  var i3 = document.getElementById("i3").value;
  var works=true;
  if (i1<0||i1=="") {
    alert("Enter a non negative value for Totally working real nice Car");
    works= false;
  }
  if (i2<0||i2=="") {
    alert("Enter a non negative value for A penny");
    works =false;
  }
  if (i3<0||i3=="") {
      alert("Enter a non negative value for A taco");
    works= false;
  }
  if (name=="") {
      alert("Enter a value for name");
    works= false;
  }
  if (pass=="") {
      alert("Enter a value for password");
    works= false;
  }
  if (validEmail(email)) {

  }else{
    works= false;
    alert("Enter a valid value (name@place.com) for email");
  }
  return works;
}


// Got the regular expression for validating email addresses from here:
// http://www.w3resource.com/javascript/form/email-validation.php

function validEmail(text)
{
  if(text.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    return true;
  }
  else
  {
    return false;
  }
}
