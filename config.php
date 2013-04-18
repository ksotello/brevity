<?PHP
$brevCfg = array();
$brevCfg['debug'] = false;
$brevCfg['base_path'] = '';
$brevCfg['lib_path'] = $brevCfg['base_path'].'libraries/';
$brevCfg['page_path'] = $brevCfg['base_path'].'pages/';
$brevCfg['theme_path'] = $brevCfg['base_path'].'themes/';
$brevCfg['script_path'] = $brevCfg['base_path'].'scripts/';

$CSS = array(
		'main' => 'main.css',
		'normalize' => 'normalize.css');

$jScripts = array(
		'jQuery-1.7.2' => 'jquery-1.7.2.min.js',
		'jQuery-1.9.1' => 'jquery-1.9.1.min.js',	
		'Smooth_Scroll'=> 'jquery.smooth-scroll.min.js',
		'jQuery_UI' => 'jquery-ui-1.8.18.custom.min.js',
		'lightbox' => 'lightbox.js');

$brevCfg['page_ext'] = '.page.php';
$brevCfg['title'] = 'Sample Site :: ';

$brevCfg['meta_tags']['author'] = '';
$brevCfg['meta_tags']['keywords'] = '';
$brevCfg['meta_tags']['description'] = '';
$brevCfg['meta_tags']['robots'] = 'none';
?>
