<?php 
    header('Access-Control-Allow-Origin: *');
    include 'config.php';
    session_start();

    if (!isset($_SESSION['userid'])) { //not logged in
     //header('Location: ../index.html');
    die();
}


    $userid = $_SESSION["userid"];
    $ordertime = time();
    $serialno = $username . $ordertime ;
    $orderstatus = "in progress";
    $serialno = mysqli_real_escape_string($dbconfig, $serialno);
    $userid  = mysqli_real_escape_string($dbconfig, $userid);
    $username  = mysqli_real_escape_string($dbconfig, $_POST['username']);
    $fromdate  = mysqli_real_escape_string($dbconfig, $_POST['fromdate']);
    $todate  = mysqli_real_escape_string($dbconfig, $_POST['todate']);
    $remarks  = mysqli_real_escape_string($dbconfig, $_POST['remarks']);
    $contactnumber  = mysqli_real_escape_string($dbconfig, $_POST['contactnumber']);
    $ordertime  = mysqli_real_escape_string($dbconfig, $ordertime);
    $orderstatus  = mysqli_real_escape_string($dbconfig, $orderstatus);

    $today = date("Y-m-d");

if ($fromdate < $today) {
//header('Location: ../index.html');
    die();

}
    if(isset($_POST['milkneeded']))
{
    $milkneeded  = mysqli_real_escape_string($dbconfig, $_POST['milkneeded']);
    $milktype  = mysqli_real_escape_string($dbconfig, $_POST['milktype']);
    $milkpacket  = mysqli_real_escape_string($dbconfig, $_POST['milkpacket']);
    $milkquantity  = mysqli_real_escape_string($dbconfig, $_POST['milkquantity']);
}
else
{
     $milkneeded  = mysqli_real_escape_string($dbconfig, 'no');
     $milktype  = mysqli_real_escape_string($dbconfig, 'no');
    $milkpacket  = mysqli_real_escape_string($dbconfig, 'no');
    $milkquantity  = mysqli_real_escape_string($dbconfig, 'no');
}

    $sql_query = "INSERT INTO ordermanagement (serialno,userid,username,milkneeded,milktype,milkpacket,milkquantity,fromdate,todate,remarks,contactnumber,ordertime,orderstatus) VALUES ('$serialno','$userid', '$username',  '$milkneeded', '$milktype', '$milkpacket', '$milkquantity','$fromdate', '$todate', '$remarks', '$contactnumber', '$ordertime','$orderstatus')";

if (mysqli_query($dbconfig, $sql_query)) {
    echo "success";
} else {
    echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
}

    ?>
