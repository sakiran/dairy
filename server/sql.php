<?php
$servername = "127.4.136.2";
$username = "adminsKPNUtX";
$password = "8iwBb5nwdPSZ";

/*
$servername = "127.4.136.2";
$username = "root";
$password = "";
*/
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS `dairy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<?php
$mysql_host = "127.4.136.2";
$mysql_user = "adminsKPNUtX";
$mysql_password = "8iwBb5nwdPSZ";
  
/*
$mysql_host  = "127.4.136.2";
$mysql_user = "root";
$mysql_password = "";
*/

# MySQL with PDO_MYSQL
$mysql_database = "dairy";


$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

$query = file_get_contents("dairy.sql");

$stmt = $db->prepare($query);

if ($stmt->execute())
     echo "Success";
else 
     echo "Fail";

     ?>
