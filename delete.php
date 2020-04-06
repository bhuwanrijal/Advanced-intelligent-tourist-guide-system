<?php
if(isset($_GET['id']))
{
    $delete_id=$_GET['id'];
    mysqli_query($con, "delete from places where id='$delete_id'");
}
?>