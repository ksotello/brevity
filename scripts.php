<?PHP
class Scripts
{
	protected $script_a;
	function __construct()
    {
		$this->script_a = array("jquery.smooth-scroll.min.js",
						  "jquery-1.7.2.min.js",
						  "jquery-1.9.1.min.js",
						  "jquery-ui-1.8.18.custom.min.js",
						  "lightbox.js"
						 );
    }

    function __destruct() { }
	
	function getScripts()
	{
		return $this->script_a;
	}
}
?>