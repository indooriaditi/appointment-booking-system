<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link href="styles/main.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
  .welcome{
    text-align: center;
    font-family: lucida bright;
  }

  .logout{
    margin-top: 0px;
    margin-right: 5px;
    float: right;
    font-size: 18px;
  }

.top{
	background: white;
}

  body{
            background:white;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            padding: 0px;
            height: 100%; 
            width: 100%;
            background-attachment: fixed;
            background-size: cover;
  }

ul{
  margin: 0;
  padding: 0;
  background: #a1cbda;
  list-style-type: none;
  overflow: hidden;

}
li{
  float: left;
}
li a{
  height: 20px;
  display: inline-block;
  text-align: center;
    padding: 20px;
    margin: 0;
    vertical-align: middle;
    text-decoration: none;
  color: black;
  font-weight: bold;
}
li a:hover {
  background-color:silver;
}
.logo{
  width: 260px;
    height: 150px;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 90% auto;
    position: relative;
    display: inline-block;
    margin: 0;
    padding: 0;
}
.contactlogo{
  	width: 340px;
    height: 130px;
    background-repeat: no-repeat;
    background-position: right;
    float: right;
    background-size: 90% auto;
    position: relative;
    display: inline-block;
    margin: 0;
    padding: 0;
}
.certlogo{
  height:130px;
  width:290px;
  float: right;
}

.info{
    box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 500px;
    position: relative;
    transition: 0.5s;
    margin: 50px auto;
}

.info:hover{
  transform: scale(1.06);
  background: #f9f9f9;
  box-shadow: 2px 2px 2px #000;
  z-index: 2;
}

b{
  color: black;
}




</style>

</head>
<body>


	<div class="top">
    <img class="logo" src="logo .png">
    <img class="contactlogo" src="contact.png">
    <img class="certlogo" src="cert3.png">
	</div>

        <ul>
          <li><a href="profile.php"><i style="font-size:22px" class="fa">&#xf007;</i></a></li>
          <li><a href="booking.php">Book Appointment</a></li>
          <li><a href="appointments.php">Your Appointments</a></li>
        </ul>

    <?php if (isset($_SESSION['uname'])): ?>
      <br><h1 class="welcome">Welcome <?php echo $_SESSION['uname']; ?> <p class="logout"><a href="profile.php?logout='1'">Logout</a></p> </h1>
   
    <?php endif ?>

    <div class="info">

      <h2 style="text-align: center; font-family: lucida bright;">PATIENT PROFILE</h2>
      <hr>
    
<?php

$db=mysqli_connect('localhost','root','123456','userinfo');

  $uname=$_SESSION['uname'];

  $query= " SELECT * FROM users WHERE username='$uname'";
  $result=mysqli_query($db,$query);

  if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {

    echo "<p style='color:#e60000; text-align: center; font-size:20px; font-family:lucida bright; '> <b>NAME: </b>". $row["username"] . "<br>" . "<b>GENDER: </b>". $row["gender"]. "<br>" ."<b>AGE: </b>". $row["age"]. " yrs" ."<br>" . "<b>HEIGHT: </b>" . $row["height"]. " cms" ."<br>" . "<b>WEIGHT: </b>" . $row["weight"]. " kgs" ."<br>" . "<b>BLOOD GROUP: </b>" . $row["blood"]."</p>";

  }

}

?>

  </div>


</body>
</html>