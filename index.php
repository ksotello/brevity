<?PHP
  require_once('config.php');
  require_once($brevCfg['lib_path'].'action.lib.php');

  $aOne = new Action("home", $_GET, $brevCfg);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <?PHP
      foreach ($brevCfg['meta_tags'] as $key => $value)
      {
        echo '    <meta name="'.$key.'" content="'.$value.'">'."\n";
      }
    ?>
    <?PHP echo $aOne->cClass->getScripts(); ?>
    <title><?PHP echo $aOne->cClass->getTitle(); ?></title>
    <?PHP echo $aOne->cClass->getCSS(); ?>
  </head>
  <body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <?PHP
      $aOne->Act();
    ?>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
