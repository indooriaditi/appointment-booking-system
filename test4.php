<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<?php if (isset($_SESSION['uname'])): ?>
      <br><h1 class="welcome">Welcome <?php echo $_SESSION['uname']; ?> <p class="logout"><a href="profile.php?logout='1'">Logout</a></p> </h1>
   
    <?php endif ?>

  <br><br><br>
	<?php if (isset($_SESSION['spl'])): ?> 	
      <br><p>Speciality: <?php echo $_SESSION['spl']; ?> </p>
   
	<?php endif ?>

    <?php if (isset($_SESSION['dr'])): ?>  
      <br><p>Doctor: <?php echo $_SESSION['dr']; ?> </p>
   
  <?php endif ?>


    <?php if (isset($_SESSION['date'])): ?>  
      <br><p>Date: <?php echo $_SESSION['date']; ?> </p>
   
  <?php endif ?>


    <?php if (isset($_SESSION['time'])): ?>  
      <br><p>Time: <?php echo $_SESSION['time']; ?> </p>
   
  <?php endif ?>




</body>
</html>