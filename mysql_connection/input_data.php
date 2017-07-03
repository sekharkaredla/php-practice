<html>
  <head>
    <meta charset="utf-8">
    <title>php page to input the data</title>
  </head>
  <body>
    <?php
    $conn = new mysqli('localhost','root','pandu123','testdb');
    if ($conn->connect_error){
      echo 'connection error';
      die();
    }
    $prepare_statement = $conn->prepare('INSERT INTO testtable (firstname,lastname,email) VALUES(?,?,?)');
    $prepare_statement->bind_param('sss',$fname,$lname,$email);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $prepare_statement->execute();
    echo 'done , last id is : '.$conn->insert_id;
     ?>
  </body>
</html>
