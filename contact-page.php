<?php
/*
 * Template Name: お問い合わせ（contact-page.php）
 */
get_header(); ?>
<div class="your-class">
  <div>
	<img src="<?php echo get_template_directory_uri(); ?>/img/common/common1.png" alt="" />
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
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">お問い合わせ<span> ~ CONTACT ~</span></h2>
<div class="inner formInner">
<?php  echo do_shortcode('[contact-form-7 id="25" title="コンタクトフォーム 1"]'); ?>
</div>
</section>
<?php get_footer(); ?>
