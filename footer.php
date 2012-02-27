<footer id="footer" role="contentinfo" class="sixteen columns">
	<nav role="navigation">
		<ul>
			<li><a href="/">Homepage</a></li>
			<li><a href="http://twitter.com/phollow">Twitter</a></li>
			<li><a href="https://www.facebook.com/Phollow.fr">Facebook</a></li>
			<li><a href="http://dribbble.com/phollow">Dribbble</a></li>
			<li><a href="mailto:rydgel@phollow.fr">Contact</a></li>
		</ul>
	</nav>		
	<span class="copyright">Copyright © 2011 <a rel="author" href="https://plus.google.com/113221045987282389062?rel=author" title="Jérôme Mahuet">+Jérôme Mahuet</a> All Rights Reserved. Hosted by <a href="http://www.rackspace.com/">Rackspace US, Inc.</a></span>
<a title="<?php bloginfo( 'name' ) ?>" class="footer-logo-link" href="<?php bloginfo( 'url' ) ?>"><img src="<?php bloginfo('template_directory'); ?>/images/phollow-logo-footer.png" alt="<?php bloginfo( 'name' ) ?>"></a>
</footer>

</div><!-- container -->
<div id="fb-root"></div>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/jquery-1.7.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/jquery.easing-1.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/app.js?3"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/fitText.js"></script>
<script src="http://cdn.sublimevideo.net/js/6ew50om6.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/libs/DOMAssistantCompressed-2.8.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/libs/selectivizr-1.0.1.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/libs/respond.min.js"></script>
<![endif]-->

<!-- Change UA-XXXXX-X to be your site's ID -->
<script>
    window._gaq = [['_setAccount','UA-7098745-1'],['_trackPageview'],['_trackPageLoadTime']];
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
    FB.init({appId: '101739241646', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/fr_FR/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<script>
      (function(){
        var twitterWidgets = document.createElement('script');
        twitterWidgets.type = 'text/javascript';
        twitterWidgets.async = true;
        twitterWidgets.src = '//platform.twitter.com/widgets.js';
        document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
      })();
</script>
<script>
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4ec64821f5a1f55c33000003');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
<?php wp_footer(); ?>
</body>
</html>