<?php
/*
Template Name: Bright Site - Homepage im OnePage design
*/
?>

<?php get_header()
?>
<div id="bilder"></div>
<div class="fixed" id="statictop">
	<a href="<?php bloginfo('url') ?>"><img class="pagelogo" alt="<?php bloginfo('name') ?>" src="<?php bloginfo('template_directory'); ?>/images/brightSite_logo_pos.svg"> </a>
    <br>
<div class="fb-like" data-href="http://www.facebook.com/bright.site.berlin" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
<div class="fb-link"><a href="http://www.facebook.com/bright.site.berlin" target="_blank"><img alt="Du findest uns auf Facebook" src="http://www.boulder-project.de/wp-content/uploads/2016/10/FB-FindUsonFacebook-online-512_de_DE.png"></a></div>
</div>
	
<div class="stickynav">
	<div class="header">
		<a class="toggleMenu" href="#"><img alt="<?php bloginfo('name') ?> logo" src="<?php bloginfo('template_directory'); ?>/images/brightSite_logo_pos.svg" alt="" /></a>
		<div class="menu" id="tableofcontent">
			<ul id="nav" class="nav">
				<?php wp_nav_menu(array('menu' => 'Main Menu', 'container_id' => 'cssmenu', 'walker' => new CSS_Menu_Walker())); ?>		
			</ul>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/responsive-nav.js"></script>
		</div>
	</div>
</div>

<div class="content">
  <div class="navspacetop" id="news"></div>
  <?php masterslider(1); ?>  
  <div id="newsMain">
    <h2 class="headline1">news</h2>
    <div class="textCenter">

	  <?php
	    $myPosts = new WP_Query();
		$myPosts->query('showposts=4');
							
			while ($myPosts->have_posts()) : $myPosts->the_post();	
              echo '<div class="clearfix">';
			  echo '<div class="newspost"> <a href="'; 
			    the_permalink();
			  echo '">';
			  echo '</a>';
		   	
		   	  if ( has_post_thumbnail() ) { the_post_thumbnail(); } 
		      global $more; $more = FALSE;
		      echo '<h2>';
                the_title();
              echo '</h2>';
		      the_content();
              echo '<div style="clear:left;"></div>';
              echo '</div>';
              echo '</div>';
		    endwhile;
            
		?>
		
		</div>
    </div>

<?php wp_reset_query(); ?> 

<?php
$mypage  = get_page_by_title( 'site');
$content = $mypage->post_content;
?>

<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<?php masterslider(2); ?>  
<div id="<?php echo $mypage -> post_title; ?>Main">
	<h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
	<div class="textCenter">
	  <div class="entry"><?php echo $content; ?></div>
	</div>
</div>

<?php
$mypage  = get_page_by_title( 'kids');
$content = $mypage->post_content;
?>

<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<?php masterslider(3); ?>  
<div id="<?php echo $mypage -> post_title; ?>Main">
	<h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
	<div class="textCenter">
	  <div class="entry"><?php echo $content; ?></div>
	</div>
</div>

<?php
$mypage  = get_page_by_title( 'kurse');
$content = $mypage->post_content;
?>
<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<?php masterslider(5); ?>  

<div id="<?php echo $mypage -> post_title; ?>Main">
	<h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
	<div class="textCenter">
	  <div class="entry"><?php echo $content; ?></div>
	</div>
</div>

<?php
$mypage  = get_page_by_title( 'zeiten');
$content = $mypage->post_content;
?>
<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<?php masterslider(6); ?>  

<div id="<?php echo $mypage -> post_title; ?>Main">
	<h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
	<div class="textCenter">
	  <div class="entry"><?php echo $content; ?></div>
	</div>
</div>


<?php
$mypage  = get_page_by_title( 'preise');
$content = $mypage->post_content;
?>

<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<?php masterslider(7); ?> 

<div id="<?php echo $mypage -> post_title; ?>Main">
	<h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
	<div class="textCenter">
	  <div class="entry"><?php echo $content; ?></div>
	</div>
</div>


<?php
$mypage  = get_page_by_title( 'gutscheine');
$content = $mypage->post_content;
?>
<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<div id="<?php echo $mypage -> post_title; ?>Main">
    <h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
    <div class="textCenter">
      <div class="entry"><?php echo $content; ?></div>
    </div>
</div>


<?php
$mypage  = get_page_by_title( 'anfahrt');
$content = $mypage->post_content;
?>

<div class="navspace" id="<?php echo $mypage -> post_title; ?>"></div>
<div id="<?php echo $mypage -> post_title; ?>Main">
	<div id="mapCanvas"> </div>
	<h2 class="headline1"><?php echo $mypage -> post_title; ?></h2>
	<div class="textCenter">
	  <div class="entry"><?php echo $content; ?></div>
	</div>
</div>

<?php
$mypage  = get_page_by_title( 'kontakt');
$content = $mypage->post_content;
?>

<div class="navspace" id="kontakt"></div>
<div class="navspace" id="impressum"></div>
<div id="<?php echo $mypage -> post_title; ?>Main">
	<h2 class="headline1">-</h2>
	<div class="<?php echo $mypage -> post_title; ?>BackgroundLayer">
		<div class="textCenter">
			<div class="entry"><?php echo $content; ?></div>
		</div>
	</div>
</div>


</div><!-- #content .hfeed -->

<?php get_footer()
?>
