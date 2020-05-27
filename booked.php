
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
.profile{
  height: 28px;
  width: 20px;
  background-repeat: no-repeat;
    background-position: left center;
    background-size: 90% auto;
    position: relative;
    display: inline-block;
    margin: 0;
    padding: 0;
}

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
            font-family: serif;
  }

.nav ul{
  margin: 0;
  padding: 0;
  background: #a1cbda;
  list-style-type: none;
  overflow: hidden;

}
.nav li{
  float: left;
}
.nav li a{
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
.nav li a:hover {
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


.nextb{
  background-color: #b3d9ff;
}
.nextb:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

  .progress{
    margin: 70px auto 50px;
  }

  .progress p{
    font-size: 15px;
    font-weight: 600;
  }

  .progress ul{
    text-align: center;
  }

  .progress ul li{
    display: inline-block;
    width: 200px;
    position: relative;
  }

  .progress ul li .fa{
    background: #ccc;
    width: 16px;
    height: 16px;
    color: #fff;
    border-radius: 50%;
    padding: 5px;

  }

  .progress ul li .fa::after{
    content:'';
    background: #ccc;
    height: 5px;
    width: 205px;
    display: block;
    position: absolute;
    top: 10px;
    z-index: -1;
  }

  .progress ul li:nth-child(1) .fa{
    background: #009900;
  }

  .progress ul li:nth-child(1) .fa::after{
    background: #009900;
  }

.progress ul li:nth-child(2) .fa{
    background: #009900;
  }

  .progress ul li:nth-child(2) .fa::after{
    background: #009900;
  }

  .progress ul li:nth-child(3) .fa{
    background: #009900;
  }



  .progress ul li:first-child .fa::after{
    width: 205px;
    left: 100px;
  }

 .progress ul li:last-child .fa::after{
    width: 0px;
   
  }

  .ap {
    text-align: center;
    font-size: 20px;
    margin: 80px auto;


  }

  .ap a{
    text-decoration: none;
    padding: 14px 25px;
    background-color: #cc0000;
    color: white;
    border-radius: 10%;
    box-shadow:10px 10px 10px grey;
  }

  .ap a:hover{
    background-color: #ff0000;
  }
  

</style>

</head>
<body>


  <div class="top">
    <img class="logo" src="logo .png">
    <img class="contactlogo" src="contact.png">
    <img class="certlogo" src="cert3.png">
  </div>

<div class="nav">
        <ul>
          <li><a href="profile.php"><img class="profile" src="profile2.png"></a></li>
          <li><a href="booking.php">Book Appointment</a></li>
          <li><a href="appointments.php">Your Appointments</a></li>
        </ul>
</div>

    <?php if (isset($_SESSION['uname'])): ?>
      <br> <h1 class="logout"><a href="profile.php?logout='1'">Logout</a></p> </h1>
   
    <?php endif ?>





<div class="progress">
<ul>
  
  <li> 
    <i class="fa fa-check" aria-hidden="true"></i>
    <p style="color:#009900;">Step One</p> 

  </li>
  
  <li> 
    <i class="fa fa-check" aria-hidden="true"></i>
    <p style="color:#009900;">Step Two</p>

  </li>
  
  <li> 
    <i class="fa fa-check" aria-hidden="true"></i>
    <p style="color:#009900;">Step Three</p> 

  </li>

</ul>
</div>

<h2 style=" color: #009900; text-align: center; font-size: 36px; ">Your appointment has been booked successfully!</h2>

<div class="ap">

<a href="appointments.php">Click here to view your appointment</a>

</div>


</body>
</html>