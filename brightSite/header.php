<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	
	<title> <?php bloginfo('name') ?> </title>
	
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php bloginfo('name') ?> RSS feed" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php bloginfo('name') ?> comments RSS feed" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	
	<meta name="description" content="<?php bloginfo('description') ?>" />
	
	<!--GoogleFont Schriften -->
	<link href='http://fonts.googleapis.com/css?family=Karma:400,300' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic' rel='stylesheet' type='text/css' />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
	
	<!--GoogleMaps API -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!--jQuery-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

 	<script type="text/javascript">
	    
	   function initialize() {
		  var myLatlng = new google.maps.LatLng(52.481906,13.365547);
		  var mapOptions = {
		    zoom: 16,
		    center: myLatlng,
		    scrollwheel: false
		  }
		  var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);
		
		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'bright site - berlin boulder project'
		  });
		}


		google.maps.event.addDomListener(window, 'load', initialize);
		

    </script>
    
	<?php wp_head() // Do not remove; helps plugins work ?>

</head>

<body class="">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	