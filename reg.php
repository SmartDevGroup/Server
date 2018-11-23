<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <body class="text-center">

    <div class="modal fade bd-example-modal-lg" id="reg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <div class="form-row">
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-12 col-12">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="inputemail" aria-describedby="emaill" placeholder="smartgroup@gmail.com">
                  <small id="emaili" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-12 col-12">
                  <label for="exampleInputEmail1">User Login</label>
                  <input type="text" class="form-control" id="inputlogin" aria-describedby="login" placeholder="Enter login">
                  <small id="login" class="form-text text-muted">Login which is entered on start page</small>
                </div>
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-12 col-12">
                  <label for="password_1" >User Password</label>
                  <input type="password" name="pass_1" class="form-control" id="pass_1" placeholder="">
                </div>
                <div class="form-group text-center col-lg-6 col-md-6 col-sm-12 col-12">
                  <label for="password_2" >Repeat Password</label>
                  <input type="password" name="pass_2" class="form-control" id="pass_2" placeholder="">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                  <small id="login" class="form-text text-muted">At least six numbers or characters</small>
                  <br>
                  <button type="button" class="btn btn-primary btn-lg btn-block" onclick="check()">Confirm registration</button>
                  <br>
                  <div class="alert alert-danger" role="alert" id="al" style="display: none;">
                    <h4 class="alert-heading" id="alert_head"></h4>
                    <p id="alert_text"></p>
                    <hr>
                  </div>
                  <div class="alert alert-success" role="alert" id="ok" style="display: none;">
                    <h4 class="alert-heading" id="alert_ok_head"></h4>
                    <p id="alert_ok_text"></p>
                    <hr>
                  </div>
                  <div class="alert alert-info" role="alert" id="send" style="display: none;">
                    <h4 class="alert-heading" id="alert_send_head"></h4>
                    <hr>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){
        $(function() {
        $('#reg').modal('show')});
        $('#reg').on('hidden.bs.modal', function (e) {
          $('#reg').modal('toggle');
      })
      });
      function check()
      {
        var email = $.trim($("#inputemail").val());
        var login = $.trim($("#inputlogin").val());
        var pass_1 = $.trim($("#pass_1").val());
        var pass_2 = $.trim($("#pass_2").val());

        if(email.length > 0)
        {
          if(login.length > 0)
          {
            if(pass_1.length > 0)
            {
              if(pass_2.length > 0)
              {
                if(pass_1 == pass_2)
                {
                  if(login.length < 5)
                  {
                    $('#al').fadeIn();
                    $('#alert_head').text("Login not less than 5 characters");
                    setTimeout(close, 3000);
                  }
                  else {
                    if(pass_1.length < 5)
                    {
                      $('#al').fadeIn();
                      $('#alert_head').text("Password not less than 5 characters");
                      setTimeout(close, 3000);
                    }
                    else {
                      $('#send').fadeIn();
                      $('#alert_send_head').text("Registration...");
                      setTimeout(redirect, 1000);
                    }
                  }
                }
                else {
                  $('#al').fadeIn();
                  $('#alert_head').text("Passwords do not match");
                  setTimeout(close, 3000);
                }
              }
              else {
                $('#al').fadeIn();
                $('#alert_head').text("Repeat password");
                setTimeout(close, 3000);
              }
            }
            else {
              $('#al').fadeIn();
              $('#alert_head').text("Enter password");
              setTimeout(close, 3000);
            }
          }
          else {
            $('#al').fadeIn();
            $('#alert_head').text("Enter login");
            setTimeout(close, 3000);
          }
        }
        else {
          $('#al').fadeIn();
          $('#alert_head').text("Enter email adress");
          setTimeout(close, 3000);
        }
      }
      function close()
      {
        document.getElementById("al").style.display = "none";
      }
      function redirect()
      {
        document.getElementById("send").style.display = "none";
        var data = {};
        data.email = $.trim($("#inputemail").val());
        data.login = $.trim($("#inputlogin").val());
        data.password = $.trim($("#pass_1").val());
        $.ajax({
        type: 'POST',
        url: 'reg_db.php',
        data: data,
        success: function(error){
          if(error == "email_false")
          {
            $('#al').fadeIn();
            $('#alert_head').text("Wrong email adress");
            setTimeout(close, 3000);
          }
          else {
            if(error == "clone_login")
            {
              $('#al').fadeIn();
              $('#alert_head').text("This login is already in use");
              setTimeout(close, 3000);
            }
            else {
              if(error == "clone_email")
              {
                $('#al').fadeIn();
                $('#alert_head').text("This email is already in use");
                setTimeout(close, 3000);
              }
              else {
                $('#ok').fadeIn();
                $('#alert_ok_head').text("Successful");
                setTimeout(main, 2000);
              }
            }
          }
        }
        });
      }
      function main()
      {
        window.location.replace("index.php");
      }
    </script>
  </body>
</html>
