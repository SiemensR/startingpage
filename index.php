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
  </head>
  <body>
    <h1>Please enter your login and password to continue</h1>
    <div class="container">
    <div class="row">
    <div class="col-5">
<form action="testreg.php" method="post">
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
    </form>
    <br>
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
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS as always :D -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
