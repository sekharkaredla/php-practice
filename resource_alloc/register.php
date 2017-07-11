<html>
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
  </head>
  <body>
    <form class="register" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      username:<input type="text" name="user"/><br/>
      password:<input type="password" name="pass"/><br/>
      <input type="submit" name="submit"/>
    </form>
    <?php
      function test($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }
      if(isset($_POST['submit'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $servername='localhost';
        $username='root';
        $password='pass';
        $database='testdb';
        $conn=new mysqli($servername,$username,$password,$database);
        if($conn->connect_error){
          session_destroy();
          die('connection failed '.$conn->$connect_error);
        }
        $sql='select username from resourcealloc_credentials';
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
          if($pass==$row['username']){
            header('Location:index.html');
            die();
          }
        }
        $stmt=$conn->prepare('INSERT INTO resourcealloc_credentials(username,password,is_admin) values(?,?,?)');
        $stmt->bind_param('ssi',$new_user,$new_pass,$new_is_admin);
        $new_user=$user;
        $new_pass=$pass;
        $new_is_admin=0;
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo '<h1>DONE</h1>';
      }
     ?>
  </body>
</html>
