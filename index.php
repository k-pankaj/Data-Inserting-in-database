<?php
    $server='localhost';
    $name='root';
    $password='';
    $dbname = "Users_details";
    $conn=mysqli_connect($server,$name,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error($conn));
        }
?> 
 26  index.php 
@@ -0,0 +1,26 @@
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action="insert.php" method="post">
        
                <label>Email</label>
                <input type="email" name="email">
           
            <br><br>
                <label>Password</label>
                <input type="password" name="password">
                <br><br>
            <input type="submit" name="submit" value="Submit">
    </div>
</body>
</html> 
 16  insert.php 
@@ -0,0 +1,16 @@
<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $email = $_POST['email'];
     $password = $_POST['password'];
     $sql = "INSERT INTO users (email,password)
     VALUES ('$email','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?> 
