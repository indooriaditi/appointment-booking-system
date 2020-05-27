


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="post">
	
	<select name="spl" required>
    <option value="">Select speciality:</option>
    <option value="ENT">ENT</option>
    <option value="Pediatrician">Pediatrician</option>
  	</select>




  	<button name="next" type="submit">Next</button>

	</form>

	<?php 

	if ($_SERVER['PHP_SELF']== '/demo/test.php')

		echo "Hello";

	?>




</body>
</html>