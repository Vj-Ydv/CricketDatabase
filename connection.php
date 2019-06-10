<?php
    $host='db4free.net';
    $username='vijayyadav';
    $password='vijayyadav';
    $database='cricdatabase';

    $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    //echo "successfully connnected";
   
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
