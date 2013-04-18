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

  private function makeCSS($css)
  {
    $rVal = '';
    $tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
    foreach ($css as $value => $val)
    {
      $rVal .= '<link rel="stylesheet" href="'.$tmpPath.$val.'" type="text/css">'."\n";
    }
    return ($rVal);
  }

  private function makeScripts($scripts)
  {
    $rVal = '';
    foreach ($scripts as $value => $val)
    {
      $rVal .= '<script type="text/javascript" src="'.$this->brevCfg['script_path'].$val.'"></script>'."\n";
    }
    return ($rVal);
  }
}
?>
