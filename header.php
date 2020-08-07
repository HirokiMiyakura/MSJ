<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
	assets: '<?php echo get_template_directory_uri(); ?>',
	tests: {}
});
</script>
</head>
<body <?php body_class(); ?>>
<!-- header -->
<header class="header clear" role="banner">
<div class="headerInner">
	<!-- logo -->
	<div class="logo">
		<a href="<?php echo home_url(); ?>">
			MSJキックボクシングジム
		</a>
	</div>
	<!-- /logo -->
	<div class="headerNavigationContainer">
		<div class="headerNavigationContainer__item">
		<a href="<?php echo home_url(); ?>/about/">MSJについて</a>
		</div>
		<div class="headerNavigationContainer__item">
		<a href="<?php echo home_url(); ?>/guidance/">入会案内</a>
		</div>
		<div class="headerNavigationContainer__item">
		<a href="<?php echo home_url(); ?>/class/">クラス紹介</a>
		</div>
		<div class="headerNavigationContainer__item">
		<a href="<?php echo home_url(); ?>/price/">料金案内</a>
		</div>
		<div class="headerNavigationContainer__item">
		<a href="<?php echo home_url(); ?>/news/">ニュース</a>
		</div>
		<div class="headerNavigationContainer__item">
		<a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
		</div>
	</div>
	<div class="sp" id="navArea">
		<nav>
			<div class="inner">
				<ul>
					<li><a href="<?php echo home_url(); ?>/about/">MSJについて</a></li>
					<li><a href="<?php echo home_url(); ?>/guidance/">入会案内</a></li>
					<li><a href="<?php echo home_url(); ?>/class/">クラス紹介</a></li>
					<li><a href="<?php echo home_url(); ?>/price/">料金案内</a></li>
					<li><a href="<?php echo home_url(); ?>/news/">ニュース</a></li>
					<li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
				</ul>
			</div>
		</nav>
		<div class="toggle_btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div id="mask"></div>
	</div>
</div>
</header>
<!-- /header -->
<main>
