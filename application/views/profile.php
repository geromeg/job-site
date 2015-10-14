<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="top-container">
	<div class="main-profile-section">
		<div class="profile-picture-section">
			<div class="profile-picture-box"></div>
		</div>
		<div class="main-details-section">
			<input type="text" class="large-input-box" placeholder="Full Name" />
		</div>
		<canvas id="canvas"></canvas>
	</div>
</div>
<!--
<script type="text/javascript">
	var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
 
var image = new Image();
image.src = 'assets/images/test.jpg';
image.onload = drawImage;
 
function drawImage(event) {
  var w = image.width;
  var h = image.height;
 
  canvas.width = w;
  canvas.height = h;
 
  context.drawImage(image, 0, 0);
  var imageData = context.getImageData(0, 0, w, h);
 
  // Sobel constructor returns an Uint8ClampedArray with sobel data 
  var sobelData = Sobel(imageData);
 
  // toImageData() return a new ImageData object 
  var sobelImageData = sobelData.toImageData();
  context.putImageData(sobelImageData, 0, 0);
}

</script>!-->