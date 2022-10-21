console.log('llllllllllllllllllllllllllllllll')
function submitDataLog(){
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
              text : "Username Wrong"
          })
      }
      }
  });
});
}

function submitData(){
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
              text : "Username Wrong"
          })
      }
      }
  });
});
}