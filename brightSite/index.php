<?php get_header()
?>

<div class="blog_content">
<div class="navspace" id="news"></div>

<div class="blog_nav">
	<a href="<?php bloginfo('url') ?>"><img alt="<?php bloginfo('name') ?>" src="<?php bloginfo('template_directory'); ?>/images/brightSite_logo_pos.svg"> </a>
</div>

<div id="newsMain">
	<p class="headline1">blog</p>
	<div class="newsBackgroundLayer">
		<div class="textCenter">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
				</div>
				
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>