<?php
    $sn=$_GET['SN'];

    $host='localhost';
    $username='root';
    $password='vijay';
    $database='crud';

    $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    $sql="delete from info where SN='$sn'";
    $result=mysqli_query($conn,$sql);
    if($result==true)
    {
        header('location:viewdata.php');
    }
    else
    {
        echo "Error while deleting.";
    }
?>
