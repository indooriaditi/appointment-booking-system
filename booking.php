

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
    left: 0;
    top: 10px;
    z-index: -1;
  }

  .progress ul li:nth-child(1) .fa{
    background: #005ce6;
  }



  

  .progress ul li:first-child .fa::after{
    width: 105px;
    left: 100px;
  }

 .progress ul li:last-child .fa::after{
    width: 105px;
   
  }

  /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
  margin: 50px auto 20px;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: white;
  color: black;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 18px;
  right: 7px;
  width: 0;
  height: 0;
  border: 6px solid black;
  border-color: black transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent black transparent;
  top: 10px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black;
  text-shadow: 2px 2px 5px #d9d9d9;
  font-size: 20px;
  padding: 8px 16px;
  border: 1px solid black;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
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
    <i class="fa fa-refresh" aria-hidden="true"></i>
    <p style="color:#0047b3;">Step One</p> 

  </li>
  
  <li> 
    <i class="fa fa-times"></i>
    <p style="color:#ccc;">Step Two</p> 

  </li>
  
  <li> 
    <i class="fa fa-times"></i>
    <p style="color:#ccc;">Step Three</p> 

  </li>

</ul>
</div>

<h2 style=" margin: 25px 40%; text-align: center; font-size: 38px; ">Top Specialities</h2>


<form style="text-align: center;" method="post">



    <div class="custom-select" style="width:200px;">
  <select name="spl" required>
    <option value="">Select speciality:</option>
    <option value="ENT">ENT</option>
    <option value="Pediatrician">Pediatrician</option>

  </select>
</div> 


  <button class="nextb" style=" font-family: Lucida Bright; margin: 10px auto; text-align: center; font-weight: 500; color: #00264d; font-size: 20px; padding: 6px 25px;" name="next" type="submit">Next</button>
</form>


<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>
</html>