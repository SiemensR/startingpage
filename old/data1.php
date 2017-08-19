<?php

include('index.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//$sql = "SELECT * FROM users";
//$result = $conn->query($sql);

// auskommentierter Code funktiioniert!!
// if ($result->num_rows > 0) {
    // output data of each row
//    while($row = $result->fetch_assoc()) {
        //echo "user: " . $row["USER"];
//    }
//} else {
//    echo "0 results";
// }


//$row = $result->fetch_assoc();

//if ($_POST["wer"] == $row["USER"]) {
//	header("Location: loadingpage.php");
//}
//else {
//	echo "<div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">wrong user or password!</div></div>";
//};

$result = mysql_query("SELECT * FROM users WHERE USER='$_POST["wer"]'"); 
//извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    
    echo "Вы успешно вошли на сайт! <a href='loadingpage.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    };
    



$conn->close();
?>