<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(' | ', true, 'right'); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/normalize.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/grid.css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400|Enriqueta:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<?php wp_head(); ?>
	
		<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36431124-1']);
	  _gaq.push(['_setDomainName', 'thepark1400sunset.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<body <?php body_class(); ?>>

	<div class="container clearfix">
		<!--<div class="top-navigation">-->

			<div class="grid_12">

				<div class="grid_4 top-navigation">

					<a href="../"><h1>The Park Restaurant</h1></a>

				</div>

				<div class="grid_8 omega nav">


					<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>

				</div>

			</div>

		<!--</div>-->