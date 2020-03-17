<?php

include 'config.php';

$id = $_GET['id'];

$q = "DELETE FROM `crudtbl` WHERE ID = $id";

mysqli_query($conn,$q);

header('location:display.php');



?>