<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT ID FROM users WHERE UserID = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;

         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Vector Perkins Evil Portal</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" method="post" action="">

    <img class="mb-4" src="img/vector.png" alt="" width="150" height="250">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Minion Username</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Minion Username" required autofocus>

    <label for="inputPassword" class="sr-only">Secret Banana</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Secret Banana" required>
    <div class="register mb-3">
      <label>
        <a href="./registerForm.php">
          <p>Register</p>
        </a>
      </label>
    </div>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="Login">
     <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

      <p class="mt-5 mb-3 text-muted">&copy; 2018-2020</p>
  </form>
</body>

</html>
