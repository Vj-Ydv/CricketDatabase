<?php
    $host='sql312.epizy.com';
    $username='epiz_24030608';
    $password='Jv4FJUx7wtbP';
    $database='epiz_24030608_cricdatabase';

    $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    //echo "successfully connnected";
   
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
