<?php
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

    <title>Hospital Management System</title>
  </head>
  <body><div class="d-flex justify-content-center">
  <h1 class="text-center">Register as Patient</h1></div>
  <div class="container">

    <form method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text"name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Age">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
    <input type="text" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male/Female">

  </div>

  <div style="margin: 1%" >
  <button type="submit" name ="btnsub" value="Submit" class="btn btn-primary">Register</button>
  <button type="submit" name = "loginp" class="btn btn-primary">Already Registered</button>
  <button type="submit" name = "doc" class="btn btn-primary">Doctors Login</button></div>
</form></div>
<?php
        
        if(isset($_POST['btnsub'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $name =$_POST['name'];

            $query = "INSERT INTO `register` (`email`, `password`,`name`, `age`, `gender`) VALUES ('$email', '$password','$name', '$age', '$gender')";
            // INSERT INTO `register` (`email`, `password`, `age`, `gender`) VALUES ('rushikesh@gmail.com', '132', '35', 'male');
            $result = $conn->query($query);
            // $result =  mysqli($con,$query);

            if($result){
                echo '       Record have been entered sucessfully';
            }else{
                echo 'there was error ';
            }
        }
        // $sql="SELECT * FROM `register` WHERE `email`='rushikesh@gmail.com' AND `password`='132'";
        // $result = $conn->query($sql);
        // echo $result->num_rows;

        if(isset($_POST['loginp'])){
            header("Location: http://localhost/login.php");
        }
        if(isset($_POST['doc'])){
            header("Location: http://localhost/docre.php");
        }

?>

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