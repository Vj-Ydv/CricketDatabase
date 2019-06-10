<?php
    include('connection.php');
    if(isset($_POST['submit']))
    {
        for($i=0;$i<count($_FILES['file']['name']);$i++)
        {
            $playername=$_POST['playername'];
            $filetmp=$_FILES['file']['tmp_name'][$i];
            $filename=$_FILES['file']['name'][$i];
            $folderpath="gallery/$filename";
            $sql="insert into imagegallery(Name,Image) values('$playername','$filename')";
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

    <title>Upload Multiple Images</title>

    <script src="jquery/jquery-3.4.1.js"></script>

    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    
    <style>
        .button {
                background-color: green;
                border: none;
                color: white;
                padding: 12px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
               margin-top: 20px;
                cursor: pointer;
               
        }
        .uploadbtn {
            background-color: darkviolet;
            border: none;
            color: white;
            /* padding: 8px 20px; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 20px 2px;
            cursor: pointer;
            height:30px;
            width:240px;
            
        }
        .header{
            background-color: darkviolet;
            color:white;
            text-align: center;
            font-size: 30px;
            height:50px;
            padding:15px;
        }
        .container{
            display: grid;
            grid-template-columns: 60% 40%;
            padding-top: 5%;
            padding-left: 5%;
        }
        label{
            color:darkviolet;
            font-size: 20px;
        }
        .min-max-input:focus {
            outline: 1px darkviolet;
            box-shadow: 4px 4px 4px  darkviolet;
        }
        input[type="text"]{
            font-size: 16px;
            height: 35px;
            width:300px;
            padding-left: 20px;

        }
        .column2{
            padding-left: 20%;
            /* background-color:  #E9E9E9; */
         
        }
        div.polaroid {
            width: 260px;
            padding: 10px 10px 10px 10px;
            border: 1px solid #BFBFBF;
            background-color: white;
            box-shadow: 10px 10px 5px pink;
        }
        div.rotate_right {
                float: left;
                
                transform: rotate(7deg);
                }

        div.rotate_left {
            float: left;
            
            transform: rotate(-8deg);
        }
    </style>

</head>

<body>
    <div class="header">UPLOAD IMAGES TO GALLERY</div>
<div class="container">
    <div class="column1">
        <form action="uploadmultipleimage.php" method="post" enctype="multipart/form-data">
            <label>Player Name</label>

            <input class="min-max-input" type="text" name="playername"
            ng-blur="$ctrl.blur('text')" ng-change="$ctrl.changeText('text')"
            ng-model-options="{debounce: 500}" ng-model="$ctrl.text"></td><br><br>

            <label>Browse for images here...</label><br>
            <input type="file" name="file[]" id="profile-img" class="uploadbtn" multiple><br>
            <input id="submit" class="button" type="submit" name="submit" value="Upload image">
        </form>
        <div>
            <div id="imgs"></div>
        </div>
    </div>
    
    <div class="column2">
        <div class="polaroid rotate_right">
        <img src="img/dhoni2.jpg" alt="Player 1" width="260" height="213">
        <!-- <p class="caption">The pulpit rock in Lysefjorden, Norway.</p> -->
        </div>

        <div class="polaroid rotate_left">
        <img src="img/ab2.jpg" alt="Player 2" width="260" height="213">
        <!-- <p class="caption">Monterosso al Mare. One of the five villages in Cinque Terre, Italy.</p> -->
        </div>

        <div class="polaroid rotate_right">
        <img src="img/virat3.jpg" alt="Player 3" width="260" height="213">
        <!-- <p class="caption">Monterosso al Mare. One of the five villages in Cinque Terre, Italy.</p> -->
        </div>

        <div class="polaroid rotate_left">
        <img src="img/gayle1.jpg" alt="Player 4" width="260" height="213">
        <!-- <p class="caption">Monterosso al Mare. One of the five villages in Cinque Terre, Italy.</p> -->
        </div>

    </div>    

    
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

     $(function() {

// Define maximum number of files.
    var max_file_number = 10,
    // Define your form id or class or just tag.
    $form = $('form'), 
    // Define your upload field class or id or tag.
    $file_upload = $('#profile-img', $form), 
    // Define your submit class or id or tag.
    $button = $('#submit', $form); 

    // Disable submit button on page ready.
   // $button.prop('disabled', 'disabled');

    $file_upload.on('change', function () {
    var number_of_images = $(this)[0].files.length;
    if (number_of_images > max_file_number) {
        alert(`You can upload maximum ${max_file_number} files.`);
        $(this).val('');
        $button.prop('disabled', 'disabled');
    } else {
        $button.prop('disabled', false);
    }
    });
    });

</script>

 
 

</body>

</html>