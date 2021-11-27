<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/db/db.php';
  
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form method="post" action=>
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="Email" name="email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required="required">
        </div>
        <div class="form-group">
        <input type="submit" name ="login" value="login" class="btn btn-primary btn-block"/>
        </div>
    </form>
    <p class="text-center"><a href="index.php">Register</a></p>
</div>
<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `register` WHERE `email`='$email' AND `password`='$password'";
        $result = $conn->query($sql);
        // echo $result['id'];
        if($result->num_rows > 0){
            echo '
            <div class="alert alert-warning mt-3" role="alert">
                  sucessful!
            </div>
           ';
           session_start();
           $result=$result->fetch_assoc();
           $_SESSION['id'] = $result['id'];
          
            header("Location: http://localhost/patient/");
        }
    else {
        echo '
      <div class="alert alert-warning mt-3" role="alert">
            Invalid Credentials!
      </div>
     ';
    }
}
 ?>
</body>
</html>