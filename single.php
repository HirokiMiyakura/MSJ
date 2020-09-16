<?php get_header(); ?>

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
<div class="inner">
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
<p><?php _e( 'カテゴリー: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
<!-- /post details -->
<!-- post title -->
<h1>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</h1>
<!-- /post title -->
<?php the_content(); // Dynamic Content ?>
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
</div>
</section>
<!-- /section -->

<?php get_footer(); ?>
