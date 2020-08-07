<?php
/*
* Template Name: ニュース（news-page.php）
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
<div class="inner">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">ニュース一覧<span> ~ News ~</span></h2>
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query( array(
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 20,
    'orderby'     => 'date',
    'order' => 'DESC'
));
if ($the_query->have_posts()) :
  $html_top_result='<div>';
while ($the_query->have_posts()) : $the_query->the_post() ; ?>
<article>
  <h4>
    <a href="<?php the_permalink(); ?>">
    <span><?php the_time('Y年n月j日'); ?></span>
    <?php the_title(); ?>
    </a>
  </h4>
</article>
<?php endwhile;
$html_top_result .= '</div>';
else :
$html_top_result = '<div><p>ありません。</p></div>';
endif;
echo $html_top_result;
?>
<div class="pnavi">
<?php //ページリスト表示処理
  global $wp_rewrite;
  $paginate_base = get_pagenum_link(1);
  if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg('paged','%#%');
  } else {
    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
    user_trailingslashit('page/%#%/','paged');
    $paginate_base .= '%_%';
  }
  echo paginate_links(array(
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $the_query->max_num_pages,
    'mid_size' => 1,
    'current' => ($paged ? $paged : 1),
    'prev_text' => '< 前へ',
    'next_text' => '次へ >',
  )); 
?>
</div>
</section>
<?php get_footer(); ?>
