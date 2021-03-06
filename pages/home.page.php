<?PHP
  require_once('page.class.php');

  class Home extends Page
  {
    function __construct($brevCfg, $uGet)
    {
      parent::__construct($brevCfg, "original", array(), array());
      
      $this->uGet = $uGet;
    }

    function __destruct() { }
    
    public function Display()
    {
      echo '<div id="space-head"></div>
	   <div id="container" class="shadow">
	      <div id="info">
	        <h1>brevity</h1>
	      </div>
              <p id="description">A simple, clean, easy to use framework that allows for complete customization</p>
              <div id="space"></div>
              <div id="tab"></div>
              <div id="borderlink">
                <p id="centerp"><a href="https://github.com/silver0bullets/brevity" id="link">get brevity</a></p>
              </div>
              <div id="tab"></div>
              <div id="borderlink">
                <p id="centerp"><a href="https://github.com/silver0bullets/brevity/wiki" id="link">view wiki</a></p>
              </div>
	    </div>';
    }

    public function getTitle()
    {
      return ($this->brevCfg['title']);
    }
  }
?>
