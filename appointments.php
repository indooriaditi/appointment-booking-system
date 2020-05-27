<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link href="styles/main.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
  .welcome{
    text-align: center;
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

.title{
  text-align: center;

}

.ap{

  text-align: center;
  font-size: 18px;
  font-family: sans-serif;
  color: #cc0000;
  font-weight: 600;
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
  background: #e6e6ff;
  box-shadow: 2px 2px 2px #000;
  z-index: 2;
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
      <br> <h1 class="logout"><a href="profile.php?logout='1'">Logout</a></p> </h1>
      <br><br>

    <?php endif ?>
   <br>
   <h1 class="title">APPOINTMENT DETAILS</h1>



<?php   $db=mysqli_connect('localhost','root','123456','testdb'); ?>


   <div class="info">
    <?php if (isset($_SESSION['dr'])): ?>  
      <p class="ap">Doctor name: <?php echo $_SESSION['dr']; ?> </p>
   
  <?php else: ?>

            <p class="ap">You have no appointments!</p>


  <?php endif ?>

  <?php if (isset($_SESSION['spl'])): ?>  
      <p class="ap">Speciality: <?php echo $_SESSION['spl']; ?> </p>
   
  <?php endif ?>


    <?php if (isset($_SESSION['date'])): ?>  
      <p class="ap">Date: <?php echo $_SESSION['date']; ?> </p>
   
  <?php endif ?>


    <?php if (isset($_SESSION['time'])): ?>  
      <p class="ap">Time: <?php echo $_SESSION['time']; ?> </p>
   
  <?php endif ?>

  </div>



</body>
</html>