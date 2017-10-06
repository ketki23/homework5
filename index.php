<?php

$obj = new main();

class main
{

	public function __construct()
	{

		$array1= array('2017','10','6');
		$array2= array('2017','/','10','/','6');

		$date =  date('Y-m-d', time());
		echo "The value of \$date: ".$date."<br>";

		$tar = "2017/05/24";
		echo "The value of \$tar: ".$tar."<br>";

		$year = array("2012", "396", "300","2000", "1100", "1089");
		echo "The value of \$year: ";
		print_r($year);

		echo tags::linebreak();

		echo tags::hr();

		echo tags::heading2("string replace function");	
		strings::stringreplace('-','/', $date);	
		echo tags::hr();


		echo tags::heading2("compare strings");
		strings::stringcompare($change,$tar);
		echo tags::hr();


		echo tags::heading2("String Position");
		strings::stringPosition($date, '/', 0);
		echo tags::hr();


		echo tags::heading2("string word count");
		strings::stringwc($change);
		echo tags::hr();


		echo tags::heading2("length of string");
		strings::stringlength($date);
		echo tags::hr();


		echo tags::heading2("ASCII value");
		strings::ASCII($date);
		echo tags::hr();


		echo tags::heading2("substring function");
		strings::sbstring($date, -2);
		echo tags::hr();


		echo tags::heading2("Implode function");
		strings::simplode("/", $array1);
		echo tags::hr();


		echo tags::heading2("Implode function with space");
		strings::simple(" ", $array2);
		echo tags::hr();


		echo tags::heading2("Check Leap Year using foreach:");
		echo LeapYear::arrays($year);
		echo tags::hr();

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

	public static function stringcompare($a,$b)
	{
		if($a<$b)
			{
				echo "the future";
			} 
			elseif ($a>$b)
			{
				echo "the past";
			}
			elseif ($a==$b)
			{
				echo "oops";
			}
	}

	public static function stringPosition($e,$f,$g)
	{
		echo strpos($e,$f,$g);
	}

	public static function stringwc($d)
	{
		echo str_word_count($d);
	}

	public static function stringLength($k)
	{
		echo strlen($k);
	}

	public static function ASCII($l)
	{
		echo ord($l);
	}

	public static function sbstring($i, $j)

	{
		echo substr($i, $j);
	}

	public static function simplode($m, $n)

	{
		echo implode($m, $n);
	}

	public static function simple($y, $z)

	{
		echo implode($y, $z);
	}


}

class Leapyear 
{
	public static function arrays($years)
	{
		foreach($years as $year)
        { 
         	Leapyear::check($year);
    	}
    }


	public static function arrayIf($years)
		{
			for($i=0; $i<count($years); $i++)
			{
				Leapyear::check($years[$i]);
			}
		}



	public static function check($year)
	{
		$val = ( ($year % 4 == 0) and ($year % 100 != 0) or ($year % 400 == 0) );

		$string = '';

		switch ($val) 
		{
			case 1:
				echo 'True'."\r";
				break;
			
			default:
				echo 'False'."\r";
				break;
		}
	}

}


class tags
{
	 public static function hr() 
  	{
      return '<hr>';
    }
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