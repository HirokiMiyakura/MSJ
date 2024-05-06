</main>
<!-- footer -->
<footer class="footer" role="contentinfo">
<div class="inner">
  <div class="footerContainer">
    <div class="footerContainer__item">
      <h5>MSJキックボクシングジム</h5>
      <h6>筑紫野店</h6>
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
      <h6>天神店</h6>
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
      </table>
      <h6>六本松大濠店</h6>
      <table class="footerTable">
        <tr>
          <td>住所</td>
          <td>福岡市中央区六本松3丁目11-31SGビル3F</td>
        </tr>
        <tr>
          <td>交通</td>
          <td>地下鉄六本松駅徒歩6分</td>
        </tr>
        <tr>
          <td>電話番号</td>
          <td><a href="tel:0925556659">092-555-6659</a></td>
        </tr>
        <tr>
          <td>営業時間</td>
          <td>平日13:00~22:00 / 土曜日13:00~20:00</td>
        </tr>
      </table>
    </div>
    <div class="footerContainer__item">
      <h5>リンク</h5>
      <ul>
        <li><a href="<?php echo home_url(); ?>/about/">MSJについて</a></li>
        <li><a href="<?php echo home_url(); ?>/guidance/">入会案内</a></li>
        <li><a href="<?php echo home_url(); ?>/class/">クラス紹介</a></li>
        <li><a href="<?php echo home_url(); ?>/stores/">店舗紹介</a></li>
        <li><a href="<?php echo home_url(); ?>/stores/tikushino/">筑紫野店</a></li>
        <li><a href="<?php echo home_url(); ?>/stores/tenjin/">天神店</a></li>
        <li><a href="<?php echo home_url(); ?>/stores/ropponmatsu/">六本松大濠店</a></li>
        <li><a href="<?php echo home_url(); ?>/trainer/">トレーナー紹介</a></li>
        <li><a href="<?php echo home_url(); ?>/news/">ニュース</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
      </ul>
    </div>
    <div class="footerContainer__item">
      <h5>SNS</h5>
      <ul>
        <li><a href="https://ameblo.jp/taiyo-msj/">永椎太陽代表のブログ</a></li>
        <li><a href="https://www.youtube.com/channel/UCF4Zt1WvsTVR3Mr7XdV7Phw">YouTube</a></li>
        <li><a href="https://www.instagram.com/explore/tags/msj%E3%82%AD%E3%83%83%E3%82%AF%E3%83%9C%E3%82%AF%E3%82%B7%E3%83%B3%E3%82%B0%E3%82%B8%E3%83%A0/">Instagram</a></li>
      </ul>
    </div>
  </div>
</div>
</footer>
<!-- /footer -->
<!-- copyright -->
<p class="copyright">
&copy; MSJトレーニングジム</a>.
</p>
<!-- /copyright -->
<?php wp_footer(); ?>
<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');

// タブ切り替え
jQuery(document).ready(function($){
    $(".tab_label").on("click",function(){
    var $th = $(this).index()+1;
    $(".tab_label").removeClass("active");
    $(".tab_panel").removeClass("active");
    $(this).addClass("active");
    $("#panel"+$th).addClass("active").appendTo($("#cj_panelarea"));
  });
});

</script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

<script type="text/javascript">

// スマホメニュー
(function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);

jQuery(document).ready(function($){
  $(document).ready(function(){
    $('.your-class').slick({
      arrows: false,
      dots: false,
      autoplay: true,
      infinite: true,
      speed: 600,
      fade: true,
      cssEase: 'linear'
    });


    $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });


  });
});

AOS.init();
</script>
</body>
</html>
