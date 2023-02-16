<?php

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['passid'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$conn=mysqli_connect('localhost','root','','BookMyShow','3306') or die("Connection failed");
$query="insert into reg (name,email,password,dob,gender) values ('{$name}','{$email}','{$password}','{$dob}','{$gender}')";
$rs=mysqli_query($conn,$query) or die("Query Failed");
/*if($rs){
    echo "Data insterted Sucessfully";
}
else{
    echo "Data not insterted Sucessfully";
}*/
?>

<html>
    <body>
        <?php
          if($rs==1){
          ?>
          <center><h1>Register Sucessfully</h1></center>
        <?php
          }
          ?>
        <center>
        <table border=1>
        <tr>
            <th><h1>User id</h1></th>
            <th><h1>Pssword</h1></th>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $password; ?></td>
        <tr>
        </table>
        </center>
            
    </body>
</html    

