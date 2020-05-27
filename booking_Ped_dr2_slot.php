
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
  outline-style: none;
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
    background: #005ce6;
  }



  .progress ul li:first-child .fa::after{
    width: 205px;
    left: 100px;
  }

 .progress ul li:last-child .fa::after{
    width: 0px;
   
  }
  

.date label{
  margin: 20px;
  font-size: 20px;
  font-family: Lucida Bright;
}

.date input{
  font-size: 17px;
  text-align: center;
  width: 160px;
  padding: 8px 16px;
  font-family: Lucida Bright;

}

.time label{
  margin: 9px;
  font-size: 20px;
  font-family: Lucida Bright;
}
.time select{
      font-size: 17px;
      text-align-last: center;
      width: 197px;
      padding: 8px 16px;
      font-family: Lucida Bright;

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
    <i class="fa fa-refresh" aria-hidden="true"></i>
    <p style="color:#0047b3;">Step Three</p> 

  </li>

</ul>
</div>

<h2 style=" margin: 25px 40%; text-align: center; font-size: 38px; ">Available Slots:</h2>

<br><br>

<form style="text-align: center;" method="post">

    <div class="date">

      <label for="start">Select date:</label>
      
      <input placeholder="Choose a date" type="text" onfocus="(this.type='date')" min="2020-03-22" max="2020-03-23" name="date" required>
    
    </div>

    <div class="time">

      <br>
      <label for="start">Booking time:</label>
        
        <select name="time" required>
          
          <option class="opt" value="">Choose a time</option>
          
          <option class="opt" value="12:00 pm - 2:00 pm">12:00 pm - 2:00 pm</option>
          
          <option class="opt" value="6:30 pm - 8:00 pm">6:30 pm - 8:00 pm</option>
      
        </select>
    
    </div> 

  <br><br>
  <button class="nextb" style=" font-family: Lucida Bright; margin: 10px auto; text-align: center; font-weight: 500; color: #00264d; font-size: 20px; padding: 6px 25px;" name="slot" type="submit">Book Slot</button>
</form>

<br><br>

</body>

</html>