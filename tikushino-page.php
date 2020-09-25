<?php
/*
 * Template Name: 筑紫野店（tikushino-page.php）
 */
get_header(); ?>
<div class="your-class">
  <div>
  	<h1>筑紫野店 ~ TIKUSHINO ~</h1>
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
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">筑紫野店<span> ~ TIKUSHINO ~</span></h2>

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
<td>月曜〜金曜</td>
<td>13:00 ~ 16:00　18:00 ~ 23:00</td>
</tr>
<tr>
<td>土曜</td>
<td>13:00 ~ 16:00　18:00 ~ 23:00</td>
</tr>
</tbody>
</table>

<h3 class="priceTitle">基本料金</h3>
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
<td>フルタイムマスターコース</td>
<td>男性 フルクラス・フルタイム</td>
<td>10,000円</td>
</tr>
<tr>
<td>週二回　ミドルコース</td>
<td>男性 フルクラス・週二回</td>
<td>8,000円</td>
</tr>
<tr>
<td>レディーマスターコース</td>
<td>女性 フルクラス・フルタイム</td>
<td>6,000円</td>
</tr>
<tr>
<td>高校生</td>
<td>男性 フルクラス・フルタイム</td>
<td>8,000円</td>
</tr>
<tr>
<td>中学生</td>
<td>男子 フルクラス・フルタイム</td>
<td>7,000円</td>
</tr>
<tr>
<td>小学生</td>
<td>男子・女子　ジュニアクラス</td>
<td>6,000円</td>
</tr>
<tr>
<td>ビジター</td>
<td>男性・女性　１日料金</td>
<td>2,000円</td>
</tr>
<tr>
<td rowspan="2">パーソナルレッスン</td>
<td>１時間　完全マンツーマン(予約制)</td>
<td>１時間 4,000円</td>
</tr>
<tr>
<td style="background-color: #eee;">２時間　完全マンツーマン(予約制)</td>
<td style="background-color: #eee;">2時間 6,000円</td>
</tr>
</table>

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
<td>10,000円</td>
</tr>
<tr>
<td>入会手数料</td>
<td>初回1回のみ</td>
<td>3,000円</td>
</tr>
</tbody>
</table>

<h3 class="priceTitle">スケジュール</h3>
<table class="scheduleTable">
	<tbody>
		<tr class="noBorder">
			<td></td>
			<td>月</td>
			<td>火</td>
			<td>水</td>
			<td>木</td>
			<td>金</td>
			<td>土</td>
		</tr>
		<tr>
			<td>13:00</td>
			<td class="freetrainingClass" rowspan="3">フリートレーニンング</td>
			<td class="freetrainingClass" rowspan="3">フリートレーニンング</td>
			<td class="freetrainingClass" rowspan="3">フリートレーニンング</td>
			<td class="freetrainingClass" rowspan="3">フリートレーニンング</td>
			<td class="freetrainingClass" rowspan="3">フリートレーニンング</td>
			<td class="freetrainingClass" rowspan="3">フリートレーニンング</td>
		</tr>
		<tr>
			<td>14:00</td>
		</tr>
		<tr>
			<td>15:00</td>
		</tr>
		<tr>
			<td>16:00</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>17:00</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>18:00</td>
			<td class="juniorClass" rowspan="2">ジュニアクラス</td>
			<td></td>
			<td class="juniorClass" rowspan="2">ジュニアクラス</td>
			<td></td>
			<td class="juniorClass" rowspan="2">ジュニアクラス</td>
			<td></td>
		</tr>
		<tr>
			<td>19:00</td>
			<td class="freetrainingClass">フリートレーニング</td>
			<td class="freetrainingClass">フリートレーニング</td>
			<td class="freetrainingClass" rowspan="2">フリートレーニング</td>
		</tr>
		<tr>
			<td>20:00</td>
			<td class="proClass" rowspan="2">プロ選手練習</td>
			<td class="fitnessClass">フィットネスクラス</td>
			<td class="juniorspecialClass">ジュニア特別クラス</td>
			<td class="fitnessClass">フィットネスクラス</td>
			<td class="proClass" rowspan="2">プロ選手練習</td>
		</tr>
		<tr>
			<td>21:00</td>
			<!-- <td></td> -->
			<td class="bodymakeClass">BODY MAKEクラス</td>
			<td class="freetrainingClass" rowspan="2">フリートレーニング</td>
			<td class="bodymakeClass">BODY MAKEクラス</td>
			<td class="bodymakeClass">BODY MAKEクラス</td>
		</tr>
		<tr>
			<td>22:00</td>
			<td class="freetrainingClass">フリートレーニング</td>
			<td class="freetrainingClass">フリートレーニング</td>
			<td class="freetrainingClass">フリートレーニング</td>
			<td class="freetrainingClass">フリートレーニング</td>
		</tr>
		<tr class="noBorder">
			<td>23:00</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
</div>
</section>

<section>
<div class="inner">
	<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">店内風景<span> - GYM -</span></h2>
	<div class="responsive">
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tikushino/gym1.jpg" alt="" />
		</div>
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tikushino/gym2.jpg" alt="" />
		</div>
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tikushino/gym3.jpg" alt="" />
		</div>
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tikushino/gym4.jpg" alt="" />
		</div>
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tikushino/gym5.jpg" alt="" />
		</div>
	</div>
</div>
</section>

<section>
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">アクセス<span> - ACCESS -</span></h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954.8763014141089!2d130.55249698631346!3d33.46344518296173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541994ac92d1051%3A0x8a38fab6b21377e0!2z44CSODE4LTAwMjIg56aP5bKh55yM562R57Sr6YeO5biC562R57Sr6aeF5YmN6YCa77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1595583730039!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
