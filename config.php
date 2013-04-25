<?PHP
$brevCfg = array();
$brevCfg['debug'] = false;
$brevCfg['base_path'] = '';
$brevCfg['lib_path'] = $brevCfg['base_path'].'libraries/';
$brevCfg['page_path'] = $brevCfg['base_path'].'pages/';
$brevCfg['theme_path'] = $brevCfg['base_path'].'themes/';
$brevCfg['script_path'] = $brevCfg['base_path'].'scripts/';

$brevCfg['page_ext'] = '.page.php';

// If you wish to change the title name for your site
// please do so here
$brevCfg['title'] = 'Sample Site :: ';

// Add your meta information here for your webpage
$brevCfg['meta_tags']['author'] = '';
$brevCfg['meta_tags']['keywords'] = '';
$brevCfg['meta_tags']['description'] = '';
$brevCfg['meta_tags']['robots'] = 'none';


// To link your css stylesheets to brevity
// follow the examples shown here as well as
// the examples given in page.class.php

 $brevCfg['default_css'] = 'main.css';
 $brevCfg['normalize'] = 'normalize.css';

// To link your javascripts to brevity
// follow the examples shown here as well as
// the examples given in page.class.php

// $brevCfg['jquery'] = 'jquery-1.9.1.min.js';

// For development puporses brevity defaults to true
 $brevCfg['development'] = true;
 
// For production purposes brevity defaults to false
// please change this once your in a production setting
 $brevCfg['production'] = false;
 
// Production routes for brevity. To add more to your
// site please do so following the example below
 $brevCfg['routes']['home'] = 'home';
 
?>
