<?php

$obj = new main();

class main
{

	public function __construct()
	{


		$date =  date('Y-m-d', time());
		echo "The value of \$date: ".$date."<br>";

		$tar = "2017/05/24";
		echo "The value of \$tar: ".$tar."<br>";

		$year = array("2012", "396", "300","2000", "1100", "1089");
		echo "The value of \$year: ";
		print_r($year);

		echo tags::linebreak();
		echo tags::heading2("string replace function");	
		strings::stringreplace('-','/', $date);																								
		

	}

		public function __destruct()
		{

		}
}


class strings
{
	public static function stringreplace($search,$given,$date)
	{
		echo $change =str_replace($search,$given,$date);
		
	}
}

class tags
{
	public static function linebreak()
	{
		return '<br>';
	}

	public static function heading2($text)
	{
		return '<h2>'.$text.'</h1>';
	}
}

?>