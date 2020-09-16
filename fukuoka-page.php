<?php
/*
 * Template Name: 天神店（tenjin-page.php）
 */
get_header(); ?>
<div class="your-class">
  <div>
  	<h1>天神店 ~ TENJIN ~</h1>
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
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">天神店<span> ~ TENJIN ~</span></h2>

<h3 class="priceTitle">営業時間</h3>
<table class="classTable">
<thead>
<tr>
<th>曜日</th>
<th>時間</th>
</tr>
</thead>
<tbody>
<tr>
<td>月曜 ~ 金曜</td>
<td>13:00 ~ 22:00</td>
</tr>
<tr>
<td>土曜</td>
<td>13:00 ~ 20:00</td>
</tr>
</tbody>
</table>

<h3 class="priceTitle">スケジュール</h3>
<table class="classTable">
<thead>
<tr>
<th>コース</th>
<th>曜日</th>
<th>時間</th>
</tr>
</thead>
<tbody>
<tr>
<td>フィットネスクラス</td>
<td>月、水、金</td>
<td>14:00 ~ 14:50</td>
</tr>
<tr>
<td>フィットネスクラス</td>
<td>月、金</td>
<td>20:00 ~ 20:50</td>
</tr>
<tr>
<td>Actual battleクラス</td>
<td>水</td>
<td>20:00 ~ 21:00</td>
</tr>
<tr>
<td>女性限定フィットネスクラス</td>
<td>火、木</td>
<td>19:30 ~ 20:20</td>
</tr>
<tr>
<td>フリークラス</td>
<td>土曜・その他</td>
<td>終日</td>
</tr>
</table>
<h3 class="priceTitle">基本料金</h3>
<table class="classTable">
<thead>
<tr>
<th>対象</th>
<th>会費/月（税別）</th>
</tr>
</thead>
<tbody>
<tr>
<td>一般男性・一般女性</td>
<td>10,000円</td>
</tr>
<tr>
<td>一般女性</td>
<td>10,000円</td>
</tr>
<tr>
<td>中学生以下</td>
<td>8,000円</td>
</tr>
</tbody>
</table>
<div>
<ul class="schedule_bikou">
<li><span>＊ 何日でも何時間でも通い放題</span></li>
</ul>
</div>
<h3 class="priceTitle">その他料金</h3>
<table class="classTable">
<thead>
<tr>
<th>コース</th>
<th>対象</th>
<th>会費/月（税別）</th>
</tr>
</thead>
<tbody>
<tr>
<td>入会金</td>
<td>初回1回のみ</td>
<td><del>10,000円</del><span>今だけ無料！</span></td>
</tr>
<tr>
<td>入会手数料</td>
<td>初回1回のみ</td>
<td><del>3,000円</del><span>今だけ無料！</span></td>
</tr>
</tbody>
</table>
<p class="campaign">さらに、今なら初月無料キャンペーン実施中！！</p>
</div>
</section>

<section>
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">アクセス<span> - ACCESS -</span></h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4246103775004!2d130.39256081555135!3d33.594285780733095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191895bc24eaf%3A0x6eeddc2d640cc909!2z44CSODEwLTAwMDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSp56We77yT5LiB55uu77yZ4oiS77yR77yQIOWkqeelnuadvuS6leODk-ODqyAyRg!5e0!3m2!1sja!2sjp!4v1595583599011!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
			<p><a href="tel:0905556659">電話でのお問い合わせ</a></p>
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
