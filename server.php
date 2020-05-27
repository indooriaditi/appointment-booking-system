<?php

session_start();
$errors=array();

//connect to database
$db=mysqli_connect('localhost','root','123456','userinfo');

//if the register button is clicked
if (isset($_POST['register'])) {
	
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$psw2=$_POST['psw2'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$blood=$_POST['blood'];
	
		
		if($psw != $psw2){
			array_push($errors, "The two passwords do not match");
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      		array_push($errors, "Email address is invalid");
    	}

		if (count($errors)===0) {
			 
		$sql = "INSERT INTO users (username,email,password,gender,age,height,weight,blood) VALUES ('$uname','$email','$psw','$gender','$age','$height','$weight','$blood')";
		mysqli_query($db,$sql);
		
		}

		$emailQuery="SELECT * from users where email='$email';";
    	$res=mysqli_query($db,$emailQuery);

            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
        
            if($email==$row['email'])
            {
                array_push($errors, "Email already exists");

            }

      }

	
}

if (isset($_POST['login'])) {
	
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];

	if (count($errors)==0) {

	$query= " SELECT * FROM users WHERE username='$uname'and password='$psw' ";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)==1) {

		header('location: profile.php');
		//log user in
		$_SESSION['uname']=$uname;

	}


	else{
		$incorrect= "The username/password is incorrect";
		echo "<p style='color:red; position: fixed; text-align: center; margin-left:42%; margin-right: 30%; bottom: 60px;  '>" . $incorrect . "</p>";
		}
	}
}





$db=mysqli_connect('localhost','root','123456','testdb');

//if next button is clicked on page 1 it redirects you to the doctor selection page

if (isset($_POST['next'])) {
  
  $spl=$_POST['spl'];


  $sql = "INSERT INTO test (spl) VALUES ('$spl')";
    mysqli_query($db,$sql);

    $query = "SELECT spl FROM  test WHERE spl='$spl'";

	$result=mysqli_query($db,$query);

	if ($_POST['spl'] == 'ENT') {

		header('location: bookingENT.php'); 

        }

        elseif ($_POST['spl'] == 'Pediatrician') { 

          header('location: bookingPed.php'); 

        }

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['spl']= $spl;
	
    }

 }

 if ($_SERVER['PHP_SELF']== '/demo/bookingENT.php') {

 //when you select a doctor and click on next1 (book appointment) it displays available slots

 if (isset($_POST['next1'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test2 (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);

     header('location:booking_ENT_dr1_slot.php');
    

    $query = "SELECT dr FROM  test2 WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

 //when you select a doctor and click on next2 (book appointment) it displays available slots

 if (isset($_POST['next2'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test2 (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);

     header('location:booking_ENT_dr2_slot.php');
    

    $query = "SELECT dr FROM  test2 WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

}


if ($_SERVER['PHP_SELF']== '/demo/bookingPed.php') {

 //when you select a doctor and click on next1 (book appointment) it displays available slots

 if (isset($_POST['next1'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test2 (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);

     header('location:booking_Ped_dr1_slot.php');
    

    $query = "SELECT dr FROM  test2 WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

 //when you select a doctor and click on next2 (book appointment) it displays available slots

 if (isset($_POST['next2'])) {
  
  $dr=$_POST['dr'];


  $sql = "INSERT INTO test2 (dr) VALUES ('$dr')";
    mysqli_query($db,$sql);

    header('location:booking_Ped_dr2_slot.php');
    

    $query = "SELECT dr FROM  test2 WHERE dr='$dr'";

	$result=mysqli_query($db,$query);

	if (mysqli_num_rows($result) == 1) {

	$_SESSION['dr']= $dr;
	
    }

 }

}

//if slot is booked

 if (isset($_POST['slot'])) {
  
  $date=$_POST['date'];
   $time=$_POST['time'];


  $sql = "INSERT INTO test3 (date,time) VALUES ('$date','$time')";
    mysqli_query($db,$sql);
    header('location: booked.php');

    $query = "SELECT date,time FROM  test3 WHERE date='$date' and time='$time'";

  $result=mysqli_query($db,$query);

  if (mysqli_num_rows($result) == 1) {

  $_SESSION['date']= $date;
  $_SESSION['time']= $time;
  
    }

 }





//logout
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['uname']);
	unset($_SESSION['spl']);
	unset($_SESSION['dr']);
	unset($_SESSION['date']);
	unset($_SESSION['time']);
	header('location: login.php');
}

?>