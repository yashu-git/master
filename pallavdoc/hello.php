<html>
<head>

</head>
<body>
<b>Tables from 1 to 20</b>
<br/>
<?php 
for($i=1;$i<21;$i++)
{
	echo "<br/>";
	echo "Table of ".$i."<br/>****************************";
	echo "<br/>";
	for($j=1;$j<11;$j++)
	{
		echo $i.'X '.$j.' = '.($i*$j);
		echo "<br/>";
	}
	
}
?>
</body>
</html>
