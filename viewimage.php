<?php
    include('connection.php');
    if(isset($_POST['submit']))
    {
       
        $image=$_FILES['file']['name'];
        $sql="insert into info(Image) values('$image')";
        $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result==true)
        {
            move_uploaded_file($_FILES['file']['tmp_name'],"img/$image");
            echo "success";

        }
        else
        {
            echo "error";
        }
    }
?>