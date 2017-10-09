<?php 

include('dbConnect.php');

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['username'];
$pwd = $_POST['pwd'];

$SQL ="INSERT INTO user (name, lastName, username, pwd) 
VALUES ('$first', '$last', '$uid', '$pwd')";

$result = mysqli_query($conn, $SQL);

header("Location: index.php");

?>