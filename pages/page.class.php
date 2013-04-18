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
    if ($css and is_array($scripts))
    {
      $this->pageCSS = $css;
      $this->pageScripts = $scripts;
    }
	else
	{
		echo 'No Style Guides or Scripts were located<br>';
	}
  }
  
  public function getCSS()
  {
    $rVal = '';
	/*
    if (is_array($this->pageCSS))
    {
	  
      $tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
      foreach ($this->pageCSS as $value)
      {
        $rVal .= '<link rel="stylesheet" href="'.$tmpPath.$value.'" type="text/css">'."\n";
      }
	  
	  $tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
	  $rVal .= '<link rel="stylesheet" href="'.$tmpPath.$value.'" type="text/css">'."\n";
    }
	else
	{
		$rVal .= 'No Style Guide Found!';
	}
	*/
	
	if ($this->pageCSS != null)
	{
		$tmpPath = $this->brevCfg['theme_path'].$this->pageTheme.'/';
		$rVal .= '<link rel="stylesheet" href="'.$tmpPath.$this->pageCSS.'" type="text/css">'."\n";
		print 'Style Guide has been loaded';
	}
	else
	{
		print 'Style Guide has not been loaded';
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
