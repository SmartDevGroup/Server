<?php
isMobile();
function isMobile() {
return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

}
$mobile = $_GET['mobile'];
if($mobile == true)
{
  $mobile = false;
  echo $mobile;
}
else {
  if(isMobile()){
    header("Location: /mobile.php");
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="http://individual.icons-land.com/IconsPreview/GISGPSMAP/PNG/Places/256x256/House1.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="check.php">
      <img class="mb-4" src="https://orig00.deviantart.net/2205/f/2015/207/4/2/mr_sagar_bedi_ludhiana_india_flat_icon_by_mrsagarbedi-d92v1vj.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Login</label>
      <input type="text" name="login" value="" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" value="" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="commit" type="submit">Sign in</button>
      <button class="btn btn-sm btn-primary btn-block" name="commit" type="button" onclick="register()">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
      <h1><p class="mt-5 mb-3 text-danger"><?php if($_GET['ssesion'] == true){echo "To many ssesion for one user.";} ?></p></h1>
    </form>
    <script type="text/javascript">
      function register(){document.location.href = "reg.php";}
    </script>
  </body>
</html>
