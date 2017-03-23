<!-- FOOTER STARTS
========================================================================= -->
<footer id="footer">
  <div class="container">
    <div class="row header">
      <aside class="col-sm-6 col-xs-12">
        <div class=" col-sm-6 col-xs-12 sitemap">
          <h5 class="white">НАШИ ПРОЕКТЫ</h5>
          <ul class="list-group">
            <li><a target="_blank" href="http://wizardmachine.ru/">WIZARDMACHINE.RU</a></li>
            <li><a target="_blank" href="http://wizardduos.ru/">WIZARDDUOS.RU</a></li>
            <li><a target="_blank" href="http://wizardtarot.ru/">WIZARDTAROT.RU</a></li>
            <li><a target="_blank" href="http://braincleaner.ru/">BRAINCLEANER.RU</a></li>
            <li><a target="_blank" href="http://marakata.ru/">MARAKATA.RU</a></li>
          </ul>
          <h5 class="white">СОЦИАЛЬНЫЕ СЕТИ</h5>
          <ul class="list-group">
            <li><a target="_blank" href="https://vk.com/id139677998">Юрий Чикуров</a></li>
            <li><a target="_blank" href="https://vk.com/wizardmachine">WIZARDMACHINE</a></li>
          </ul>
        </div>
        <div class=" col-sm-6 col-xs-12 sitemap">
          <h5 class="white">КОНТАКТЫ</h5>
          <p><a href="mailto:info@bablosstudio.ru"><i class="fa fa-envelope-o fa-fw" style="margin-right: 5px;"></i>info@chikurov.com</a></br><span class="white"><i class="fa fa-phone fa-fw" style="margin-right: 5px;"></i>+7 (495) 255-05-61</span></p>
          <p>
            <a class="hidden btn btn-block btn-warning" href="#">Cоздать личную страницу</a>
          </p>
        </div>
      </aside>
      <aside class="col-sm-5 contact-form col-xs-12 pull-right">
        <h5 class="white" style="margin-top: 0;">ЗАДАТЬ ВОПРОС</h5>
        <?php echo do_shortcode( '[contact-form-7 id="3222" title="Задать вопрос"]' ); ?>
      </aside>
      <div class="col-xs-12 copyright-text">© 2017 - Все права защищены.<a href="http://www.chikurov.com/">chikurov.com</a> <div style="display: inline-block;margin-left: 10px;" class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter" data-counter=""></div></div>
      <!--row--> 
    </div>
    <a class="dmtop" href="#page-top"></a> 
    <!--container--> 
  </div>
</footer>
<!-- FOOTER ENDs
========================================================================= -->
 <!-- #gk-bg -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vivus.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.ui.touch-punch.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap.min.js"></script> 
<!--Jquery Easing--> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script> 
<!-- Owl Carousel --> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/owl-carousel/js/owl.carousel.js"></script>
<!-- Popup Scripts --> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
<!-- Contact Form Scripts --> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.jigowatt.js"></script>
<!-- Custom --> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script> 
<!-- Counter Scripts --> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/countdown.js"></script> 
<!-- Slider Revolution 4.x Scripts --> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rs-plugin/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rs-plugin/jquery.themepunch.revolution.min.js"></script> 
<!-- Masonary Porfilio Scripts --> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonary/masonry3.1.4.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonary/masonry.filter.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonary/imagesloaded.js"></script> 
<!-- LAZY EFFECTS Scripts -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.unveilEffects.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/buzz.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script_formula.js"></script>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<?php if(is_front_page()) { ?>
  <script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.tp-banner').show().revolution(
    {
      dottedOverlay:"none",
      delay:16000,
      startwidth:1170,
      startheight:700,
      hideThumbs:200,
      
      thumbWidth:100,
      thumbHeight:50,
      thumbAmount:5,
      
      navigationType:"bullet",
      navigationArrows:"solo",
      navigationStyle:"preview4",
      
      touchenabled:"on",
      onHoverStop:"on",
      
      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,
                  
      parallax:"mouse",
      parallaxBgFreeze:"on",
      parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                  
      keyboardNavigation:"off",
      
      navigationHAlign:"center",
      navigationVAlign:"bottom",
      navigationHOffset:0,
      navigationVOffset:20,

      soloArrowLeftHalign:"left",
      soloArrowLeftValign:"center",
      soloArrowLeftHOffset:20,
      soloArrowLeftVOffset:0,

      soloArrowRightHalign:"right",
      soloArrowRightValign:"center",
      soloArrowRightHOffset:20,
      soloArrowRightVOffset:0,
          
      shadow:0,
      fullWidth:"off",
      fullScreen:"on",

      spinner:"spinner4",
      
      stopLoop:"off",
      stopAfterLoops:-1,
      stopAtSlide:-1,

      shuffle:"off",
      
      autoHeight:"off",           
      forceFullWidth:"off",           
              
      hideThumbsOnMobile:"off",
      hideNavDelayOnMobile:1500,            
      hideBulletsOnMobile:"off",
      hideArrowsOnMobile:"off",
      hideThumbsUnderResolution:0,
      
      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      startWithSlide:0,
      fullScreenOffsetContainer: "#header"  
    });  
  }); //ready
  </script>
<?php } ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41607904 = new Ya.Metrika({
                    id:41607904,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div style="display: none;"><img src="https://mc.yandex.ru/watch/41607904" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>