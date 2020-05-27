<?php

session_start();

$db=mysqli_connect('localhost','root','123456','testdb');

if (isset($_POST['next'])) {
  
  $spl=$_POST['spl'];


  $sql = "INSERT INTO test (spl) VALUES ('$spl')";
    mysqli_query($db,$sql);
    
    if (isset($_POST['spl']))
    {
        if ($_POST['spl'] == 'ENT') { 

          header('location: bookingENT.php'); 

        }

        elseif ($_POST['spl'] == 'Pediatrician') { 

          header('location: bookingPed.php'); 

        }

      }

    $query = "SELECT spl FROM  test WHERE spl='$spl'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['spl']= $spl;
	
    }

 }


if ($_SESSION['spl'] == 'ENT') {

if (isset($_POST['next1'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);
    
    header('location: booking_ENT_dr1_slot.php');

    $query = "SELECT dr FROM  test WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

 if (isset($_POST['next2'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);
    
    header('location: booking_ENT_dr2_slot.php');

    $query = "SELECT dr FROM  test WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

}


if ($_SESSION['spl'] == 'Pediatrician') {

if (isset($_POST['next1'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);
    
    header('location: booking_Ped_dr1_slot.php');

    $query = "SELECT dr FROM  test WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

 if (isset($_POST['next2'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);
    
    header('location: booking_Ped_dr2_slot.php');

    $query = "SELECT dr FROM  test WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

}




 if (isset($_POST['slot'])) {
  
  $date=$_POST['date'];
   $time=$_POST['time'];


  $sql = "INSERT INTO test (date,time) VALUES ('$date','$time')";
    mysqli_query($db,$sql);
    header('location: test4.php');

    $query = "SELECT date,time FROM  test WHERE date='$date' and time='$time'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['date']= $date;
	$_SESSION['time']= $time;
	
    }

 }


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['spl']);
	unset($_SESSION['dr']);
	unset($_SESSION['date']);
	unset($_SESSION['time']);
	header('location: login.php');
}

?>

