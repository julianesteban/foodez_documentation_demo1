<html>
<body>

<?php
session_start();
if( isset( $_SESSION['username'])) {
	$username = $_SESSION['username'];
}
else
	header("location:login.php");

$server="localhost"; // Server
$user="foodezwo_admin"; // SQL User
$password="steeltest123"; // SQL PW
$database="foodezwo_shifts"; // Database

echo '<script type="text/javascript">alert("Welcome '. $_SESSION['username']. '");</script>';

?>


<p>Logged in as </p>

<script type="text/javascript" src="jquery-2.1.3.min.js"></script> <!-- jquery for AJAX -->

<table width="700" border="1" align="center" cellpadding="0">
	<tr> <!-- Weeks -->
		<td align="center">
			<strong>Sunday</strong>
		</td>
		<td align="center">
			<strong>Monday</strong>
		</td>
		<td align="center">
			<strong>Tuesday</strong>
		</td>
		<td align="center">
			<strong>Wednesday</strong>
		</td>
		<td align="center">
			<strong>Thursday</strong>
		</td>
		<td align="center">
			<strong>Friday</strong>
		</td>
		<td align="center">
			<strong>Saturday</strong>
		</td>
	</tr>
	<tr> <!-- (Button series) 12:00 PM to 3:00 PM -->
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div1"><form action="schedule.php"><input type="submit" id="button1" style="margin-bottom:10px" name="button1" value="Take Shift"/></form></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div2"><input type="submit" id="button2" style="margin-bottom:10px" name="button2" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div3"><input type="submit" id="button3" style="margin-bottom:10px" name="button3" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div4"><input type="submit" id="button4" style="margin-bottom:10px" name="button4" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div5"><input type="submit" id="button5" style="margin-bottom:10px" name="button5" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div6"><input type="submit" id="button6" style="margin-bottom:10px" name="button6" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">12:00 PM<br>to<br>3:00 PM</p>
			<div id="div7"><input type="submit" id="button7" style="margin-bottom:10px" name="button7" value="Take Shift"/></div>
		</td>
	</tr>
	<tr> <!-- 3:00 PM to 6:00 PM -->
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<form action="schedule.php">
			<div id="div8"><input type="submit" id="button8" style="margin-bottom:10px" name="button8" value="Take Shift"/></div>
			</form>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<div id="div9"><input type="submit" id="button9" style="margin-bottom:10px" name="button9" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<div id="div10"><input type="submit" id="button10" style="margin-bottom:10px" name="button10" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<div id="div11"><input type="submit" id="button11" style="margin-bottom:10px" name="button11" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<div id="div12"><input type="submit" id="button12" style="margin-bottom:10px" name="button12" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<div id="div13"><input type="submit" id="button13" style="margin-bottom:10px" name="button13" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">3:00 PM<br>to<br>6:00 PM</p>
			<div id="div14"><input type="submit" id="button14" style="margin-bottom:10px" name="button14" value="Take Shift"/></div>
		</td>
	</tr>
	<tr> <!-- 6:00 PM to 9:00 PM -->
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div15"><input type="submit" id="button15" style="margin-bottom:10px" name="button15" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div16"><input type="submit" id="button16" style="margin-bottom:10px" name="button16" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div17"><input type="submit" id="button17" style="margin-bottom:10px" name="button17" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div18"><input type="submit" id="button18" style="margin-bottom:10px" name="button18" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div19"><input type="submit" id="button19" style="margin-bottom:10px" name="button19" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div20"><input type="submit" id="button20" style="margin-bottom:10px" name="button20" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">6:00 PM<br>to<br>9:00 PM</p>
			<div id="div21"><input type="submit" id="button21" style="margin-bottom:10px" name="button21" value="Take Shift"/></div>
		</td>
	</tr>
	<tr> <!-- 9:00 PM to 12:00 AM -->
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div22"><input type="submit" id="button22" style="margin-bottom:10px" name="button22" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div23"><input type="submit" id="button23" style="margin-bottom:10px" name="button23" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div24"><input type="submit" id="button24" style="margin-bottom:10px" name="button24" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div25"><input type="submit" id="button25" style="margin-bottom:10px" name="button25" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div26"><input type="submit" id="button26" style="margin-bottom:10px" name="button26" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div27"><input type="submit" id="button27" style="margin-bottom:10px" name="button27" value="Take Shift"/></div>
		</td>
		<td width="100" align="center">
			<p style="margin-top:5px">9:00 PM<br>to<br>12:00 AM</p>
			<div id="div28"><input type="submit" id="button28" style="margin-bottom:10px" name="button28" value="Take Shift"/></div>
		</td>
	</tr>
</table>

</body>
</html>