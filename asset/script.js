console.log('llllllllllllllllllllllllllllllll')


function submitDataLog(){

  console.log('tessssss')
    var usn = document.getElementById('username2').value
    var pass = document.getElementById('password2').value
    if(usn == "" || usn == undefined){
        document.getElementById('err-1').style.display ="block"
        document.getElementById('err-1').innerHTML ="Please Fill this Username!"
    }else{
      document.getElementById('err-1').style.display = 'none'
    }
    if(pass == "" || pass == undefined){
        document.getElementById('err-2').style.display ="block"
        document.getElementById('err-2').innerHTML ="Please Fill this Password!"
    }else{
      document.getElementById('err-2').style.display = 'none'
    }


  var username2 = document.getElementById('username2').value
  console.log('sip')
  $(document).ready(function(){
    var data = {
      name: $("#name").val(),
      username: $("#username2").val(),
      password: $("#password2").val(),
      action: $("#action2").val(),
    };

    $.ajax({
      url: 'function.php',
      type: 'post',
      data: data,
      success: function(response){
        if(response === "Login Successful"){
              Swal.fire({
              icon: 'success',
              title: 'Hello '+username2+', welcome back!',
              timer: 5000
          })
          let dtk
          dtk = setTimeout(pindah, 5000)
          function pindah() {
              location.href = "index.php"
          }
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Oops... ',
              text : "Somthing Wrong"
          })
      }
      }
  });
});
}

function submitData(){
var err5 = document.getElementById('err-5')
console.log(err5)
  console.log('tessssstdsadasdaddasdooos')
    var fuel = document.getElementById('name').value
    var passw = document.getElementById('password').value
    var usne = document.getElementById('username').value
    if(fuel == "" || fuel == undefined){
        document.getElementById('err-3').style.display ="block"
        document.getElementById('err-3').innerHTML ="Please Fill Your Name!"
    }else{
      document.getElementById('err-3').style.display = 'none'
    }

    if(passw == "" || passw == undefined){
        document.getElementById('err-4').style.display ="block"
        document.getElementById('err-4').innerHTML ="Please Fill this Password!"
    }else{
      document.getElementById('err-4').style.display = 'none'
    }

    if( usne == "" ||  usne == undefined){
      document.getElementById('err-5').style.display = "block"
      document.getElementById('err-5').innerHTML = "Please Fill Username!"
    }else{
      document.getElementById('err-5').style.display = 'none'
    }


 var username = document.getElementById('username').value
  console.log("sip")
  $(document).ready(function(){
    var data = {
      name: $("#name").val(),
      username: $("#username").val(),
      password: $("#password").val(),
      action: $("#action").val(),
    };

    $.ajax({
      url: 'function.php',
      type: 'post',
      data: data,
      success:function(response){
        if(response === "Successful"){
              Swal.fire({
              icon: 'success',
              title: 'Hello '+username+', welcome!',
              timer: 5000
          })    
          let dtk
          dtk = setTimeout(pindah, 5000)
          function pindah() {
              location.href = "index.php"
          }
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Oops... ',
              text : "Somthing Wrong"
          })
      }
      }
  });
});
}