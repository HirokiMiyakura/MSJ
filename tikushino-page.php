<?php
/*
 * Template Name: 筑紫野店（tikushino-page.php）
 */
get_header(); ?>
<div class="pageHero">
  <img src="<?php echo get_template_directory_uri(); ?>/img/top/mainImg2.png" alt="筑紫野店" />
  <div class="pageHero__overlay"></div>
  <div class="pageHero__content">
    <p class="pageHero__eyecatch">- TIKUSHINO -</p>
    <h1 class="pageHero__title">筑紫野店</h1>
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
					<td>日曜</td>
					<td>11:00 ~ 17:00</td>
				</tr>
				<tr>
					<td>月曜</td>
					<td>18:00 ~ 23:00</td>
				</tr>
				<tr>
					<td>火曜〜金曜</td>
					<td>13:00 ~ 23:00</td>
				</tr>
				<tr>
					<td>土曜</td>
					<td>13:00 ~ 20:00</td>
				</tr>
			</tbody>
		</table>

		<h3 class="priceTitle">基本料金</h3>
		<table class="classTable">
			<thead>
				<tr>
					<th>コース</th>
					<th>対象</th>
					<th>会費/月（税込）</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>一般オールタイム</td>
					<td>男性</td>
					<td>13.000円</td>
				</tr>
				<tr>
					<td>一般週2回コース</td>
					<td>男性</td>
					<td>11,000円</td>
				</tr>
				<tr>
					<td>女性オールタイム</td>
					<td>女性</td>
					<td>9,900円</td>
				</tr>
				<tr>
					<td>女性週2回コース</td>
					<td>女性</td>
					<td>8,800円</td>
				</tr>
				<tr>
					<td>学生（高校生以上）オールタイム</td>
					<td>男子</td>
					<td>9,000円</td>
				</tr>
				<tr>
					<td>ジュニア オールタイム</td>
					<td>男子・女子</td>
					<td>8,000円</td>
				</tr>
				<tr>
					<td>ジュニアクラス練習</td>
					<td>男性・女性　１日料金</td>
					<td>7,000円</td>
				</tr>
				<tr>
					<td>ビジター</td>
					<td>男性・女性　１日料金</td>
					<td>3,000円</td>
				</tr>
				<!-- <tr>
				<td rowspan="2">パーソナルレッスン</td>
				<td>１時間　完全マンツーマン(予約制)</td>
				<td>１時間 4,000円</td>
				</tr>
				<tr>
				<td style="background-color: #eee;">２時間　完全マンツーマン(予約制)</td>
				<td style="background-color: #eee;">2時間 6,000円</td>
				</tr> -->
			</tbody>
		</table>

		<h3 class="priceTitle">その他料金</h3>
		<table class="classTable">
			<thead>
				<tr>
					<th>コース</th>
					<th>対象</th>
					<th>会費/月（税抜）</th>
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
					<td>3,300円</td>
				</tr>
			</tbody>
		</table>

		<h3 class="priceTitle">スケジュール</h3>

		<!-- 新スケジュールデザイン -->
		<div class="scheduleNew">
			<div class="scheduleNew__legend">
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-free"></span>フリートレーニング</div>
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-junior"></span>ジュニアクラス</div>
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-pro"></span>プロ選手練習</div>
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-fitness"></span>フィットネスクラス</div>
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-bodymake"></span>BODY MAKEクラス</div>
			</div>
			<div class="scheduleNew__tableWrap">
				<table class="scheduleNew__table">
					<thead>
						<tr>
							<th class="sn-time-col"></th>
							<th>月</th>
							<th>火</th>
							<th>水</th>
							<th>木</th>
							<th>金</th>
							<th>土</th>
							<th>日</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="sn-time">11:00</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="sn-free" rowspan="6">フリー<br>トレーニング</td>
						</tr>
						<tr>
							<td class="sn-time">12:00</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">13:00</td>
							<td></td>
							<td class="sn-free" rowspan="3">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="3">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="3">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="3">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="3">フリー<br>トレーニング</td>
						</tr>
						<tr>
							<td class="sn-time">14:00</td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">15:00</td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">16:00</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">17:00</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">18:00</td>
							<td class="sn-junior" rowspan="3">ジュニア<br>クラス</td>
							<td></td>
							<td class="sn-junior" rowspan="3">ジュニア<br>クラス</td>
							<td></td>
							<td class="sn-junior" rowspan="3">ジュニア<br>クラス</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">19:00</td>
							<td class="sn-free" rowspan="2">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="2">フリー<br>トレーニング</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">19:30</td>
							<td class="sn-fitness" rowspan="2">フィットネス<br>クラス</td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">20:00</td>
							<td class="sn-pro" rowspan="3">プロ選手<br>練習</td>
							<td class="sn-fitness" rowspan="2">フィットネス<br>クラス</td>
							<td class="sn-fitness" rowspan="2">フィットネス<br>クラス</td>
							<td class="sn-fitness" rowspan="2">フィットネス<br>クラス</td>
							<td class="sn-pro" rowspan="3">プロ選手<br>練習</td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">20:30</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">21:00</td>
							<td class="sn-bodymake">BODY MAKE<br>クラス</td>
							<td class="sn-free" rowspan="2">フリー<br>トレーニング</td>
							<td class="sn-bodymake">BODY MAKE<br>クラス</td>
							<td class="sn-bodymake">BODY MAKE<br>クラス</td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">22:00</td>
							<td class="sn-free">フリー<br>トレーニング</td>
							<td class="sn-free">フリー<br>トレーニング</td>
							<td class="sn-free">フリー<br>トレーニング</td>
							<td class="sn-free">フリー<br>トレーニング</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">23:00</td>
							<td></td>
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
		</div>

		<!-- 旧スケジュールテーブル（コメントアウト）
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
					<td>日</td>
				</tr>
				<tr>
					<td>11:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="freetrainingClass" rowspan="6">フリー<br>トレーニング</td>
				</tr>
				<tr>
					<td>12:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>13:00</td>
					<td></td>
					<td class="freetrainingClass" rowspan="3">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="3">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="3">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="3">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="3">フリー<br>トレーニング</td>
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
					<td></td>
				</tr>
				<tr>
					<td>18:00</td>
					<td class="juniorClass" rowspan="3">ジュニア<br>クラス</td>
					<td></td>
					<td class="juniorClass" rowspan="3">ジュニア<br>クラス</td>
					<td></td>
					<td class="juniorClass" rowspan="3">ジュニア<br>クラス</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>19:00</td>
					<td class="freetrainingClass" rowspan="2">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="2">フリー<br>トレーニング</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>19:30</td>
					<td class="fitnessClass" rowspan="2">フィットネス<br>クラス</td>
					<td></td>
				</tr>
				<tr>
					<td>20:00</td>
					<td class="proClass" rowspan="3">プロ選手練習</td>
					<td class="fitnessClass" rowspan="2">フィットネス<br>クラス</td>
					<td class="fitnessClass" rowspan="2">フィットネス<br>クラス</td>
					<td class="fitnessClass" rowspan="2">フィットネス<br>クラス</td>
					<td class="proClass" rowspan="3">プロ選手練習</td>
					<td></td>
				</tr>
				<tr>
					<td>20:30</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>21:00</td>
					<td class="bodymakeClass">BODY MAKE<br>クラス</td>
					<td class="freetrainingClass" rowspan="2">フリー<br>トレーニング</td>
					<td class="bodymakeClass">BODY MAKE<br>クラス</td>
					<td class="bodymakeClass">BODY MAKE<br>クラス</td>
					<td></td>
				</tr>
				<tr>
					<td>22:00</td>
					<td class="freetrainingClass">フリー<br>トレーニング</td>
					<td class="freetrainingClass">フリー<br>トレーニング</td>
					<td class="freetrainingClass">フリー<br>トレーニング</td>
					<td class="freetrainingClass">フリー<br>トレーニング</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="noBorder">
					<td>23:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		-->
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

<?php get_template_part('template-parts/trial-section'); ?>
<?php get_footer(); ?>