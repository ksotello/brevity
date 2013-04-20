<?PHP
$brevCfg = array();
$brevCfg['debug'] = false;
$brevCfg['base_path'] = '';
$brevCfg['lib_path'] = $brevCfg['base_path'].'libraries/';
$brevCfg['page_path'] = $brevCfg['base_path'].'pages/';
$brevCfg['theme_path'] = $brevCfg['base_path'].'themes/';
$brevCfg['script_path'] = $brevCfg['base_path'].'scripts/';

$brevCfg['page_ext'] = '.page.php';
$brevCfg['title'] = 'Sample Site :: ';

$brevCfg['meta_tags']['author'] = '';
$brevCfg['meta_tags']['keywords'] = '';
$brevCfg['meta_tags']['description'] = '';
$brevCfg['meta_tags']['robots'] = 'none';


// To link your css stylesheets to brevity
// follow the examples shown here as well as
// the examples given in page.class.php

// $brevCfg['default_css'] = 'main.css';
// $brevCfg['normalize'] = 'normalize.css';
// $brevCfg['gallery'] = 'gallery.css';

// To link your javascripts to brevity
// follow the examples shown here as well as
// the examples given in page.class.php

// $brevCfg['jquery'] = 'jquery-1.9.1.min.js';
?>
