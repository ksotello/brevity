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
    array_push($this->css, $brevCfg['default_css']);
    array_push($this->scripts, $brevCfg['jquery']);
    $this->pageCSS = (is_array($this->css) ? $this->makeCSS($this->css) : 'no css found <br>');
    $this->pageScripts = (is_array($this->scripts) ? $this->makeScripts($this->scripts) : 'no scripts found <br>');
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
