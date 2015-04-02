<table width="100" border="0" align="center" cellpadding="0"> <!-- Handles Login Form and surrounding -->
	<td colspan="3" align="center" style="PADDING-BOTTOM:10px"><img src="logo.png"></td>
</table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form1" method="post" action="validateCredentials.php"> <!-- points to login validation script on submission -->
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr></tr>
					<tr>
						<td colspan="3" align="center"><strong>Employee Login</strong></td>
					</tr>
					<tr>
						<td width="75">Username</td>
						<td width="6">:</td>
						<td width="500"><input name="username" type="text" id="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" type="password" id="password"></td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
						<td><input type="submit" name="Submit" value="Login"></td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>