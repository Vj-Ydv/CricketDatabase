<?php
    $oldimage=$_POST['oldimage'];
    $sn=$_POST['sn'];
    $playername=$_POST['playername'];
    $born=$_POST['born'];
    $role=$_POST['role'];
    $battingstyle=$_POST['battingstyle'];
    $bowlingstyle=$_POST['bowlingstyle'];
    $image=$_FILES['file']['name'];
    $country=$_POST['country'];
    $birthplace=$_POST['birthplace'];
    $teams=$_POST['teams'];
    $description=$_POST['description'];

    // $host='localhost';
    // $username='root';
    // $password='vijay';
    // $database='crud';
    // $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    include('connection.php');
    if($image!="")
    {
        move_uploaded_file($_FILES['file']['tmp_name'],"img/$image");
        // echo "newimage";
        
    }
    else{
        $image=$oldimage;
        // echo "oldimage";
    }
   

    
    //echo "successfully connnected";
    $sql="update info set PlayerName='$playername',Born='$born',Role='$role',BirthPlace='$birthplace',Country='$country',BattingStyle='$battingstyle',BowlingStyle='$bowlingstyle',Image='$image',Teams='$teams',Description='$description',SN='$sn' where SN='$sn'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($result==true)
    {
         
         header('location:viewdata.php');

    }
    else
    {
        echo "Error updating";
    }
?>