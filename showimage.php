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


<html lang="en">

<head>

    <title>Change image on select new image from file input</title>

    <script src="jquery/jquery-3.4.1.js"></script>

</head>

<body>
<form action="showimage.php" method="post" enctype="multipart/form-data">

<input type="file" name="file" id="profile-img"><br>
<input type="submit" name="submit" value="Upload image">
<input type="button" name="viewimage" value="Show image">
</form>



<img src="" id="profile-img-tag" width="300px" height="300px" />


<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#profile-img").change(function(){

        readURL(this);

    });

</script>


</body>

</html>