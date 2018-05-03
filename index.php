<html>
<body>
<form method="POST">
	<input type="submit" name="l1" value="LIGHT 1" /></br>
	<input type="submit" name="l2" value="LIGHT 2" /></br>
	<input type="submit" name="l3" value="LIGHT 3" /></br>
	<input type="submit" name="f1" value="FAN"/></br>
</form>
</body>
<?php
	
	$val="";
	$fr="";


	if(isset($_POST['l1']))
	{
		$fd = fopen("light1.txt", "r");
		$fr = fread($fd, filesize("light1.txt"));
		$cont = $fr;
		fclose($fd);
		fclose($fr);

		if (strcasecmp($fr, "0")==0) 
		{
			$val = '1';
		}
		else
		{
			$val = '0';
		}
		$fd = fopen("light1.txt", "w");
		fwrite($fd, $val);
		fclose($fd);
		header("Location:index.php");
	}

	if(isset($_POST['l2']))
	{
		$fd = fopen("light2.txt", "r");
		$fr = fread($fd, filesize("light2.txt"));
		$cont = $fr;
		fclose($fd);
		fclose($fr);

		if (strcasecmp($fr, "0")==0) 
		{
			$val = '1';
		}
		else
		{
			$val = '0';
		}
		$fd = fopen("light2.txt", "w");
		fwrite($fd, $val);
		fclose($fd);
		header("Location:index.php");
	}

	if(isset($_POST['l3']))
	{
		$fd = fopen("light3.txt", "r");
		$fr = fread($fd, filesize("light3.txt"));
		$cont = $fr;
		fclose($fd);
		fclose($fr);

		if (strcasecmp($fr, "0")==0) 
		{
			$val = '1';
		}
		else
		{
			$val = '0';
		}
		$fd = fopen("light3.txt", "w");
		fwrite($fd, $val);
		fclose($fd);
		header("Location:index.php");
	}

	if(isset($_POST['f1']))
	{
		$fd = fopen("fan.txt", "r");
		$fr = fread($fd, filesize("fan.txt"));
		$cont = $fr;
		fclose($fd);
		fclose($fr);

		if (strcasecmp($fr, "0")==0) 
		{
			$val = '1';
		}
		else
		{
			$val = '0';
		}
		$fd = fopen("fan.txt", "w");
		fwrite($fd, $val);
		fclose($fd);
		header("Location:index.php");
	}

?>
</html>