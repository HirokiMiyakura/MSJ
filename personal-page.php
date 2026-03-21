<?php
/*
 * Template Name: パーソナルトレーニング（personal-page.php）
 */
get_header(); ?>
<div class="pageHero">
  <img src="<?php echo get_template_directory_uri(); ?>/img/top/mainImg2.png" alt="パーソナルトレーニング" />
  <div class="pageHero__overlay"></div>
  <div class="pageHero__content">
    <p class="pageHero__eyecatch">- PERSONAL TRAINING -</p>
    <h1 class="pageHero__title">パーソナルトレーニング</h1>
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
<!-- パーソナルの魅力 -->
<section class="ptAppeal">
	<div class="inner">
		<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">パーソナルトレーニングの魅力<span> - WHY PERSONAL -</span></h2>
		<div class="ptAppeal__grid">
			<div class="ptAppeal__item" data-aos="zoom-in-up" data-aos-duration="700">
				<div class="ptAppeal__icon">&#x1F3C6;</div>
				<h3>一流プロが直接指導</h3>
				<p>世界王者・日本王者・現役プロ選手があなたに直接マンツーマンで指導します。一般のジムでは体験できないレベルの技術と知識を、あなたのものに。</p>
			</div>
			<div class="ptAppeal__item" data-aos="zoom-in-up" data-aos-duration="900">
				<div class="ptAppeal__icon">&#x1F4CB;</div>
				<h3>完全オーダーメイドプログラム</h3>
				<p>目標・体力・スケジュールに合わせた専用プログラムを作成。無駄なく最速で結果を出すために、あなただけのメニューで継続的にサポートします。</p>
			</div>
			<div class="ptAppeal__item" data-aos="zoom-in-up" data-aos-duration="1100">
				<div class="ptAppeal__icon">&#x1F3AF;</div>
				<h3>目的別に幅広く対応</h3>
				<p>プロを目指す選手から、ダイエット・体力向上・健康維持・護身術まで、あなたの目的に合ったコースで確かな成果へ導きます。</p>
			</div>
		</div>
	</div>
</section>

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


<?php get_template_part('template-parts/trial-section'); ?>
<?php get_footer(); ?>
