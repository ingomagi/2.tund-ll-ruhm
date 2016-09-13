<?php

	$age = 5;
	if ($age < 18)
	{
		
		echo "alaealine";
		
	}	else
	{
		
		echo "täisealine";		
	}
	
?>

<br>

<?php
//eesmärk vanusele vastavalt trükime välja sõna "palju"

for ($i=1; $i<=$age; $i=$i+1)
	{echo $i."Palju ";

	}
	
	echo "õnne!";

?>