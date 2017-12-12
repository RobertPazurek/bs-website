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
	
	<!--jQuery-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	 
	
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:['table', 'corechart', 'bar']});
      google.setOnLoadCallback(init);

      function init() {
        queryData();
        //window.setInterval(function () { queryData() }, 50000);
      }

      function queryData() {
        var query = new google.visualization.Query("https://docs.google.com/spreadsheets/d/1Z6LTCdQ8dKF6J3T-47mlmVC4nBLgabHCJJtci5Ix53w/edit?usp=sharing&sheet=AggregateResults");
        query.setQuery('select B, A WHERE A > 0 ORDER BY A DESC');
        query.send(handleResponse);
      }

      function handleResponse(response) {
        if (response.isError()) {
          alert('Daten konnten nicht geladen werden, bitte versuche es spÃ¤ter noch einmal oder wende dich an info@gethigh.de.');
          return;
        }

        var data = response.getDataTable();

        drawTable(data);
        drawChart(data);
      }

      function drawTable(data) {

        var table = new google.visualization.Table(document.getElementById('table_div'));
        
        var tableOptions = {showRowNumber: true, width: '100%', height: '100%', page: 'enable', pageSize: 5, sort: 'disable'};

        table.draw(data, tableOptions);
      }

      function drawChart(data) {

      var options = {
        title: 'Get High Scores',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Punkte',
          minValue: 0
        },
        vAxis: {
          title: 'Teilnehmer'
        }
      };
        var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
        chart.draw(data, options);
      }
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
	