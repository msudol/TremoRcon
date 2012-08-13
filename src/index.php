<html><head><title>Welcome to tREMorcon - The PHP RCON Administration Utility</title>
<link href="tremorcon.css" type="text/css" rel="stylesheet">
</head>
<body marginheight="0" marginwidth="0">

<table align="center" border="2"><tr><td colspan="2">

<form method="post" action="tremorconframe.php" target="tremorconframe">
	<table align="center" width="540" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td valign="top">Address:</td>
		<td valign="top"><input type="text" name="address" size="18" maxlength=20></td>
		<td valign="top">&nbsp;</td>
		<td valign="top">Port:</td>
		<td valign="top"><input type="text" name="port" size="18" maxlength=20></td>
	</tr>
	<tr>
		<td valign="top">Password:</td>
		<td valign="top"><input type="password" name="password" size="18" maxlength=20></td>
		<td valign="top">&nbsp;</td>
		<td valign="top">Command:</td>
		<td valign="top"><input type="text" name="kommand" size="18" maxlength=120></td>
	</tr>
	<tr>
		<td colspan="5" align="center">
		<input name="Query" type="submit" id="Query" value="Query">
		</td>
	</tr>
</table>
</form>
<!-- the iframe -->
<center>
	<hr>
	<iframe src='tremorconframe.php' frameborder="0" scrolling="yes" width="540" height="300" name="tremorconframe" /></iframe>
</center>

<center>
	<p>tREMorcon Beta 4: &copy; 2008 tREMor</p>
</center>


</td>
</tr>
</table>

<table class="footer" align="center" width="550" border="2"><tr class="footer"><td class="footer" colspan="2">

<p><b>What is this?</b>  This is tREMoRcon, a remote console (RCON) utility for Wolf: ET Admins. 
This is capable of adminstrating any Wolf:ET Game server as well as many other early RCON 
based game servers (like Quake).</p>

<p>This program is still in Beta development phase. The next phase of development will be to 
make tREMoRcon compatible with the second generation of RCON based games as well... known as 
RCON Source... games like Counter Strike, Half Life and more.</p>

</td></tr></table>


</body>

</html>