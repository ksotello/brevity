<?PHP
class Themes
{
	protected $themes;
	function __construct()
	{
		$this->themes = array("main.css", "normalize");
	}
	
	function __destruct(){ } 
	
	function getThemes()
	{
		return $this->themes;
	}
}
?>