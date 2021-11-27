<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/db/db.php';
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Docor Dashboard</title>
  </head>
  <body>
    <h1 class="text-center">Dashboard</h1>
    <?php 
      $id = $_SESSION['id'];
      $sql = "SELECT * FROM `doctor` WHERE `id`='$id'";
      $result = $conn->query($sql)->fetch_assoc();
          
           echo '<h3 class="text-centre">Hello, ' . $result['name'] . "</h3>";



           ?>
           <h4 class="text-center">Appointments </h4>

<?php
    $id = $_SESSION['id'];
     $sql = "SELECT * FROM `appointment` WHERE `did`='$id'";
     $result =$conn->query($sql);

     while($row=$result->fetch_assoc()){
         // echo  json_encode($row);
         $id1=$row['id'];
         $sql = "SELECT * FROM `register` WHERE `id`='$id1'";
         $result2=$conn->query($sql)->fetch_assoc();
         
         
         echo  "Name :".  $result2['name']."  ";
         echo  "Date : ". $row['date_t'];
         echo "<br>";
     }
    ?>
    <a href="/logout" class ="btn btn-primary" style="margin:2%" >Logout</a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>