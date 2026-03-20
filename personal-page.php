<?php
/*
 * Template Name: パーソナルトレーニング（personal-page.php）
 */
get_header(); ?>
<div class="your-class">
  <div>
		<h1>パーソナルトレーニング ~ PERSONAL ~</h1>
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
		<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">パーソナルトレーニング<span> ~ PERSONAL ~</span></h2>

		<h3 class="priceTitle">パーソナル料金（1回70分）</h3>
		<table class="classTable">
			<thead>
				<tr>
					<th>トレーナー</th>
					<th>料金（税込）</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>代表</td>
					<td>22,000円</td>
				</tr>
				<tr>
					<td>世界王者</td>
					<td>20,000円</td>
				</tr>
				<tr>
					<td>日本王者</td>
					<td>12,000円</td>
				</tr>
				<tr>
					<td>タイ人トレーナー</td>
					<td>8,000円</td>
				</tr>
				<tr>
					<td>一般プロ</td>
					<td>6,000円</td>
				</tr>
			</tbody>
		</table>

		<h3 class="priceTitle">一般プロトレーナー　長期プラン</h3>
		<table class="classTable">
			<thead>
				<tr>
					<th>回数</th>
					<th>通常料金</th>
					<th>プラン料金（税込）</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>12回（週1）</td>
					<td>72,000円</td>
					<td>72,000円</td>
				</tr>
				<tr>
					<td>24回（週1）</td>
					<td>144,000円</td>
					<td><span>124,000円</span>　2万円お得</td>
				</tr>
				<tr>
					<td>36回（週1）</td>
					<td>216,000円</td>
					<td><span>186,000円</span>　3万円お得</td>
				</tr>
			</tbody>
		</table>

	</div>
</section>

<section class="topTaiken">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">無料体験レッスン受付中<span> - FREE TRIAL -</span></h2>
<div class="inner">
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
