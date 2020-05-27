<?php include('test5.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">

	<label for="start">Select date:</label>

	<input name="date" placeholder="select date" type="text" onfocus="(this.type='date')" min="2020-03-10" max="2020-03-11" required>
	<br>
	

	<br>

	<div id="demo" >

	<label for="start">Booking time:</label>

	<select name="time" required>
    <option value="">choose a time:</option>
    <option value="10:00 am - 12:00 pm">10:00 am - 12:00 pm</option>
    <option value="4:00 pm - 6:00 pm">4:00 pm - 6:00 pm</option>
  	</select>
	
	<br>

  	<button class="nextb" style=" font-family: Lucida Bright; margin: 10px auto; text-align: center; font-weight: 500; color: #00264d; font-size: 20px; padding: 6px 25px;" name="slot" type="submit">Book Slot</button>

	</div>

	</form>

</body>
</html>