<?php
// connect to DB
// mysql connection object
$_host ="127.0.0.1";
$_password ="";
$_username ="root";
$_database ="loggin_system";

$conn=new mysqli(
    $_host,$_username,$_password,$_database
);
$connection = new PDO(
    "mysql:host=$_host;dbname=$_database",
    $_username,
    $_password
);

$query =" INSERT INTO `users`(`name,`, `password`)
VALUES ('jacob','emmanuel5050')";


if($conn->connect_error){
    exit("error connecting");
}
print("connected..<br>");
// Exec Query (SQL)
// create
// $query=;
$conn->query($query);
// Update
// Read
// Del




               

?>
