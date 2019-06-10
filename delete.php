<?php
    $playername=$_GET['PlayerName'];

    $host='localhost';
    $username='root';
    $password='vijay';
    $database='crud';

    $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    $sql="delete info, imagegallery from info inner join imagegallery on info.PlayerName=imagegallery.Name where info.PlayerName='$playername'";
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
