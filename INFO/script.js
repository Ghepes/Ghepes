function login(form) {
  /*put the users and pass you want*/
  if ( form.user.value=="admin" && form.pass.value=="admin123" || form.user.value=="mod" && form.pass.value=="mod123" || form.user.value=="user" && form.pass.value=="user123") { 
    $('.login').fadeOut(1000);
    $('.website').fadeIn(1000);
    var user = document.getElementById("user").value;
    document.getElementById("username").innerHTML = "Hello " + user;
  } else {
    alert("Invalid Login")
         }
  }

$('button').click(function(){
  $('.login').fadeIn(1000);
  $('.website').fadeOut(1000);
  document.forms[0].reset();
});
