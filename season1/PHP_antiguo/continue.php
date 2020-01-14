<?php
$var= 0;

while ($var < 10) {
	$var ++;
	
	if ($var == 5) {
		continue;
	}

echo "$var";
$var ++;

}



?>