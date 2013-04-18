a<?PHP
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
	  echo '<h1>here is something new</h1>';
	  echo '
	       <script>
		$("h1").hide();
	       </script>
	       ';
    }

    public function getTitle()
    {
      return ($this->brevCfg['title']);
    }
  }
?>
