<?php
    include('connection.php');
    if(isset($_POST['submit']))
    {
        for($i=0;$i<count($_FILES['file']['name']);$i++)
        {
            $personname=$_POST['personname'];
            $filetmp=$_FILES['file']['tmp_name'][$i];
            $filename=$_FILES['file']['name'][$i];
            $folderpath="img/$filename";
            $sql="insert into imagegallery(Name,Image) values('$personname','$filename')";
            $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($result==true)
            {
                move_uploaded_file($filetmp,$folderpath);
                
    
            }
            else
            {
                echo "error";
            }
        }
       
    }
?>


<html lang="en">

<head>

    <title>upload multiple image</title>

    <script src="jquery/jquery-3.4.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

</head>

<body>
<form action="uploadimage.php" method="post" enctype="multipart/form-data">
<input type="text" name="personname">
<input type="file" name="file[]" id="profile-img" multiple><br>
<input type="submit" name="submit" value="Upload image">

</form>

<form action="showimage.php" method="post" enctype="multipart/form-data">
    <input type="submit" name="showimage" value="Show image">
</form>

<div>
    <div id="imgs"></div>
</div>

<script>
    $("#profile-img").on('change',function() {
        var fileList = this.files; 
        for(var i = 0; i < fileList.length; i++)
        {
            //get a blob 
            var t = window.URL || window.webkitURL;
            var objectUrl = t.createObjectURL(fileList[i]);
            $('#imgs').append('<a href="' + objectUrl + '" data-lightbox="MyGallery"><img src="' + objectUrl + '" height="150px" width="150px" /></a>');

            j = i+1;
            if(j % 4 == 0)
            {
                $('#imgs').append('<br>');
            }

        }
     });
</script>

 <!-- <img src="" id="profile-img-tag" width="300px" height="300px" />  -->


 <!-- <script type="text/javascript">

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

</script> -->
 

</body>

</html>