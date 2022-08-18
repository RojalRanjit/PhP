<!DOCTYPE html>
<html>
<body>
<?php
function evaluate($name, $att, $hyg, $rat){
	if($att < 80)
	{
		echo "$name",": ","You are fired from Rojan Kirana Pasal";
	}
	else if($hyg < 50)
	{
		echo "$name",": ","You are fired from Rojan Kirana Pasal";
	}
	else if($rat < 2)
	{
		echo "$name",": ","You are fired from Rojan Kirana Pasal";
	}
	else
	{
		echo "$name",": ","Not fired for now!!";
	}
}

evaluate("Ram Bania",90,50,3);
?>
 
</body>
</html>