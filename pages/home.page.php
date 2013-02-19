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
      foreach ($this->uGet as $key => $val)
      {
        echo '<b>'.$val.'</b> = '.$key.'</br>';
      }
    }

    public function getTitle()
    {
      return ($this->brevCfg['title']);
    }
  }
?>
