<!DOCTYPE html>
<html lang="en-US">
<body>

<h1 style="font-family:verdana;">SES-L Check-in</h1>
<hr>

<p>Please input the customer name and device IMEI to begin</p>

<form method="GET">
  <label for="cxname"><b>Customer Name:</b></label><br>
  <input type="text" id="cxname" name="cxname"><br>
  <label for="imei"><b>IMEI:</b></label><br>
  <input type="text" id="imei" name="imei">
</form>

<p style="font-family:verdana;"><b>Service Type:</b></p>

<form action="/action_page.php" target="_self">
  <input type="checkbox" id="repair" name="repair" value="Repair">
  <label for="repair">Repair</label><br>
  <input type="checkbox" id="fenrir type" name="fenrir h" value="Fenrir H">
  <label for="fenrir">Fenrir H</label><br>
  <input type="checkbox" id="fenrir type" name="fenrir f" value="Fenrir F">
  <label for="fenrir">Fenrir F</label><br></br>
  <input type="submit" value="Submit">
</form>

<?php
// This doesn't work yet
	$name = $_GET['cxname'];
	echo $name." has been checked in! The clock is ticking!";
?>

</body>
</html>