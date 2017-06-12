<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	@if( ! empty($seo) )
	<title>{{ $seo['title'] }}</title>
	<meta name="description" content="{{ $seo['description'] }}">
	@else
    <title>Window Fashion - изготовление, монтаж ролл-штор и жалюзи</title>
	<meta name="description" content="Window Fashion - изготовление, монтаж ролл-штор и жалюзи">
    @endif
	
	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/css/fonts.css">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/media.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/slick.css">

    <link rel="stylesheet" href="/css/laravel.css">
   
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    
    <script src="/assets/js/lightbox-plus-jquery.js"></script>
    
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fullPage.css" />
	
	<script type="text/javascript" src="/assets/vendors/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="/assets/js/jquery.fullPage.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['curtain-1', 'curtain-2', 'curtain-3', 'curtain-4', 'curtain-5', 'curtain-6', 'curtain-7', 'curtain-8', 'curtain-9', 'curtain-10', 'curtain-11'],
                //menu: '#menu',
                scrollingSpeed: 600,
                continuousVertical: true,
                
                'onLeave': function(index, nextIndex, direction){
                    if (index > 0){
                            $('.types-info').hide();
                            $('.types-info').fadeIn(1100);
                        
                    //$('.types-part').removeClass('pf-active');
                    //$('.types-section').removeClass('pf-active');
                    }
                }
			});
		});
	</script>
   
</head>
<body class="types-body">    
     
@include('partials.modal')

<div class="navigation navigation-fullpage">
        @include('partials.navigation')
</div>

@yield('content')

      <footer class="footer footer-fullpage">

                <div class="wrap footer-center">

                    <div class="footer-part footer-mob-none">
                        <div class="footer-logo footer-types">
                            <img src="/assets/img/logo-footer.png" alt="">
                        </div>
                    </div>
                
                    <div class="footer-part">
                        <div class="f-contacts">КАЗАХСТАН. Г.АСТАНА,</div>
                        <div class="f-contacts">УЛ. МАНГИЛИК ЕЛ. 51,</div>
                        <div class="f-contacts">ТЕЛ: +7(777)474-04-14</div>
                    </div>
                    
                    <div class="footer-part footer-mob-none">
                        <div class="f-btn-short"><button class="btn-white-short jk">ВЫЗВАТЬ ДИЗАЙНЕРА</button></div>
                    </div>

                    <div class="footer-part footer-mob-none">
                        <div class="f-contacts">ПРИСОЕДИНЯЙТЕСЬ</div>
                        <div class="f-contacts">
                            <a href="https://www.instagram.com/windowfashion.purpur/" target="_blank"><div class="f-1"></div></a>
                            <!--
                            <div class="f-2"></div>
                            <div class="f-3"></div>
                            -->
                        </div>
                    </div>

                </div>
        </footer>
        
<script src="/assets/js/window.js"></script>
 
<script src="/assets/js/maskedinput.js"></script>
<script type="text/javascript">	
    jQuery(function($){$("#client-tel-for-consult").mask("+7(999)999-99-99");});
    jQuery(function($){$("#client-tel-for-consult-2").mask("+7(999)999-99-99");});
</script>

<script type="text/javascript">
    /*
    $('.btn-types').click(function() {
    
        $('.types-part').addClass('pf-active');
        $('.types-section').addClass('pf-active');

    });
    
    $('.btn-back').click(function() {
    
        $('.types-part').removeClass('pf-active');
        $('.types-section').removeClass('pf-active');

    });
    */
</script>
   
<!--<script src="/assets/js/script.js"></script>-->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 855754404;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/855754404/?guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97702005-1', 'auto');
  ga('send', 'pageview');
setTimeout(function(){ga('send', 'event', 'New Visitor', location.pathname);}, 15000)
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 855754404;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "YmRbCNWzo3AQpI2HmAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/855754404/?label=YmRbCNWzo3AQpI2HmAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>
</html>

