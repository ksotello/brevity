<?PHP
  require_once('page.class.php');
  
  class Test extends Page
  {
    function __construct($brevCfg, $uGet)
    {
      parent::__construct($brevCfg, "original");
      
      $this->uGet = $uGet;
    }

    function __destruct() { }
    
    public function Display()
    {
	  echo '<p>here ya go</p>';
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
