<?php
session_start();
$con= mysqli_connect('localhost','root','root');
$db= mysqli_select_db($con, 'tourist');
if(isset($_POST['submit'])){
   $user=$_POST['user'];
   $password=$_POST['pass'];
   $sql="select * from ad where username= '$user' and pass='$password'";
   $query= mysqli_query($con, $sql);
   $row=mysqli_num_rows($query);
   if($row==1){
       $_SESSION['user']=$user;
       header('location:adminpage.php');            
   }
   else{
       header('location:admin.php?Invalid= Please Enter Correct User Name and Password');
   }
}
