<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=2882071898546346&autoLogAppEvents=1" nonce="WpjZ76A0"></script>
<footer>
  <div class="container">
    <div class="row footer-thongtinchung">
      <div class="col-md-4 col-sm-6 col-xs-12 introduce">
        <div class="row">
          <div class="col-md-12"><img alt="<?php _e($conf['title']) ?>" id="logo-footer" src="<?php _e($imgLogo) ?>"></div>
    			<div class="col-md-12 col-xs-12" class="intro-li">
    				<ul class="intro-ul" >
    					<li><i class="fa fa-map-o"></i> <?php _e($lang['address'].': '.$addressFooter['content']) ?></li>
    					<li><i class="fa fa-phone"></i> <?php _e($lang['phone'].': '.$phoneFooter['content']) ?></li>
    					<li><i class="fa fa-envelope-o"></i> Email: <?php _e($emailFooter['content']) ?></li>
    				</ul>
    			</div>
        </div>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-12">
        <h3 class="text-uppercase"><?php _e($lang['aboutText']) ?></h3>
        <ul class="menu">
          <li><a href="<?php _e($def['actionAbout']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['aboutUs']) ?></a></li>
          <li><a href="<?php _e($def['actionContact']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['coopText']) ?></a></li>
          <li><a href="<?php _e($def['actionNews']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['newsText']) ?></a></li>
          <li><a href="<?php _e($def['actionRegister']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['registerText']) ?></a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-12 col-dichvu">
        <h3><?php _e($lang['serviceText']) ?></h3>
        <ul class="menu">
          <li><a href="<?php _e($def['actionOrder']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['orderText'].' '.$lang['taxi']) ?></a></li>
          <li><a href="<?php _e($def['actionPolicy']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['policyUse']) ?></a></li>
          <li><a href="<?php _e($def['actionResolveComplain']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['resolveComplain']) ?></a></li>
          <li><a href="<?php _e($def['actionSecure']) ?>"><i class="fa fa-long-arrow-right"></i> <?php _e($lang['securePrivacy']) ?></a></li>
        </ul>
      </div>
			<div class="col-md-4 col-sm-6 col-xs-12 footer-social"> 
				<iframe src="https://www.facebook.com/plugins/page.php?href=<?php _e($fanpage['content']) ?>%2F&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=607280783103435" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			</div>
        </div>
        <div class="row footer-gioithieu">
            
            <div class="col-md-12">
				<p><?php _e($textFooter['content']) ?></p>
        <!--
				<ul>
					<li>
						<a href="https://itunes.apple.com/vn/app/taxigo-kh%C3%A1ch-h%C3%A0ng/id1449441401?mt=8" title="App Store" class="btn-gfort-image">
                            <img src="assets/images/app1.png" alt="App Store">
                        </a>                    
					</li>
					<li class="vntrip-app-right">
						<a href="https://play.google.com/store/apps/details?id=com.taxigo.taxigokhachhang&amp;hl=vi" title="Google Play" class="btn-gfort-image">
                            <img src="assets/images/app2.png" alt="Google Play">
                        </a>
					</li>
				</ul>
        -->
			</div>
           
        </div>
    </div>

</footer>
<!--
<section class="block ck1" id="ck">
    <div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-8 ten-cong-ty">
        <p>Công Ty Cổ Phần Dịch Vụ Vận Tải Hành Khách Liên Minh</p>
        <p>Đkkd Số : 0107504497 Ngày 13/07/2016</p>
        <p>Do Sở Kế Hoạch Và Đầu Tư Thành Phố Hà Nội Cấp</p>
        <p>Mã: 1368</p>
      </div>
			<div class="col-md-6 col-sm-4 bo-cong-thuong">
        <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=34849" target="_blank"><img src="assets/images/bo-cong-thuong.png" alt="Taxi Nội Bài" width="200" /></a>
      </div>
		</div>
  </div>
</section>
-->
<a href="#" id="goTop" class="bd-circle t-center"><i class="glyphicon glyphicon-chevron-up"></i><br> Top</a>
<link rel="stylesheet" href="<?php _e(_assets.'css/cssload.css') ?>" />
<script>
  jQuery( ".footer-banner__close" ).click(function() {
    jQuery('.swiper-container').css('display','none');
  });
</script>

<div class="hotline">
    <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <div class="phonering-alo-ph-img-circle">
            <a class="pps-btn-img " title="Liên hệ" href="tel:19000370"> <img src="assets/images/v8TniL3.png" alt="Liên hệ" width="50" class="img-responsive"/> </a>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100)
        $('#goTop').fadeIn();
      else
        $('#goTop').fadeOut();
    });
    $('#goTop').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });
    jQuery(document).ready(function ($) {
      ( function() {
        var youtube = document.querySelectorAll( ".youtube" );
        for (var i = 0; i < youtube.length; i++) {
          var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
          var image = new Image();
          image.src = source;
          image.addEventListener( "load", function() {
              youtube[ i ].appendChild( image );
          }( i ) );            
          youtube[i].addEventListener( "click", function() {
            var iframe = document.createElement( "iframe" );
            iframe.setAttribute( "frameborder", "0" );
            iframe.setAttribute( "allowfullscreen", "true" );
            iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
            this.innerHTML = "";
            this.appendChild( iframe );
          } );	
        };

      } )();

      setInterval(function () {
          moveRight();
      }, 3000);

      var slideCount = $('#slider ul li').length;
      var slideWidth = $('#slider ul li').width();
      var slideHeight = $('#slider ul li').height();
      var sliderUlWidth = slideCount * slideWidth;

      $('#slider').css({ width: slideWidth, height: slideHeight });
      $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
      $('#slider ul li:last-child').prependTo('#slider ul');
      function moveLeft() {
        $('#slider ul').animate({
          left: + slideWidth
        }, 500, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
        });
      };

      function moveRight() {
        $('#slider ul').animate({
          left: - slideWidth
        }, 500, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
        });
      };

      $('a.control_prev').click(function () {
        moveLeft();
      });

      $('a.control_next').click(function () {
        moveRight();
      });

    });
</script>

<script type="text/javascript" src="assets/plugins/swiper/swiper.min.js"></script>

<script>
  window.onbeforeunload = function(){
      $('.loader-content').css('display','block');
  };
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    }
  });
	
	jQuery(document).ready(function ($) {
		var $extraslider = $(".hot-place_domestic .grid");
		$extraslider.owlCarousel2({
			autoplay: 0,
			margin: 30,
			startPosition: 0 ,
			mouseDrag: true,
			touchDrag: true ,
			autoWidth: false,
			responsive: {
				0: 	{ items: 1 } ,
				480: { items: 1 },
				768: { items: 2 },
				992: { items: 2 },
				1200: {items: 3 }
			},
			dotClass: "owl2-dot",
			dotsClass: "owl2-dots",
			dots: false ,
			nav: true ,
			loop: true ,
			navText: [" ", " "],
			navClass: ["owl2-prev", "owl2-next"]

		});
		
		
		var $extraslider1 = $(".slider #itemListPrimary");
		$extraslider1.owlCarousel2({
			autoplay: 0,
			margin: 30,
			startPosition: 0 ,
			mouseDrag: true,
			touchDrag: true ,
			autoWidth: false,
			responsive: {
				0: 	{ items: 1 } ,
				480: { items: 1 },
				768: { items: 2 },
				992: { items: 2 },
				1200: {items: 2 }
			},
			dotClass: "owl2-dot",
			dotsClass: "owl2-dots",
			dots: true ,
			nav: false ,
			loop: true ,
			navText: [" ", " "],
			navClass: ["owl2-prev", "owl2-next"]

		});

    var $sliderdoitac = $(".doitac");
    $sliderdoitac.owlCarousel2({
      autoplay: 0,
      margin: 30,
      startPosition: 0 ,
      mouseDrag: true,
      touchDrag: true ,
      autoWidth: false,
      responsive: {
        0:  { items: 2 } ,
        480: { items: 2 },
        768: { items: 3 },
        992: { items: 4 },
        1200: {items: 6 }
      },
      dotClass: "owl2-dot",
      dotsClass: "owl2-dots",
      dots: false ,
      nav: false ,
      loop: false ,
      navText: [" ", " "],
      navClass: ["owl2-prev", "owl2-next"]

    });
		
		
		if ( jQuery(window).width() < 854 ) {
			var owl = $('.grid.owl2-carousel');
			owl.trigger('destroy.owl.carousel2');
			owl.addClass('off');
		}
	});
</script>

</body>
</html>