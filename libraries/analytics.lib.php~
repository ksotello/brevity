<?PHP
class Analytics
{
	function __construct($active)
	{
		if($active)
		{
			echo '
			     <!-- Google Analytics: change UA-XXXXX-X to be your site\'s ID. -->
			     <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
		<script>
		var _gaq=[[\'_setAccount','UA-XXXXX-X\'],[\'_trackPageview\']];
        function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=\'//www.google-analytics.com/ga.js\';
        s.parentNode.insertBefore(g,s)}(document,\'script\'));
    </script>
			     ';
		}
		else
		{
			echo '';
		}
	}
}
?>
