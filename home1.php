<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="styles/main.css" rel="stylesheet" />
	<style>

body{
					background-image: url("bg4.jpg");
  					background-repeat: no-repeat;
 					background-position: center;
 					margin: 0px;
  					padding: 0px;
  					height: 100%; 
  					width: 100%;
  					background-attachment: fixed;
    				background-size: cover;
	}

	

#i1, #i2, #i3, #i4, #i5{ display: none;}

.container{
		margin: 0 auto;
		top: 60%;
		position: relative;
		height: 450px;
		width: 1349px;
		overflow: hidden;
	  	user-select: none;
	  	background-color: #1c1c1c;
	}

	.container .slide_img{
		position: absolute;
		width: 100%;;
		height: 100%;
	}
	.container .slide_img img{
		width: inherit;
		height: inherit;
	}

	 .prev, .next{
		width: 7%;
		height: inherit;
		position: absolute;
		top:0; 
		background-color: rgba(88, 88, 88,.2);
		color:rgba(244, 244, 244,.9);
		z-index: 99;
		transition: .45s;
		cursor: pointer;
		text-align: center;
	}

	.next{right:0;}
	.prev{left:0;}

	label span{
		position: absolute;
		font-size: 100pt;
		top: 50%;
	 	transform: translateY(-50%);
	}

	.prev:hover, .next:hover{
		transition: .3s;
		background-color: rgba(88, 88, 89,.8);
		color: #ffffff; 
	}

.container #nav_slide{
	width: 100%;
	bottom: 12%;
	height: 11px;
	position: absolute;
	text-align: center;
	z-index: 99;
	cursor: default;
}

#nav_slide .dots{
	top: -5px;
	width: 18px;
	height: 18px;
	margin: 0 4px;
	position: relative;
	border-radius: 100%;
	display: inline-block;
	background-color: rgba(0, 0, 0, 0.6);
	transition: .4s;
}

#nav_slide .dots:hover {
	cursor: pointer;
	background-color: rgba(255, 255, 255, 0.9);
	transition: .25s
}

.slide_img{z-index: -1;}

	#i1:checked ~ #one  ,
	#i2:checked ~ #two  ,
	#i3:checked ~ #three,
	#i4:checked ~ #four ,
	#i5:checked ~ #five 
	{z-index: 9; animation: scroll 1s ease-in-out;}

	#i1:checked  ~  #nav_slide #dot1,
	#i2:checked  ~  #nav_slide #dot2,
	#i3:checked  ~  #nav_slide #dot3,
	#i4:checked  ~  #nav_slide #dot4,
	#i5:checked  ~  #nav_slide #dot5
	{ background-color: rgba(255,255,255,.9);}


	
	label span { font-size: 50pt; }
	
	.prev, .next{
		width: 7%;
	}	
	#nav_slide .dots{
		width: 12px;
		height: 12px;
	}

	@keyframes scroll{
  0%{ opacity:.4;}
  100%{opacity:1;}
} 

	</style>
</head>
<body>

	<h1 >
		<a href="home1.php"><img class="logo" src="logo .png"></a>
		<a href="contact.php"><img class="contactlogo" src="contact.png"></a>
		<img class="certlogo" src="cert3.png">


	</h1>

	<div class="nav1">
	    	<ul>
	    		<li><a href="home1.php"><img class="home" src="home.png"></a></li>
	    		<li><a href="about.php">About Us</a></li>
	    		<li><a href="login.php">Book Appointment</a></li>
	    		<li><a href="contact.php">Contact Us</a></li>
	    		<a href="login.php"><button class="login">Login</button></a>
	    	</ul>
 	</div>

	<div class="container">
	
	<input type="radio" id="i1" name="images" checked />
	<input type="radio" id="i2" name="images" />
	<input type="radio" id="i3" name="images" />
	<input type="radio" id="i4" name="images" />
	<input type="radio" id="i5" name="images" />	
	
	<div class="slide_img" id="one">			
			
			<img height="450" width="1349" src="ss1.png">
			
				<label class="prev" for="i5"><span>&#x2039;</span></label>
				<label class="next" for="i2"><span>&#x203a;</span></label>	
		
	</div>
	
	<div class="slide_img" id="two">
		
			<img height="450" width="1349" src="ss2.jpg " >
			
				<label class="prev" for="i1"><span>&#x2039;</span></label>
				<label class="next" for="i3"><span>&#x203a;</span></label>
		
	</div>
			
	<div class="slide_img" id="three">
			<img height="450" width="1349" src="ss3.jpg">	
			
				<label class="prev" for="i2"><span>&#x2039;</span></label>
				<label class="next" for="i4"><span>&#x203a;</span></label>
	</div>

	<div class="slide_img" id="four">
			<img height="450" width="1349" src="ss4.jpg">	
			
				<label class="prev" for="i3"><span>&#x2039;</span></label>
				<label class="next" for="i5"><span>&#x203a;</span></label>
	</div>

	<div class="slide_img" id="five">
			<img height="450" width="1349" src="ss5.jpg">	
			
				<label class="prev" for="i4"><span>&#x2039;</span></label>
				<label class="next" for="i1"><span>&#x203a;</span></label>

	</div>

	<div id="nav_slide">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		<label for="i4" class="dots" id="dot4"></label>
		<label for="i5" class="dots" id="dot5"></label>
	</div>
		
</div>

<script>
  
onload  = start;

function start(){   
var i = 1;
function Move(){    
    i = (i%5)+1; // 5 is the Number of image in slider
    document.getElementById('i'+i).checked = true;
}
setInterval(Move,3000); //change img in 3 sec
}

</script>

</body>
</html>