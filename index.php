<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Landing Page for Anton's projects</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signin.css" >
  </head>
  <body>
    <div class="container">
      <div id="body">
<form action="testreg.php" method="post" class="form-signin" id="form">
              <h2 class="form-signin-heading">Please sign in</h2>
              <label for="forlogin" class="sr-only">Login</label>
              <input type="login" id="forlogin" class="form-control" placeholder="Email address" required autofocus>
              <label for="forpassword" class="sr-only">Password</label>
              <input type="password" id="forpassword" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>



<!-- old buttons saved here
<form action="testreg.php" method="post" class="form-signin">
<p>
    <label>Login:<br></label>
    <input name="login" type="text" size="15" maxlength="15" id="forlogin">
    </p>
 <p>
 <label>Password:<br></label>
    <input name="password" type="password" size="15" maxlength="15" id="forpassword">
    </p>
<p>
    <input type="submit" name="submit" value="Submit">
<br>
<a href="reg.php">Registration</a>
    </p>
  </form> -->
    <br>
    <div id="fadeDiv">
    <input type="button" name="close" value="Close session" onclick="<?php session_destroy();?> location.reload();">
    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "You are not logged in<br><a href='#'>Only authorised users have an access to Anton's projects</a>";
    }
    else
    {
    // Если не пусты, то мы выводим ссылку
    echo "You logged in as ".$_SESSION['login']."<br><a  href='loadingpage.php'>You can use this link to proceed</a>";
    }
    ?>
</div>
    </div>
    </div>
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS as always :D -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $("form").fadeIn("slow");
    $("#fadeDiv").fadeIn("slow");
    });
    </script>
  </body>
</html>
