<?php 


function capitales($pais,$capital = "Tokio" , $habitantes = "500000"){

	return ("La capital de $pais es $capital y tiene $habitantes habitantes. <br>");
}
echo capitales ("Japón");

echo capitales ("china " , "Pekin");

echo capitales ("Inglaterra" , "Londres" ,"5000000000");


 ?>