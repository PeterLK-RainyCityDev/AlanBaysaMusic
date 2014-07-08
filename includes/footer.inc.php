


<?php if($webpage != "index.php" ) echo

 '<div id="twitter-button" class="show">
<h2><a href="#twitter-button">Calendar & Twitter Feed</a></h2>
</div>
<a class="top-button" href="#top">Top of page</a>';?>

<footer>
<p id="copy-right">&copy; <?php echo date('Y');?>, all rights reserved to Peter L.K.</p>

<div id="validation">
<a target="_blank" href="<?php echo $html5;?>"><img src="images/html5.png" alt="html5 validationg icon link"></a>
<a target="_blank" href="<?php echo $css3;?>"><img src="images/css3.png" alt="css3 validation icon link"></a> 
</div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script src="js/jquery.fittext.js"></script>
<script>
	$(document).ready(function() {
        $('#responsive_headline').fitText(1.2,{ minFontSize: '5px',
		 maxFontSize: '500px' });
		 $('.pagetitle').fitText(1.2,{maxFontSize:'40px'});
		 $('#copy-right').fitText(1.2,{maxFontSize:'16px', minFontSize: '5px'});
		 $('#twitter-button').fitText(1.2,{maxFontSize:'30px'});
		 $('.top-li').fitText();
		 $('#banner-layer').height($('header').width()/4.2);
		 
		
    });
	
	$(window).resize(function() {
        $('#banner-layer').height($('header').width()/4.2);
    });

<!-- Initialize the slider on the div we named 'flexslider' -->

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: 'slide', // set animation to slide
        smoothHeight: true // auto-adjust to fit the height of images
      });
    });
</script>
</body>
</html>
