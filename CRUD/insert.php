<?php

include "config.php";

if(isset($_POST['done'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $q = "INSERT INTO `crudtbl`(`Name`, `Contact`) VALUES ('$name','$phone')";

    $query = mysqli_query($conn, $q);

    if(!$query){
        echo "Error in Inserting Data";
    }
    else{
        echo "";
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD using PHP</title>
  </head>
  <body>

    
    <div class="container mt-5">
    <h1 class="text-center">Basic CRUD</h1><hr>
    <form action="" method="post">
  <div class="form-group">
    <label for="name">Name: </label>
    <input type="text" name= "name" class="form-control" id="formGroupExampleInput" placeholder="Enter your Name here..">
  </div>
  <div class="form-group">
    <label for="contact">Contact: </label>
    <input type="phone" name = "phone" class="form-control" id="formGroupExampleInput2" placeholder="Enter your contact here..">
  </div>
  <input type="submit" name= "done" class="btn btn-primary" value = "Add">
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>