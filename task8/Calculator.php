<?php //**** task 3 ****
class Calculator extends Exception
{

	public function __construct()
	{
		$argv = $_SERVER['argv'];

		 if(isset($argv[1]))
		 {
			
			if($argv[1] == "multiply")
			{
				Calculator::multiply();
			}
			
		 }
		 else
			{
				Calculator::default_call();
			}
	} 
	
	public function errorMessage() {

    $errorMsg = 'Error: Negative numbers ('.$this->getMessage().') not allowed';
    return $errorMsg;
  }
	public static function multiply()
	{
		$optVal = 1; $argv = $_SERVER['argv'];
		 
		 if(isset($argv[2]))
		 {

			if($argv[2] != null || $argv[2] != "")
			{		

				if(strstr($argv[2],"\\"))
				{
				$delimeters = explode("\\",$argv[2]); //print_r($delimeters);
				$delimeter = $delimeters[2]; //echo "delimeter--".$delimeter."<br>";
				$string15 = $delimeters[4]; //echo "string15--".$string15."<br>";

				$arguments = explode($delimeter,$string15); //print_r($arguments); exit;
				}
				else
				{
					$arguments = explode(",",$argv[2]);
				}
				$flag = 0;
				
				for($i = 0;$i < count($arguments); $i++)
				{
					$val = intval($arguments[$i]); 
					
					if($val > 0 && $val < 1000)
					{
						$optVal = $optVal * $val;
					}
					else
					{
						$numbers10[] = $val;
						$flag = 1;
					}
				}
				
				if($flag == 1)
				{
					
					$numString = implode(",",$numbers10);
					
					try {
							throw new Exception($numString);
					}

					catch(Exception $e) {
					  echo 'Error: Negative numbers (' .$e->getMessage().') not allowed';
					  exit;
					}
				}
				
				echo $optVal;
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