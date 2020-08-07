<?php
/*
 * Template Name: MSJについて（about-page.php）
 */
get_header(); ?>
<div class="your-class">
  <div>
  	<h1>MSJについて ~ ABOUT US ~</h1>
	<img src="<?php echo get_template_directory_uri(); ?>/img/common/about.png" alt="" />
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
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">トレーナー紹介<span> ~ PRO TRAINERS ~</span></h2>
<p class="textCenter">現役プロ選手や日本ランカーが優しくわかりやすく皆様をレッスン致します。</p>
<div class="trainerContainer">
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer1.jpg" alt="" />
		<h4>永椎太陽（ながしい　たいよう）<br>ジム代表<br>全クラス担当</h4>
		<p>一言：長年ファイタ－として戦ってきた経験と知識を選手だけではなく身体作りやダイエットのプロとして皆様にキックを通じて楽しくお伝えしていきたいと思います</p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer2.jpg" alt="" />
		<h4>白坂令志（しらさか　れいじ）<br>月曜・金曜担当</h4>
		<p>一言：MSJでは、こんなイケメントレ－ナ－が丁寧に技術指導してくれます。キックを一緒に楽しみましょう</p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer3.jpg" alt="" />
		<h4>松島勲也（まつしま　いざや）<br>木曜日<br>フィットネス担当</h4>
		<p>一言：フィットネスクラスで高い信頼性を持つ現役中量級ファイターです。気は優しく力持ち。なんでも声かけてください</p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer4.jpg" alt="" />
		<h4>江口こまち（えぐち　こまち）<br>火曜日　フィットネス担当　水曜日<br>ジュニア担当</h4>
		<p>一言：現役ムエタイ日本王者からレベルの高い技術を学べます。九州では唯一の現役日本チャンピオン。従来の格闘技のイメ－ジも全くなく女性も安心してご入会して頂けます。</p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer5.jpg" alt="" />
		<h4>嘉村佳孝（かむら　よしたか）<br>月曜日　担当</h4>
		<p></p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer6.jpg" alt="" />
		<h4>北嶋優花（きたじま　ゆか）<br>火曜日<br>フィットネス担当</h4>
		<p></p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer7.jpg" alt="" />
		<h4>テラポン＠フィ－ム－<br>土曜日　担当</h4>
		<p></p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
		<img src="<?php echo get_template_directory_uri(); ?>/img/about/trainer8.jpg" alt="" />
		<h4>判田大卓（はんだ　ひろたか）<br>水曜日<br>ジュニア担当</h4>
		<p></p>
	</div>
	<div class="trainerContainer__item" data-aos="zoom-in-up" data-aos-duration="1000">
	</div>
</div>
</div>
</section>
<section>
<div class="inner">
	<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">ジム概要<span> ~ ABOUT ~</span></h2>
	<table class="basicInfoTable">
	<tr>
		<th>屋号</th>
		<td>MSJ キックボクシングジム</td>
	</tr>
	<tr>
		<th>所在地</th>
		<td>福岡県筑紫野市筑紫駅前通1-1-1筑紫駅前ビル　２F</td>
	</tr>
	<tr>
		<th>代表者</th>
		<td>永椎　太陽</td>
	</tr>
	<tr>
		<th>設立年月日</th>
		<td>平成17年7月</td>
	</tr>
	<tr>
		<th>TEL</th>
		<td>092-555-6659</td>
	</tr>
	<tr>
		<th>交通</th>
		<td>西鉄筑紫駅東口 徒歩0分</td>
	</tr>
	<tr>
		<th>営業時間</th>
		<td>13:00〜16:00   18:00〜23:00</td>
	</tr>
	<tr>
		<th>定休日</th>
		<td>日曜、祝日</td>
	</tr>
	<tr>
		<th>URL</th>
		<td>http://msj-kickboxing.com/</td>
	</tr>
	<tr>
		<th>MAIL</th>
		<td>info@msj-kickboxing.com</td>
	</tr>
	</table>
</div>
</section>
<section class="topAccess">
<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">アクセスマップ<span> ~ ACCESS ~</span></h2>
<div class="accessContainer">
	<div class="accessContainer__item">
		<h3 data-aos="zoom-in-up" data-aos-duration="1000">福岡店</h3>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4246103775004!2d130.39256081555135!3d33.594285780733095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191895bc24eaf%3A0x6eeddc2d640cc909!2z44CSODEwLTAwMDEg56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy65aSp56We77yT5LiB55uu77yZ4oiS77yR77yQIOWkqeelnuadvuS6leODk-ODqyAyRg!5e0!3m2!1sja!2sjp!4v1595583599011!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class="accessContainer__item">
		<h3 data-aos="zoom-in-up" data-aos-duration="1000">筑紫野店</h3>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d954.8763014141089!2d130.55249698631346!3d33.46344518296173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541994ac92d1051%3A0x8a38fab6b21377e0!2z44CSODE4LTAwMjIg56aP5bKh55yM562R57Sr6YeO5biC562R57Sr6aeF5YmN6YCa77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1595583730039!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>
</section>
<?php get_footer(); ?>
