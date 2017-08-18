<?php

require_once('index.php');

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


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// auskommentierter Code funktiioniert!!
// if ($result->num_rows > 0) {
    // output data of each row
//    while($row = $result->fetch_assoc()) {
        //echo "user: " . $row["USER"];
//    }
//} else {
//    echo "0 results";
// }

$row = $result->fetch_assoc();
if ($_POST["wer"] == $row["USER"]) {
	header("Location: loadingpage.php");
}
else {
	echo "wrong user";
	die;
}


$conn->close();
?>