<?PHP
class Mailer
{
  private $headers;
  private $to;
  private $message;
  private $subject;

  function __construct($to, $subject, $message, $headers)
  {
	$this->message = $message;
	$message = wordwrap($this->message, 70, "\r\n");
	//mail($to, $subject, $message, $headers);
  }
  
  function __desctruct(){}

  function sendMail()
  {
	mail($to, $subject, $message, $headers);
  }

  function changeHeaders($headers)
  {
	$this->headers = $headers;
  }

  function changeSubject($subject)
  {
	$this->subject = $subject;
  }

  function changeRecipiant($to)
  {
	$this->to = $to;
  }

  function changeMessage($message)
  {
	$this->message = message;
  }
}	
?>