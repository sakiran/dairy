<?php
header('Access-Control-Allow-Origin: *');
include 'config.php';
session_start();

if (!isset($_SESSION['userid'])) { //not logged in
    // header('Location: ../index.html');
    die();
}
$userid  = $_SESSION["userid"];
$userid  = mysqli_real_escape_string($dbconfig, $userid);
$sql_query = "SELECT * FROM ordermanagement WHERE userid='$userid'";
$result    = mysqli_query($dbconfig, $sql_query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    
    $var[] = $row;
    
}

echo json_encode($var);
?>