<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2{font-family: "Raleway", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg, .bgimg2 {
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
img:hover{
  transform: scale(1.2);
  box-shadow: 0px 0px 20px #000;
  transition: all .5s ease;
}
.bgimg {background-image: url("img/admin.jpg")}
.bgimg2 {background-image: url("img/admin1.jpg")}
</style>
</head>
<body>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo"> WELCOME ADMIN</h1>
    <h2></h2>
    <h2><b>21-02-2023</b></h2>
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
    <a href="#us" style="width:25%" class="w3-bar-item w3-button">POWER BI</a>
    <a href="#wedding" style="width:25%" class="w3-bar-item w3-button">PAYMENT</a>
    <a href="#rsvp" style="width:25%" class="w3-bar-item w3-button w3-hover-black">LOGOUT</a>
  </div>
</div>

<!-- About / POWER BI -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min" id="us">
  <div class="w3-content">
    <h1 class="w3-center w3-text-grey"><b>POWER BI</b></h1>
   <a href="https://app.powerbi.com/home"> <img class="w3-round w3-grayscale-min" src="img/powerbi.jpg" style="width:100%;margin:32px 0"></a>
    <p>Power Bi login credentials<br>
    Username:GAGAN.PATLE003@nmims.in<br>
    Password:Gapu@1924
    </p><br>
    <p class="w3-center"><a href="#wedding" class="w3-button w3-black w3-round w3-padding-large w3-large">MORE DETAILS</a></p>
  </div>
</div>

<!-- Background photo -->
<div class="w3-display-container bgimg2">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">THE BIG DATA</h1><br>
    <h2></h2>
  </div>
</div>

<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="wedding">
  <div class="w3-content">
    <h1 class="w3-text-grey"><b>PAYMENT</b></h1>
    <a href="report.php"><img class="w3-round-large w3-grayscale-min" src="img/adminp.jpg" style="width:100%;margin:64px 0"></a>
    <div class="w3-row">
      <div class="w3-half">
      
      </div>
      <div class="w3-half">
        
      </div>
    </div>
  </div>
</div>

<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>DATA IS FUTURE</h1>
  <p class="w3-large"></p>
  <p class="w3-xlarge">
   <a href="logout.php" <button ='block'" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding:8px 60px">LOGOUT</button>
</a>  
</p>
</div>



</body>
</html>
