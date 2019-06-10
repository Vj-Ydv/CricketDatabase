<!DOCTYPE html>
			<html lang="en">
			<head>	
				<style type="text/css">.row {
	text-align: center;
}
body{
	background-color: black;
}

.carousel .item {
	width: 350px;
	height: 250px;
	background: #333;
	background-size: 100%;
	vertical-align: middle;
	line-height: 150px;
	box-shadow: 0 0 5px rgba(0,0,0,0.5);
}

.controls {
	position: absolute;
	top: 500px;
	left: 50%;
	width: 150px;
	margin-left: -75px;
}

.controls a {
	display: block;
}

.controls .previous {
	float: left;
}

.controls .next {
	float: right;
}
.carousel .item {
	display: block;
	position: absolute;
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	-o-transform: scale(0.5);
	transform: scale(0.5);
}

.carousel .item.active {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
}

.carousel .item.transition {
	-webkit-transition: all 0.35s ease;
	-moz-transition: all 0.35s ease;
	-o-transition: all 0.35s ease;
    transition: all 0.35s ease;
}</style>		
</head>
<body><div class="row">
  <ul class="carousel">
    <li class="item active"><img src="img/beast.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/creed.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/jadeja.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/train1.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/spiderman.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/village1.jpg" width="350" width="250" /></li>
	<li class="item"><img src="img/batman.jpg" width="350" height="250" /></li>
	
	<li class="item"><img src="img/beast.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/creed.jpg" width="350" height="250" /></li>
    <li class="item"><img src="img/jadeja.jpg" width="350" height="250" /></li>
   

  </ul>
</div>
<div class="controls">
 <a href="#" class="previous">Previous</a> 
 <a href="#" class="next">Next</a>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="//webcodesnip.com/uploads/snippet-js/jquery.circular-carousel.js"></script>
			<script type="text/javascript">
				(function() {

	$(document).ready(function() {

		var options = {
			ovalWidth: 400,
			ovalHeight: 50,
			offsetX: 100,
			offsetY: 325,
			angle: 0,
			activeItem: 0,
			duration: 350,
			className: 'item'
		}

		var carousel = $('.carousel').CircularCarousel(options);

		/* Fires when an item is about to start it's activate animation */
		carousel.on('itemBeforeActive', function(e, item) {
			$(item).css('box-shadow', '0 0 20px blue');
		});

		/* Fires after an item finishes it's activate animation */
		carousel.on('itemActive', function(e, item) {
			$(item).css('box-shadow', '0 0 20px green');
		});

		/* Fires when an active item starts it's de-activate animation */
		carousel.on('itemBeforeDeactivate', function(e, item) {
			$(item).css('box-shadow', '0 0 20px yellow');
		})

		/* Fires after an active item has finished it's de-activate animation */
		carousel.on('itemAfterDeactivate', function(e, item) {
			$(item).css('box-shadow', '');
		})

		
		/* Previous button */
		$('.controls .previous').click(function(e) {
			carousel.cycleActive('previous');
			e.preventDefault();
		});

		/* Next button */
		$('.controls .next').click(function(e) {
			carousel.cycleActive('next');
			e.preventDefault();
		});

		/* Manaully click an item anywhere in the carousel */
		$('.carousel .item').click(function(e) {
			var index = $(this).index('li');
			carousel.cycleActiveTo(index);
			e.preventDefault();
		});
	
	});

})();
			</script>

		</body>
		</html>