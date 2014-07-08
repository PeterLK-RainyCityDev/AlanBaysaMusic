<?php include('includes/function.inc.php');?>
<?php include('includes/header.inc.php');?>

<section class="main-content">

	<article class="first-article">

    <h1 class="pagetitle"><?php echo $headerHeader; ?></h1>
    
		<form action="verify.php">
        	<p><label>First Name:
            <input type="text"/></label></p>
            
            <p><label >Last Name:
            <input type="text"/></label></p>
            
            <p><label>Email:
            <input type="email"/></label></p>
            
            <p><label >Message:<br/>
            <textarea></textarea></label></p>
            <div class="label" style="float:left; max-width:96%; display:block; clear:left;">
            <?php
             require_once('includes/recaptchalib.php');
  			$publickey = "6LcbCOsSAAAAAMN1Cim7M4GZFs9DM06Fi4y3wpTV"; // you got this from the signup page
  			echo recaptcha_get_html($publickey);
            ?>
            </div>
            <br/>
            <button type="submit" style="float:left; clear:both; margin-top:10px; box-shadow: 0 0 8px 2px 
            #000; width:100px; height:50px;">Submit</button>
        </form>
        
	</article>
</section>


<?php include('includes/right-sidebar.inc.php');?>

<?php include('includes/footer.inc.php');?>