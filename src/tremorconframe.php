<html><head><title>Welcome to tREMorcon - The PHP RCON Administration Utility</title>
<link href="tremorcon.css" type="text/css" rel="stylesheet">
</head>
<body marginheight="0" marginwidth="0">
<table><tr><td colspan="2">
<?php
function normaliza ($string){
    $string = utf8_decode($string);
	$trans = array("?print\n" => "", " " => "&nbsp;", "\n" => "<br>\n");
	$string = strtr($string, $trans);
    return $string;
}


if (isset($_POST['Query']))
{
	$kommand = $_POST[kommand];
	$password = $_POST[password];
	$address = $_POST[address];
	$port = $_POST[port];
	$server = "udp://".$address."";
	$prefix = "\xff\xff\xff\xff";
	$challenge = "challenge";
	$rcon = "rcon";
	
	// CHECK THAT FIELDS ARE ENTERED ON SUBMIT AS TO NOT WASTE A CONNECTION ATTEMPT
	if (!$kommand) 
	{
	print '-> No Command Entered!';
	}
	else if (!$address) 
	{
	print '-> No Address Entered!';
	}
	else if (!$port) 
	{
	print '-> No Port Entered!';
	}
	else if (!$password) 
	{
	print '-> No Password Entered!';
	}
	else 
	{
		$fp = fsockopen($server, $port, $errno, $errstr, 2);
		socket_set_timeout($fp,2);
		if (!$fp) 
		{
			echo "ERROR: $errno - $errstr<br />\n";
		} 
		else 
		{	
			fwrite($fp, "$prefix$rcon $password $kommand");	
			$contents = stream_get_contents($fp);
			fclose($fp);
			// CALL UP NORMALIZA TO CLEAN UP CODE
			$contents = normaliza($contents);  	
			print '-> '.$kommand.'<br>';
			print $contents;
		}
	}
}
else
{
print '-> Waiting For Command!';
}
?>
</td></tr></table>
</body></html>