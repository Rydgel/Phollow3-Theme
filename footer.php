<footer id="footer" class="sixteen columns">
  <form class="searchform" method="get" action="/">
    <input name="s" size="30" type="search" placeholder="Rechercher sur le site" results="0">
  </form>
  <span class="copyright">Copyright © 2011 <a href="https://plus.google.com/113221045987282389062?rel=author" title="Google+ Jérôme Mahuet">Jérôme Mahuet+</a> All Rights Reserved. Hosted by <a href="http://www.rackspace.com/">Rackspace US, Inc.</a></span>
  <a title="<?php bloginfo( 'name' ) ?>" class="footer-logo-link" href="<?php bloginfo( 'url' ) ?>"><img src="<?php bloginfo('template_directory'); ?>/images/phollow-logo-footer.png" alt="<?php bloginfo( 'name' ) ?>"></a>
</footer>
</div><!-- container -->
<div id="fb-root"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php bloginfo('template_directory'); ?>/javascripts/jquery-1.6.2.min.js'>\x3C/script>")</script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/app.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/fitText.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/libs/DOMAssistantCompressed-2.8.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/libs/selectivizr-1.0.1.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/libs/respond.min.js"></script>
<![endif]-->

<!-- Change UA-XXXXX-X to be your site's ID -->
<script>
    window._gaq = [['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
</script>
   
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>         
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<script>
  window.fbAsyncInit = function() {
    FB.init({appId: 'YOURAPPIDLOL', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/fr_FR/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<script src="http://platform.twitter.com/widgets.js"></script>
<script>
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<?php wp_footer(); ?>
</body>
</html>