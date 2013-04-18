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

  function __construct($brevCfg, $theme)
  {
    $this->brevCfg = $brevCfg;
    $this->pageTheme = $theme;
    $this->pageCSS = $CSS;
    $this->pageScripts = $jScripts;
  }

  public function getCSS()
  {
    return ($this->pageCSS);
  }

  public function getScripts()
  {
    return ($this->pageScripts);
  }

  private function makeCSS() // place $css in parameters
  {
    $rVal = '';
    $tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
    foreach ($pageCSS as $value)
    {
      $rVal .= '<link rel="stylesheet" href="'.$tmpPath.$value.'" type="text/css">'."\n";
    }
    return ($rVal);
  }

  private function makeScripts() // place $scripts in parameters
  {
    $rVal = '';
    foreach ($jScripts as $value)
    {
      $rVal .= '<script type="text/javascript" src="'.$this->brevCfg['script_path'].$value.'"></script>'."\n";
    }
    return ($rVal);
  }
}
?>
