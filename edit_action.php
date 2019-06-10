<?php
    $sn=$_POST['sn'];
    $name=$_POST['sname'];
    $address=$_POST['add'];

    $host='localhost';
    $username='root';
    $password='vijay';
    $database='crud';

    $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    //echo "successfully connnected";
    $sql="update info set Name='$name',Address='$address' where SN='$sn'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($result==true)
    {
        header('location:index.php');

    }
    else
    {
        echo "Error while updating";
    }
?>