<?php
$SERVERNAME = "localhost";
$Username = 'root';
$password = '';
$databasename = "crudyt";


$conn = mysqli_connect($SERVERNAME,$Username,$password,$databasename);

if(!$conn){
    die("Error in connection ".mysqli_connect_error());
}

else{
    echo "";
}


?>