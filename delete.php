<?php
    $playername=$_GET['PlayerName'];
    include('connection.php');
    // $host='localhost';
    // $username='root';
    // $password='vijay';
    // $database='crud';

    // $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    $sql="delete info, imagegallery from info inner join imagegallery on info.PlayerName=imagegallery.Name where info.PlayerName='$playername'";
    $sql1="delete from info where PlayerName='$playername'";

    $result=mysqli_query($conn,$sql);
    $result1=mysqli_query($conn,$sql1);
    if($result==true)
    {
        if($result1==true)
        {
            header('location:viewdata.php');
            // echo 'success';
        }
        header('location:viewdata.php');
    }
    else
    {
        echo "Error while deleting.";
    }
?>
