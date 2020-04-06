<?php
session_start();
$con= mysqli_connect('localhost','root','root');
$db= mysqli_select_db($con, 'tourist');
if(isset($_POST['submit'])){
   $username=$_POST['user'];
   $password=$_POST['pass'];
   $sql="select * from user_registration where name= '$username' and pass='$password'";
   $query= mysqli_query($con, $sql);
   $row=mysqli_num_rows($query);
   if($row==1){
       $_SESSION['user']=$username;
       header('location:userpage.php');
   }
   else{
       header('location:userlogin.php?Invalid= failed to connect');
   }
}
