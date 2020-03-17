<?php

include 'config.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>List</title>
  </head>
  <body>


    <div class="container mt-5">


    <h1 class="text-warning text-center">Display Record</h1>
    

    <table class="table table-hover">
    <tr class="text-center bg-dark text-white">
        <td>ID</td>
        <td>Name</td>
        <td>Contact</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>

    <?php

        $q = "SELECT * FROM `crudtbl`";
        $query = mysqli_query($conn, $q);

        while($result = mysqli_fetch_array($query)){

    ?>

    <tr class="text-center">
        <td><?php echo $result['ID'];?></td>
        <td><?php echo $result['Name'];?></td>
        <td><?php echo $result['Contact'];?></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $result['ID']; ?>">Delete</a></td>
        <td><a class="btn btn-success" href="update.php?id=<?php echo $result['ID']; ?>">Update</a></td>
    </tr>
    <?php
    
        }
    ?>
    
    </table>
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>