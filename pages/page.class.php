<?PHP
abstract class Page
{
  protected $brevCfg;
  protected $pageTheme;
  protected $pageCSS;
  protected $pageScripts;
  protected $uGet;

  abstract public function getTitle();
  abstract public function Display();

  function __construct($brevCfg, $theme, $css, $scripts)
  {
    $this->brevCfg = $brevCfg;
    $this->pageTheme = $theme;
    if (is_array($css) and is_array($scripts))
    {
      $this->pageCSS = $css;
      $this->pageScripts = $scripts;
    }
  }
  
  public function getCSS()
  {
    $rVal = "";
    if (is_array($this->pageCSS))
    {
      $tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
      foreach ($this->pageCSS as $value)
      {
        $rVal .= '<link rel="stylesheet" href="'.$tmpPath.$value.'" type="text/css">'."\n";
      }
    }
    return ($rVal);
  }

  public function getScripts()
  {
    $rVal = "";
    if (is_array($this->pageScripts))
    {
      foreach ($this->pageScripts as $value)
      {
        $rVal .= '<script type="text/javascript" src="'.$this->brevCfg['script_path'].$value.'"></script>'."\n";
      }
    }
    return ($rVal);
  }
}
?>
