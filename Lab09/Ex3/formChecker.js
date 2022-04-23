function Reset(){

  var realSpider_count = document.getElementById("realspider");
  var costume_count = document.getElementById("costume");
  var plush_count = document.getElementById("plush");

  realSpider_count.value = "0";
  costume_count.value = "0";
  plush_count.value = "0";

  var email = document.getElementById("email");
  var email_ext = document.getElementById("email_ext");
  var pass = document.getElementById("pwd");

  email.value = "";
  email_ext.value = "";
  pass.value = "";

  var shipping = document.getElementById("0");

  shipping.checked = true;

  return;
}

function Submit(){

  var realSpider_count = document.getElementById("realspider").value;
  var costume_count = document.getElementById("costume").value;
  var plush_count = document.getElementById("plush").value;

  if( realSpider_count == 0 && costume_count == 0 && plush_count == 0){
    alert("Cart is Empty.");
    event.preventDefault();
    return;
  }

  var email = document.getElementById("email").value;
  var email_ext = document.getElementById("email_ext").value;
  var pass = document.getElementById("pwd").value;

  if(email == ""){
    alert("Please enter your email.");
    event.preventDefault();
    return;
  }

  if(email_ext == ""){
    alert("Please enter your email.");
    event.preventDefault();
    return;
  }

  if(pass == ""){
    alert("Please enter your password.");
    event.preventDefault();
    return;
  }

  alert("Purchase successful!");
  return;
}
