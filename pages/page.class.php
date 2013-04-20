<?PHP
abstract class Page
{
  protected $brevCfg;
  protected $pageTheme;
  protected $pageCSS;
  protected $pageScripts;
  protected $uGet;
  protected $css;
  protected $scripts;

  abstract public function getTitle();
  abstract public function Display();

  function __construct($brevCfg, $theme, $css, $scripts)
  {
    $this->brevCfg = $brevCfg;
    $this->pageTheme = $theme;
    $this->css = $css;
    $this->scripts = $scripts;

    // adding new css style sheets reguires you to add your css path to
    // the pre-exsting array_push like the example given. You may do the
    // the same for you javascripts.

    // array_push($this->css, $brevCfg['default_css'], $brevCfg['normalize'], $brevCfg['gallery']);
    // array_push($this->scripts, $brevCfg['jquery']);

    $this->pageCSS = (is_array($this->css) ? $this->makeCSS($this->css) : '');
    $this->pageScripts = (is_array($this->scripts) ? $this->makeScripts($this->scripts) : '');
  }

  public function getCSS()
  {
    return ($this->pageCSS);
  }

  public function getScripts()
  {
    return ($this->pageScripts);
  }

  private function makeCSS($css)
  {
    $rVal = '';
    $tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
   
    foreach ($css as $value)
    {
      $rVal .= '<link rel="stylesheet" href="'.$tmpPath.$value.'" type="text/css">'."\n";
    }
    return ($rVal);
  }

  private function makeScripts($scripts)
  {
    $rVal = '';
    foreach ($scripts as $value)
    {
      $rVal .= '<script type="text/javascript" src="'.$this->brevCfg['script_path'].$value.'"></script>'."\n";
    }
    return ($rVal);
  }
}
?>
