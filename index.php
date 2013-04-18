<?PHP
  require_once('config.php');
  require_once($brevCfg['lib_path'].'action.lib.php');
  require_once($brevCfg['lib_path'].'boilerplate.lib.php');
  require_once($brevCfg['lib_path'].'analytics.lib.php');

  $aOne = new Action("home", $_GET, $brevCfg);
?>
<!DOCTYPE html>
<?PHP $boilerplate = new Boilerplate(false); ?> 
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
    <?PHP
      $aOne->Act();
    ?>
    <?PHP $analytics = new Analytics(false); ?>
  </body>
</html>
