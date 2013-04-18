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
   <?PHP echo '<meta content="text/html;charset=utf-8" http-equiv="Content-Type">'; ?>
    <?PHP
      foreach ($brevCfg['meta_tags'] as $key => $value)
      {
        echo '    <meta name="'.$key.'" content="'.$value.'">'."\n";
      }
    ?>
    <?PHP echo $aOne->cClass->makeScripts(); // was getScripts() ?>
    <title><?PHP echo $aOne->cClass->getTitle(); ?></title>
    <?PHP echo $aOne->cClass->makeCSS();  //was getCSS() ?> 
  </head>
  <body>
    <?PHP
      $aOne->Act();
    ?>
    <?PHP $analytics = new Analytics(false); ?>
  </body>
</html>
