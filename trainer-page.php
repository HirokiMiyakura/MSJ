<?php
/*
 * Template Name: トレーナー紹介（trainer-page.php）
 */
get_header(); ?>
<div class="pageHero">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/about.png" alt="トレーナー紹介" />
  <div class="pageHero__overlay"></div>
  <div class="pageHero__content">
    <p class="pageHero__eyecatch">- TRAINERS -</p>
    <h1 class="pageHero__title">トレーナー紹介</h1>
  </div>
</div>

<div class="breadcrumbsOuter">
	<div class="inner">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>
	</div>
</div>
<section>
<div class="inner">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">筑紫野店<span> ~ CHIKUSHI ~</span></h2>
<p data-aos="zoom-in-up" data-aos-duration="1000"><img src="<?php echo get_template_directory_uri(); ?>/img/trainer/1-2.jpg" alt=""></p>
</div>
</section>

<section>
<div class="inner">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">天神店<span> ~ TENJIN ~</span></h2>
<p data-aos="zoom-in-up" data-aos-duration="1000"><img src="<?php echo get_template_directory_uri(); ?>/img/trainer/2-2.jpg" alt=""></p>
</div>
</section>

<section>
<div class="inner">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">六本松店<span> ~ ROPPONMATSU ~</span></h2>
<p data-aos="zoom-in-up" data-aos-duration="1000"><img src="<?php echo get_template_directory_uri(); ?>/img/trainer/3-2.jpg" alt=""></p>
</div>
</section>

<?php get_footer(); ?>
