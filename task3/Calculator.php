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
				//$arguments = explode(",",$argv[2]);
				
				//$pattern = '/[,\n]/';
				//$arguments =  preg_split( $pattern,$argv[2] );	

				$ready = str_replace('\n',',', $argv[2]); //echo $ready;
				$arguments = explode(',', $ready);

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