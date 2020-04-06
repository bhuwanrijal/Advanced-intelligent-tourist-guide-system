<?php
$con= mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'tourist');
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
   $beach= $_POST['beach'];
    $hill_station= $_POST['hill_station'];
     $museum= $_POST['museum'];
      $landscape= $_POST['landscape'];
$temple= $_POST['temple'];
      $fort= $_POST['fort'];
           $adventurous= $_POST['adventurous'];
      $water_sports= $_POST['water_sports'];
$Waterfalls= $_POST['Waterfalls'];
      $aviation= $_POST['aviation'];
        $qry="INSERT INTO `tag`(`user_id`,`beach`, `hill_station`, `museum`, `landscape`, `temple`, `fort`, `adventerous`, `water_sports`, `waterfall`, `aviation`) VALUES ('$uname','$beach','$hill_station','$museum','$landscape','$temple','$fort','$adventurous','$water_sports','$Waterfalls','$aviation')";
        mysqli_query($con, $qry);
        header('location:index.php');
}
       ?>



