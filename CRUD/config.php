<?php
$SERVER_NAME = "localhost";
$User_name = 'root';
$password = '';
$database_name = "crudyt";


$conn = mysqli_connect($SERVER_NAME,$User_name,$password,$database_name);

if(!$conn){
    die("Error in connection ".mysqli_connect_error());
}

else{
    echo "";
}


?>