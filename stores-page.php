<?php
/*
 * Template Name: 店舗紹介（stores-page.php）
 */
get_header(); ?>
<div class="your-class">
  <div>
  	<h1>店舗紹介 ~ STORES ~</h1>
	<img src="<?php echo get_template_directory_uri(); ?>/img/top/mainImg2.png" alt="" />
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
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">店舗紹介<span> ~ Stores ~</span></h2>

<section class="topGym">
<div class="gymContainer">
	<div class="gymContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top/store1.png" alt="" />
	</div>
	<div class="gymContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<h3>筑紫野店</h3>
		<table class="footerTable">
        <tr>
          <td>住所</td>
          <td>福岡県筑紫野市筑紫駅前通1-1-1筑紫駅前ビル２F</td>
        </tr>
        <tr>
          <td>交通</td>
          <td>西鉄筑紫駅東口徒歩0分</td>
        </tr>
        <tr>
          <td>電話番号</td>
          <td><a href="tel:0925556659">092-555-6659</a></td>
        </tr>
        <tr>
          <td>営業時間</td>
          <td>13:00〜16:00　18:00〜23:00</td>
        </tr>
    </table>
		<p><a class="toDetails" href="<?php echo home_url(); ?>/price/tikushino">> 詳細ページへ</a></p>
	</div>
</div>
<div class="gymContainer">
	<div class="gymContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/top/store2.png" alt="" />
	</div>
	<div class="gymContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<h3>天神店</h3>
		<table class="footerTable">
        <tr>
          <td>住所</td>
          <td>福岡県福岡市天神3-9-10松井ビル2F</td>
        </tr>
        <tr>
          <td>交通</td>
          <td>JR天神駅徒歩7分</td>
        </tr>
        <tr>
          <td>電話番号</td>
          <td><a href="tel:0925556659">092-555-6659</a></td>
        </tr>
        <tr>
          <td>営業時間</td>
          <td>平日13:00~22:00 / 土曜日13:00~20:00</td>
				</tr>
				<tr>
          <td>ニューオープン</td>
          <td><span class="big">入会金・手数料・初月料金無料！！</span></td>
        </tr>
      </table>
			<p><a class="toDetails" href="<?php echo home_url(); ?>/price/tenjin">> 詳細ページへ</a></p>
	</div>
</div>
</section>

<section class="topTaiken">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">無料体験レッスン受付中<span> - FREE TRIAL -</span></h2>
<div class="inner">
	<div class="taikenDescContainer">
		<div class="taikenDescContainer__item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/trial1.jpg" alt="" />
			<p>女性・男性・子供と多くの方が無料体験レッスンで楽しさを実感しています。</p>
		</div>
		<div class="taikenDescContainer__item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/trial2.jpg" alt="" />
			<p>ジュニアクラスは、キックボクシングを学びながら心身共に強く心優しい人間に成長させます。</p>
		</div>
		<div class="taikenDescContainer__item">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top/trial3.png" alt="" />
			<p>パンチとキックの全身運動でダイエット、ストレス解消、護身にもなります。</p>
		</div>
	</div>
	<div class="taikenContainer">
		<div class="taikenContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
			<p><a href="<?php echo home_url(); ?>/contact">メールでのお問い合わせ</a></p>
		</div>
		<div class="taikenContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
			<p><a href="tel:0925556659">電話でのお問い合わせ</a></p>
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
