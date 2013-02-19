<?PHP
  require_once('config.php');
  require_once($brevCfg['lib_path'].'action.lib.php');

  $aOne = new Action("home", $_GET, $brevCfg);
?>
<!DOCTYPE html>
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
  </body>
</html>
