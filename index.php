<html>
<head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GAG_9_home page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="about_me.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">ABOUT_ME</a>
    <a href="https://www.cointree.com/learn/the-three-types-of-cryptocurrency-analysis/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">FUNDAMENTALS</a>
    <?php
      session_start();
       if (isset($_SESSION['uid'])) {
         echo '<a href="pay.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">PAYMENT</a>';
         echo '<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LOGOUT</a>';
         echo '<a href="change password.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change Password</a>';

      }
      else{
        echo '<a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">LOGIN</a>';

        }
     ?>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">GAG_9</h1>
  <p class="w3-xlarge">Cryptocurrency Analysis and Predictor</p>
  <?php
      
       if (isset($_SESSION['uid'])) {
         echo '<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"> <a href="analysis.php" >Get Started</a></button>';
       }
       else{
        echo '<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"> <a href="signup.php" >Get Started</a></button>';
       }
        ?>
</button><br>

<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"> <a href="comming soon/index.html" >comming soon</a></button>';

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>CRYPTOCURRENCY</h1>
      <h5 class="w3-padding-32">Cryptocurrency is a digital payment system that doesn't rely on banks to verify transactions. It’s a peer-to-peer system that can enable anyone anywhere to send and receive payments. Instead of being physical money carried around and exchanged in the real world, cryptocurrency payments exist purely as digital entries to an online database describing specific transactions. When you transfer cryptocurrency funds, the transactions are recorded in a public ledger. Cryptocurrency is stored in digital wallets.

Cryptocurrency received its name because it uses encryption to verify transactions. This means advanced coding is involved in storing and transmitting cryptocurrency data between wallets and to public ledgers. The aim of encryption is to provide security and safety.

The first cryptocurrency was Bitcoin, which was founded in 2009 and remains the best known today. Much of the interest in cryptocurrencies is to trade for profit, with speculators at times driving prices skyward.</h5>


    </div>

    <div class="w3-third w3-center">
      <br><br>
      <i class=""> <img src="img/crypto.jpg"  padding: 3px 3px 20px 3px></i>
    </div>
  </div>
</div>





<!-- Second Grid -->

<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-third w3-center">
      <i class=""> <img src="img/crypto1.jpg"  padding: 3px 3px 20px 3px></i>
    </div>
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>How to buy cryptocurrency</h1>
      <h5 class="w3-padding-32">Traditional brokers. These are online brokers who offer ways to buy and sell cryptocurrency, as well as other financial assets like stocks, bonds, and ETFs. These platforms tend to offer lower trading costs but fewer crypto features.
Cryptocurrency exchanges. There are many cryptocurrency exchanges to choose from, each offering different cryptocurrencies, wallet storage, interest-bearing account options, and more. Many exchanges charge asset-based fees.</h5>


    </div>

    
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
  <a href="https://www.facebook.com" class="fa fa-facebook-official w3-hover-opacity"></a>
  
  <a href="https://www.instagram.com/gagan_196/" class="fa fa-instagram w3-hover-opacity"></a>

    <a href="https://www.snapchat.com" class="fa fa-snapchat w3-hover-opacity"></a>

 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>



</body>

</html>