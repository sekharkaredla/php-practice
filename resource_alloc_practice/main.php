<?php
session_start();
?>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}


input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
    background-color: white;
}

button {
    background-color: #4CAF50;
    color: black;
    padding: 14px 25px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.5;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: silver;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 5%;
}

.container {
    padding: 16px;

}

span.psw {
    float: center;
    padding-top: 12px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
<body>
  <?php
  if(isset($_SESSION['user'])){
    if($_SESSION['admin']){
      header('Location: admin.php');
      die();
    }
    else{
      header('Location: user.php');
      die();
    }
  }
   ?>
<center>
    <h1>Chaitanya Bharathi Institute of Technology</h1>

</center>
<form action="login_check.php" method="post">
    <div class="imgcontainer">
        <a href="https://www.cbit.ac.in">
            <img src="images/logo.png" alt="logo" class="avatar">
        </a>
    </div>
    <center>
        <h2>Resource Management System</h2></center>
    <div class="container">
        <center>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required></br>

            <label><b>Password </b></label>
            <input type="password" placeholder="Enter Password" name="pass" required></br>

            <button type="submit">Login</button>
            </br>
            <input type="checkbox" checked="checked"> Remember me</br></br>
            <span class="psw"> <a href="register.php">register</a></span></center>
    </div>

</form>

</body>
</html>
