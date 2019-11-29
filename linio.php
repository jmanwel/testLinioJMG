<?php
	
	for($i=1;$i<=100;$i++)
	{	
		switch($i)
		{
			case ($i%3==0 && $i%5==0):
				echo $i . ": Linianos<br>";
				break;
			case ($i%5==0):
				echo $i . ": IT<br>";
				break;
			case ($i%3==0):
				echo $i . ": Linio<br>";
				break;
			default:
				echo $i . "<br>";
		}
	}	
				
?>