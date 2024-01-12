<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   
   $('#content').load("index.html");

});
</script>
</head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

<style>
body {font-family: "Raleway", Arial, sans-serif}
.w3-row img {margin-bottom: -8px}
img:hover{
  transform: scale(1.2);
  box-shadow: 0px 0px 20px #000;
  transition: all .5s ease;
}
* {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #FFFFFF;
    margin: 0;
}
.navtop {
    background-color: #3f69a8;
    height: 60px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #ecf0f6;
    font-weight: normal;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c5d2e5;
    font-weight: bold;
}
.navtop div a i {
    padding: 2px 8px 0 0;
}
.navtop div a:hover {
    color: #ecf0f6;
}
.content {
    width: 1000px;
    margin: 0 auto;
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #666666;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

</style>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

  <!-- Header -->
  <header class="w3-container w3-xlarge w3-padding-24">
    <a href="fundamentals.php" class="w3-left w3-button w3-white">Fundamentals </a>
    <a href="about_me.php" class="w3-right w3-button w3-white">About</a>
  </header>

  <!-- Photo Grid -->
  <div class="w3-row">
    <div class="w3-half" >
      <a href="https://academy.binance.com/en/articles/a-guide-to-cryptocurrency-fundamental-analysis"><img src="img/streetart.jpg" style="width:100%" alt="alternative text" title="Fundamental anlysis " ></a>
      <a href="https://ieeexplore.ieee.org/document/7906988"><img src="img/streetart2.jpg" style="width:100%" alt="alternative text" title="Research and Article "></a>
    
        <iframe width="750" height="575" src="https://www.youtube.com/embed/8DNNITaiTNs?&autoplay=1&mute=1" title="Coindcx tutorial for beginners 2022 | How to use Coindcx app | vishal techzone" frameborder="0" allow="accelerometer; &autoplay =1 &mute=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <div class="w3-half">
    <a href="https://www.moneycontrol.com/msite/wazirx-cryptocontrol-articles/bitcoin-technical-analysis-for-beginners/#:~:text=Technical%20analysis%20uses%20the%20concept,such%20as%20Bitcoin%20(BTC)."><img src="img/streetart3.jpg" style="width:100%" alt="alternative text" title="Technical anlysis "></a>
      <a href="https://coindcx.com/"><img src="img/streetart4.jpg" style="width:100%" alt="alternative text" title="Invest now"></a>
    </div>
  </div>
  
<!-- End Page Content -->   
</div>

<!-- Footer / About Section 
<footer class="w3-light-grey w3-padding-64 w3-center" id="about">
  <button><a href="about_me.php"</a>about</button>
  <img src="/w3images/boy.jpg" class="w3-image w3-padding-32" width="300" height="300">
  <form style="margin:auto;width:60%" action="/action_page.php" target="_blank">
    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <p class="w3-large w3-text-pink">Do not hesitate to contact me!</p>
    <div class="w3-section">
      <label><b>Name</b></label>
      <input class="w3-input w3-border" type="text" required name="Name">
    </div>
    <div class="w3-section">
      <label><b>Email</b></label>
      <input class="w3-input w3-border" type="text" required name="Email">
    </div>
    <div class="w3-section">
      <label><b>Message</b></label>
      <input class="w3-input w3-border" required name="Message">
    </div>
    <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
  </form>
  <br>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer> -->
<div id="content"></div>
</body>
</html>
