<?php include('includes/function.inc.php');?>
<?php include('includes/header.inc.php');?>

<section id="image-slider">
<div id="img">
<div class="flexslider">
  <ul class="slides">
    <li><img alt="" src="images/309967_10150935573058530_1358648835_n.jpg"   /></li>
    <li><img alt="" src="images/376797_460411730659309_508825665_n.jpg" /></li>
    <li><img alt="" src="images/576543_10150935576678530_1866248720_n.jpg"/></li>
    <li><img alt="" src="images/1380788_648239968542195_2002660188_n.jpg"  /></li>
    <li><img alt="" src="images/532846_408528922513302_1064633594_n.jpg"  /></li>
  </ul><!--/.slides-->
</div><!--/.flexslider-->
</div>
</section>

<section id="social-media">

	<a href=""><img src="images/72-icons/Facebook.png" alt="facebook link"></a>  
     
    <a href=""><img src="images/72-icons/Twitter.png" alt="twitter link"></a>
    
    <a href=""><img src="images/72-icons/Youtube.png" alt="youtube link"></a>  
    
   <a href=""><img src="images/72-icons/Soundcloud.png" alt="soundcoud link"></a> 
     
    <a href=""><img src="images/72-icons/Linkedin.png" alt="linkedin link"></a>
  
</section>

<!--<script type="text/javascript" src="js/jquery1.8.1.min"></script>-->
<!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<!-- Initialize the slider on the div we named "flexslider" -->
<script>
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide", // set animation to slide
        smoothHeight: true // auto-adjust to fit the height of images
      });
    });
</script>


<?php include('includes/footer.inc.php');?>


