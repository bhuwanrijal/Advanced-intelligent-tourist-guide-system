<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');
if(isset($_POST['submit'])){
   $username= $_POST['name'];
    $feedback= $_POST['feedback'];
        $qry="INSERT INTO `feedback_info`(`name`, `feedback`) VALUES ('$username','$feedback')";
        mysqli_query($con, $qry);
        header('location:feedback.php');
}
       ?>

