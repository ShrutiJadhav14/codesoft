<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{background-color:chocolate;}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
{
h1{
color:white;}
}
button{

width="100px";
height="100px"
}

</style>
<script language="javascript" type="text/javascript">
function openWindow()
{
	var new_win= window.open("http://localhost/microproject%20sem%205%20css/booking.php","","width=800,height=1000");
}

	</script>
</head>
<body>

<form method="post" action="booking.php">    
<h1>Welcome to Paradise</h1>
<p>Hotels Rooms and Price</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 /9</div>
  <img src="hotel11.jpg" style="width:100%">
  <div class="text"><h3>Paradise</h3></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 9</div>
  <img src="room1.jpg" style="width:100%">
  <div class="text"><h3>Room 1 : 800/- perhour</h3></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 9</div>
  <img src="room2.jpg" style="width:100%">
  <div class="text"><h3>Room 2 : 1000/- perhour</h3></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 9</div>
  <img src="room3.jpg" style="width:100%">
  <div class="text"><h3>Room 3 : 1200/- perhour</h3></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 9</div>
  <img src="room4.jpg" style="width:100%">
  <div class="text"><h3>Room 4 : 700/- perhour</h3></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 9</div>
  <img src="room 5.jpg" style="width:100%">
  <div class="text"><h3>Room 5 : 500/- perhour</h3></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 9</div>
  <img src="room 6.jpg" style="width:100%">
  <div class="text"><h3>Room 6 : 900/- perhour</h3></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 9</div>
  <img src="room 7.jpg" style="width:100%">
  <div class="text"><h3>Room 7 : 1200/- perhour</h3></div>
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 9</div>
  <img src="room 8.jpg" style="width:100%">
  <div class="text"><h3>Room 8 : 1400/- perhour</h3></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 7000); // Change image every 7 seconds
}

</script>
<center>
<input type="button" value="book here!!" name="book" id="book"onclick="openWindow()">

</center>
</form>
 
</body>
</html> 
