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

		<h3 class="priceTitle">プラン</h3>
		<p>セミパーソナル（定額通い放題）</p>
		<h3 class="priceTitle">基本料金</h3>
		<table class="classTable">
			<thead>
				<tr>
					<th>対象</th>
					<th>会費/月（税込）</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>男性・女性</td>
					<td>13,000円</td>
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
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-kickfit"></span>キックフィットクラス</div>
				<div class="scheduleNew__legend-item"><span class="scheduleNew__badge sn-ladies"></span>レディースクラス</div>
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
							<td></td><td></td><td></td><td></td><td></td><td></td>
							<td class="sn-free" rowspan="6">フリー<br>トレーニング</td>
						</tr>
						<tr>
							<td class="sn-time">12:00</td>
							<td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
						<tr>
							<td class="sn-time">13:00</td>
							<td></td>
							<td class="sn-free" rowspan="12">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="6">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="12">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="12">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="8">フリー<br>トレーニング</td>
						</tr>
						<tr><td class="sn-time">14:00</td><td></td></tr>
						<tr><td class="sn-time">15:00</td><td></td></tr>
						<tr><td class="sn-time">16:00</td><td></td></tr>
						<tr><td class="sn-time">17:00</td><td></td><td></td></tr>
						<tr>
							<td class="sn-time">18:00</td>
							<td class="sn-free">フリー<br>トレーニング</td>
							<td></td>
						</tr>
						<tr>
							<td class="sn-time">19:00</td>
							<td class="sn-kickfit" rowspan="2">キックフィット<br>クラス</td>
							<td class="sn-ladies" rowspan="2">レディース<br>クラス</td>
							<td></td>
						</tr>
						<tr><td class="sn-time">19:30</td><td></td></tr>
						<tr>
							<td class="sn-time">20:00</td>
							<td class="sn-free" rowspan="4">フリー<br>トレーニング</td>
							<td class="sn-free" rowspan="4">フリー<br>トレーニング</td>
							<td></td><td></td>
						</tr>
						<tr><td class="sn-time">20:30</td><td></td><td></td></tr>
						<tr><td class="sn-time">21:00</td><td></td><td></td></tr>
						<tr><td class="sn-time">22:00</td><td></td><td></td></tr>
						<tr>
							<td class="sn-time">23:00</td>
							<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
					<td>月</td><td>火</td><td>水</td><td>木</td><td>金</td><td>土</td><td>日</td>
				</tr>
				<tr>
					<td>11:00</td>
					<td></td><td></td><td></td><td></td><td></td><td></td>
					<td class="freetrainingClass" rowspan="6">フリー<br>トレーニング</td>
				</tr>
				<tr><td>12:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				<tr>
					<td>13:00</td>
					<td></td>
					<td class="freetrainingClass" rowspan="12">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="6">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="12">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="12">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="8">フリー<br>トレーニング</td>
				</tr>
				<tr><td>14:00</td><td></td></tr>
				<tr><td>15:00</td><td></td></tr>
				<tr><td>16:00</td><td></td></tr>
				<tr><td>17:00</td><td></td><td></td></tr>
				<tr><td>18:00</td><td class="freetrainingClass">フリー<br>トレーニング</td><td></td></tr>
				<tr>
					<td>19:00</td>
					<td class="kickfitClass" rowspan="2">キックフィット<br>クラス</td>
					<td class="ladiesClass" rowspan="2">レディース<br>クラス</td>
					<td></td>
				</tr>
				<tr><td>19:30</td><td></td></tr>
				<tr>
					<td>20:00</td>
					<td class="freetrainingClass" rowspan="4">フリー<br>トレーニング</td>
					<td class="freetrainingClass" rowspan="4">フリー<br>トレーニング</td>
					<td></td><td></td>
				</tr>
				<tr><td>20:30</td><td></td><td></td></tr>
				<tr><td>21:00</td><td></td><td></td></tr>
				<tr><td>22:00</td><td></td><td></td></tr>
				<tr class="noBorder">
					<td>23:00</td>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tenjin/gym1.jpg" alt="" />
		</div>
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tenjin/gym2.jpg" alt="" />
		</div>
		<div style="padding: 10px;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/stores/tenjin/gym3.jpg" alt="" />
		</div>
	</div>
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
			<p><a href="tel:0925556659">電話でのお問い合わせ</a></p>
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
