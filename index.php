<?php 
include("database.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 15px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 5px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<?php
if(isset($_POST["register"])){
$Name=$_POST['name'];
$Email=$_POST['email'];
$Password=md5($_POST['password']);
$conform=md5($_POST['psw-repeat']);
if($Name!="" && $Email!="" && $Password !="" && $conform!=""){
  if($Password == $conform){
  $query="INSERT INTO register (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";
  $result=mysqli_query($conn, $query);
  if($result){
      echo header('location: login.php');
    }
  }
  else{
    echo "The given passwaord and conform password are not same";
  }
}
}

?>
<form action="#" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password">

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="text" placeholder="Repeat Password" name="psw-repeat">
    <hr>
  

    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>