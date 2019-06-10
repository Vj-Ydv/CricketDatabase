<!DOCTYPE html>
<html>
<head>
  <title>Image Gallery</title>
  
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">

  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
  <style>
		.body{
				background-image: url("img/img.jpg");
				background-repeat: no-repeat;
				background-position: center;
					    
				background-attachment: fixed;
		}
    h1{
      text-align: center;
      color:aqua;
    }
  </style>
</head>

<body>
  <h1>IMAGE GALLERY</h1>
<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php
      $name=$_GET['PlayerName'];
      include('connection.php');
      $sql="select * from imagegallery where Name='$name'";
      $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
      $id=1;
      if($result==true)
      {
        while($row=mysqli_fetch_assoc($result))
        {
            $imagename=$row['Image'];
            ?>
              <div class="swiper-slide" >
                <div class="imgBx">
                  <a href="gallery/<?php echo $imagename ?>" data-lightbox="MyGallery"><img src="gallery/<?php echo $imagename ?>"></a>
                </div>
                <div class="details">
                  <h3>Image <?php echo $id++ ?></h3>
                </div>
              </div>      
    
          <?php
        }
      }

    ?>

  </div>  
</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>
  <script type="text/javascript" src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 60,
        stretch: 20,
        depth: 200,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>

</html>