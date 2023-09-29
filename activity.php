<?php
// mysql connection object
$_host ="127.0.0.1";
$_password ="";
$_username ="root";
$_database ="loggin_system";

$conn=new mysqli(
    $_host,$_username,$_password,$_database
);
if($conn->connect_error){
    exit("error connecting");
}
print("connected..<br>");

$query =" INSERT INTO `users`(`name`, `password`)
                 VALUES ('jacob','emmanuel5050')";

$conn ->query($query);                 

?>
