<?php
$webpage = basename($_SERVER['SCRIPT_FILENAME']);

if($webpage == "index.php"){
	$styles = "stylesheets/intro-page.css";
	$jScript = "js/main-nav-index.js";
	$css3 = "http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Findex.php&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en";
}else{
	$styles = "stylesheets/standard-page.css";
	$jScript = "js/main-nav.js";
	$css3 = "http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Faboutalan.php&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en";
	}
	
	$content = array(
			array(
				'title' => "Alan Baysa Music",
				'header' => ""),
			array(
				'title' => "About Alan",
				'header' => "Alan's Life"),
			array(
				'title' => "Other Than Music",
				'header' => "Hobbies"),
			array(
				'title' => "Alan's Music",
				'header' => "Musical Interests"),
			array(
				'title' => "Alan's Youtube",
				'header' => "Alan's Youtube"),
			array(
				'title' => "Alan's Soundcloud",
				'header' => "Alan's Soundcloud Collection"),
			array(
				'title' => "Gigs &amp; Shows",
				'header' => "Up Comming Event's"),
			array(
				'title' => "Past Gigs",
				'header' => "Places Performed"),
			array(
				'title' => "Contact Alan",
				'header' => "Contact Me"),
			array(
				'title' => "Social Media",
				'header' => "Other ways of finding me")
		
	);
	
switch($webpage){
	case 'index.php':
	$headerTitle = $content[0]['title'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Findex.php';
	break;
	case 'aboutalan.php':
	$headerTitle = $content[1]['title'];
	$headerHeader = $content[1]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Faboutalan.php';
	break;
	case 'hobbies.php':
	$headerTitle = $content[2]['title'];
	$headerHeader = $content[2]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fhobbies.php';
	break;
	case 'music-intrest.php':
	$headerTitle = $content[3]['title'];
	$headerHeader = $content[3]['header'];
	$html5 = '	http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fmusic-intrest.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	

	
	break;
	case 'youtube.php':
	$headerTitle = $content[4]['title'];
	$headerHeader = $content[4]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fyoutube.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	break;
	case 'soundcloud.php':
	$headerTitle = $content[5]['title'];
	$headerHeader = $content[5]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fsoundcloud.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	break;
	
	case 'events.php':
	$headerTitle = $content[6]['title'];
	$headerHeader = $content[6]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fevents.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	break;
	
	case 'performed.php':
	$headerTitle = $content[7]['title'];
	$headerHeader = $content[7]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fperformed.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	break;
	
	case 'contact.php':
	$headerTitle = $content[8]['title'];
	$headerHeader = $content[8]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fcontact.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	break;
	
	case 'social-media.php':
	$headerTitle = $content[9]['title'];
	$headerHeader = $content[9]['header'];
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fsocial-media.php%23twitter-button&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	break;
	
	default:
	$headerTitle= "Verify";
	$headerHeader= "Sorry Try Again";
	$html5 = 'http://validator.w3.org/check?uri=http%3A%2F%2Fwww.rainycitydev.com%2Fweb120%2Ffp%2Falan-baysa%2Fverify.php&charset=%28detect+automatically%29&doctype=Inline&group=0&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices';
	}

?>