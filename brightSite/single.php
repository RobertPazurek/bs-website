<?php get_header('news')
?>

<div class="fixed" id="statictop">
	<a href="<?php bloginfo('url') ?>"><img class="pagelogo" alt="<?php bloginfo('name') ?>" src="<?php bloginfo('template_directory'); ?>/images/brightSite_logo_pos.svg"> </a>
	<div class="fb-like" data-href="https://www.facebook.com/bright.site.berlin" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
</div>
	
<div class="stickynav">
	<div class="header">
		<a class="toggleMenu" href="#"><img alt="<?php bloginfo('name') ?> logo" src="<?php bloginfo('template_directory'); ?>/images/brightSite_logo_pos.svg" alt="" /></a>
		<div class="menu">
			<ul id="nav" class="nav">
				<?php wp_nav_menu(array('menu' => 'Main Menu', 'container_id' => 'cssmenu', 'walker' => new CSS_Menu_Walker())); ?>		
			</ul>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/responsive-nav.js"></script>
		</div>
	</div>
</div>

<div class="content">
	<div class="navspace" id="news"></div>
    <div id="singlepageMain">
        <img class="siteimageTop" alt="news bild" src="<?php bloginfo('template_directory'); ?>/images/site_head1.png" />
		<h2 class="headline1">news</h2>
		<div class="textCenter">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
			
		<?php endwhile; ?>
		<?php endif; ?>
		<br>
		<a href="http://www.boulder-project.de/"><img class="link" src="<?php bloginfo('template_directory'); ?>/images/backButton3.png"></a>
			
		</div>
	</div>
</div>
			
