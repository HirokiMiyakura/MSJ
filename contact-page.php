<?php
/*
 * Template Name: お問い合わせ（contact-page.php）
 */
get_header(); ?>
<div class="pageHero">
  <img src="<?php echo get_template_directory_uri(); ?>/img/common/common1.png" alt="お問い合わせ" />
  <div class="pageHero__overlay"></div>
  <div class="pageHero__content">
    <p class="pageHero__eyecatch">- CONTACT -</p>
    <h1 class="pageHero__title">無料体験申し込み・お問い合わせ</h1>
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
<section class="contactSection">
  <!-- 上部：タイトル + リード文 -->
  <div class="contactSection__header" data-aos="fade-up" data-aos-duration="800">
    <h2 class="title">無料体験申し込み・お問い合わせ<span>- CONTACT -</span></h2>
    <p class="contactSection__lead">無料体験のご予約・入会のご相談など、お気軽にご連絡ください。<br>2営業日以内にご返信いたします。</p>
  </div>

  <div class="contactSection__methods" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
    <div class="contactSection__method">
      <div class="contactSection__methodIcon">&#x2709;</div>
      <p class="contactSection__methodLabel">メールで問い合わせる</p>
      <p class="contactSection__methodDesc">24時間受付 / 2営業日以内に返信</p>
    </div>
    <div class="contactSection__methodDivider">or</div>
    <div class="contactSection__method">
      <div class="contactSection__methodIcon">&#x260E;</div>
      <p class="contactSection__methodLabel"><a href="tel:0925556659">092-555-6659</a></p>
      <p class="contactSection__methodDesc">営業時間内受付</p>
    </div>
  </div>

  <!-- フォームカード -->
  <div class="contactSection__formWrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
    <div class="contactSection__formCard">
      <h3 class="contactSection__formTitle">&#x2709; メールフォーム</h3>
      <?php echo do_shortcode('[contact-form-7 id="25" title="コンタクトフォーム 1"]'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
