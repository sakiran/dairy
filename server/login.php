<?php
include("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password received from loginform
    $userid  = mysqli_real_escape_string($dbconfig, $_POST['userid']);
    $password  = mysqli_real_escape_string($dbconfig, $_POST['password']);
    $sql_query = "SELECT username FROM usermanagement WHERE userid='$userid' and password='$password'";
    $result    = mysqli_query($dbconfig, $sql_query);
    $row       = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count     = mysqli_num_rows($result); // If result matched $username and $password, table row must be 1 row
    if ($count == 1) {
        $_SESSION['userid'] = $userid;
        
        $sql_query_role = "SELECT role FROM usermanagement WHERE userid='$userid' and password='$password'";
        $result         = mysqli_query($dbconfig, $sql_query_role);
        
        $row  = mysqli_fetch_assoc($result);
        $role = $row['role'];
        echo $role;
        
    } else {
       echo "login failed";
    }
}
?>