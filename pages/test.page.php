<?PHP
  require_once('page.class.php');
  include('scripts.php');
  include('themes.php');
  
  class Test extends Page
  {
    function __construct($brevCfg, $uGet)
    {
      parent::__construct($brevCfg, "original", new Themes(), new Scripts());//array(), array());
      
      $this->uGet = $uGet;
    }

    function __destruct() { }
    
    public function Display()
    {
	  echo '<p>jQuery test --> you should not be able to see this<p>';
	  echo '<script>
				$("p").hide();
			</script>
		   ';
    }

    public function getTitle()
    {
      return ($this->brevCfg['title']);
    }
  }
?>
