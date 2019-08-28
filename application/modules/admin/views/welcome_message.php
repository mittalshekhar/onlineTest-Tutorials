<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?= base_url('/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')?>">
	<meta charset="utf-8">

	<title>Welcome to CodeIgniter with HMVC</title>
	<style type="text/css">
div.gallery {
  margin: 5px;
  border: 2px solid #ccc;
  float: left;
  width: 180px;
  background: #00bfff;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

h3,h4{
	text-align: center;
}
.owl-prev,
.owl-next {
  position: absolute;
  top: 35%;
  height: 50px;
  width: 50px;
 
}
.owl-next {
right: -1rem;
 
}
.owl-prev {
 left: -1rem;
 
}



	</style>

	
</head>
<body>
<div class="owl-carousel owl-theme">
    <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/modern.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div>
    <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/controls.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div>
    <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/feather.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div>
    <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/controls.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div>
     <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/controls.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div>
     <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/controls.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div> <div class="item">
    	<div class="gallery" style="width: 200px;">
                  <img src="<?= base_url('uploads/controls.png')?>" alt="Modern Browsers">
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                </div>
    </div>
</div>
<?php
    $url = 'https://www.youtube.com/watch?v=PUPok5AZ0ek';
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    $id = $matches[1];
    $width = '250px';
    $height = '150px';
?>
<p>latest slider</p>
<div class="owl-carousel owl-theme">
    <div class="item">
    
                 <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="5" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                
    </div>
    <div class="item">
    
                <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
         
    </div>
    <div class="item">
    
                 <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                
    </div>
    <div class="item">
    
                <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
                
    </div>
     <div class="item">
   
                 <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
 
    </div>
     <div class="item">
    	
                <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
             
    </div> <div class="item">

                  <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe>
                    <h3>Modern</h3>
                    <h4>Browsers Compatibility</h4>
              
    </div>
</div>

 
</body>
</html>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
<script src="<?= base_url('/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')?>"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>