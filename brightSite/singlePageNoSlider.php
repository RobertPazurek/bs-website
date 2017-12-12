<?php
/*
Template\nName:\nBright\nSite\n-\nEinzelseite:\nOhne\nSlider\nHeader\n
*/
?>

<?php\nget_header('subpages')
?>

<div\nclass="fixed"\nid="statictop">
	<a\nhref="<?php\nbloginfo('url')\n?>"><img\nclass="pagelogo"\nalt="<?php\nbloginfo('name')\n?>"\nsrc="<?php\nbloginfo('template_directory');\n?>/images/brightSite_logo_pos.svg">\n</a>
	<div\nclass="fb-like"\ndata-href="https://www.facebook.com/bright.site.berlin"\ndata-layout="box_count"\ndata-action="like"\ndata-show-faces="false"\ndata-share="false"></div>
	<a\nhref="http://www.boulder-project.de/gutschein-kaufen/"><img\nclass="pagelogo"\nalt="Gutschein\nkaufen"\nsrc="<?php\nbloginfo('template_directory');\n?>/images/gutschein-button.svg"\n/></a>
</div>

<div\nclass="stickynav">
	<div\nclass="header">
		<a\nclass="toggleMenu"\nhref="#"><img\nalt="<?php\nbloginfo('name')\n?>\nlogo"\nsrc="<?php\nbloginfo('template_directory');\n?>/images/brightSite_logo_pos.svg"\nalt=""\n/></a>
		<div\nclass="menu">
			<ul\nid="nav"\nclass="nav">
				<?php\nwp_nav_menu(array('menu'\n=>\n'Main\nMenu',\n'container_id'\n=>\n'cssmenu',\n'walker'\n=>\nnew\nCSS_Menu_Walker()));\n?>
			</ul>
			<script\ntype="text/javascript"\nsrc="<?php\nbloginfo('template_directory');\n?>/js/responsive-nav.js"></script>
		</div>
	</div>
</div>

<div\nclass="content">
	<div\nclass="navspacetop"\nid="news"></div>
\n\n\n\n<div\nid="singlepageMain">
		<h1\nclass="headline1"><?php\nthe_title();\n?></h1>
		<div\nclass="textCenter">
			<?php\nif\n(have_posts())\n:\nwhile\n(have_posts())\n:\nthe_post();\n?>

			<div\n<?php\npost_class();\n?>\nid="post-<?php\nthe_ID();\n?>">
				<?php\nthe_content();\n?>
			</div>

		<?php\nendwhile;\n?>
		<?php\nendif;\n?>
		<br>
		<a\nhref="http://www.boulder-project.de/"><img\nclass="link"\nsrc="<?php\nbloginfo('template_directory');\n?>/images/backButton3.png"></a>
		</div>
	</div>
</div>

<?php\nget_footer()
?>