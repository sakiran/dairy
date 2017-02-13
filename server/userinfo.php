<?php 
    header('Access-Control-Allow-Origin: *');
    include 'config.php';
    session_start();
    if (!isset($_SESSION['userid'])) { //not logged in
     //header('Location: ../index.html');
    die();
}
    $userid = $_SESSION["userid"];
    $username  = mysqli_real_escape_string($dbconfig, $username);
    $sql_query = "SELECT * FROM usermanagement WHERE userid='$userid'";
    $result    = mysqli_query($dbconfig, $sql_query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    print json_encode($row);
    ?>
