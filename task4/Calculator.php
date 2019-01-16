<?php //**** task 3 ****
class Calculator
{

	public function __construct()
	{
		$argv = $_SERVER['argv'];

		 if(isset($argv[1]))
		 {
			
			if($argv[1] == "add")
			{
				Calculator::add();
			}
			
		 }
		 else
			{
				Calculator::default_call();
			}
	} 
	
	public static function add()
	{
		$sum = 0; $argv = $_SERVER['argv'];
		 
		 if(isset($argv[2]))
		 {

			if($argv[2] != null || $argv[2] != "")
			{		
				$delimeters = explode("\\",$argv[2]); //print_r($delimeters);
				$delimeter = $delimeters[2]; //echo "delimeter--".$delimeter."<br>";
				$string15 = $delimeters[4]; //echo "string15--".$string15."<br>";

				$arguments = explode($delimeter,$string15); //print_r($arguments); exit;

				for($i = 0;$i < count($arguments); $i++)
				{
					$val = intval($arguments[$i]);
					
					if($val < 1000)
					{
						$sum = $sum + $val;
					}
				}
				
				echo $sum;
			}
			else
			{
				echo 0;
			}
		}
		else
		{
			echo 0;
		}
	}

	public static function default_call()
	{
		echo 0;
	}
}
$ob = new Calculator();

?>