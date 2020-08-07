<?php get_header(); ?>

<div class="topImage">
<h1 data-aos="zoom-in-up" data-aos-duration="1000">Latest News</h1>
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

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- post thumbnail -->
<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_post_thumbnail(); // Fullsize image for the single post ?>
	</a>
<?php endif; ?>
<!-- /post thumbnail -->
<!-- post details -->
<span class="date"><?php the_time('Y年n月j日'); ?></span>
<!-- /post details -->
<!-- post title -->
<h1>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</h1>
<!-- /post title -->
<?php the_content(); // Dynamic Content ?>
<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
</article>
<!-- /article -->
<?php endwhile; ?>
<?php else: ?>
<!-- article -->
<article>
<h1><?php _e( '申し訳ございません。表示するものがありません。', 'html5blank' ); ?></h1>
</article>
<!-- /article -->
<?php endif; ?>

</section>
<!-- /section -->

<?php get_footer(); ?>
