<?php
    $playername=$_POST['playername'];
    $born=$_POST['born'];
    $role=$_POST['role'];
    $battingstyle=$_POST['battingstyle'];
    $bowlingstyle=$_POST['bowlingstyle'];
    $country=$_POST['country'];
    $image=$_FILES['file']['name'];
    $birthplace=$_POST['birthplace'];
    $teams=$_POST['teams'];
    $description=$_POST['description'];

    include('connection.php');
    // $host='localhost';
    // $username='root';
    // $password='vijay';
    // $database='crud';

    // $conn=mysqli_connect($host,$username,$password,$database) or die(mysqli_error($conn));
    //echo "successfully connnected";
    $sql="insert into info(PlayerName,Born,Role,BattingStyle,BowlingStyle,Image,Country,BirthPlace,Teams,Description) values('$playername','$born','$role','$battingstyle','$bowlingstyle','$image','$country','$birthplace','$teams','$description')";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if($result==true)
    {
        move_uploaded_file($_FILES['file']['tmp_name'],"img/$image");
         header('location:adddata.php');
        // echo "<script>alert('New record successfully added.');document.location='adddata.php'</script>";
        
    }
    else
    {
        echo "Failed to add";
    }
?>


