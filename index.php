<?php include './php/bro.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/images/santiksu.png" type="image/x-icon">
<link rel="apple-touch-icon" href="/images/Meow.webp">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#23261E">
     <meta name="description" content="<?php echo $bio ?>">
     <meta name="keywords" content="santik.su, santiksu, santik, Alexander Timush, santikoff, сантиксу, ритп, rytp">
     <meta property="og:title" content="santiksu main page">
    <meta property="og:description" content="<?php echo $bio ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 500,
  'GRAD' 0,
  'opsz' 10
}
</style>
    <link rel="stylesheet" href="/css/home.css">
    <title>santiksu</title>
</head>
<body>
   <div id="splashscreen">
        <lottie-player src="./json/spinner.json" background="transparent"  speed="1"  style="width: 50px; height: 50px;" loop autoplay></lottie-player>
    </div>
   <header>
  <h1>santiksu</h1>
    <button class="for_ripple btnlang"><?php echo $lang ?></button>
</header>
  <div class="content">
 <div class="container-me">
   <div id="border-avatar">
        <a><img id="avatar" src="/images/santiksu.png"></a>
   </div>
   <div id="text">
   <h1><?php echo $name ?></h1>
   <p><?php echo $age ?></p>
   </div>
  </div>
<div class="container">
       <code>
           <code class="green">[santiksu@localhost ~]$</code> <code>cat readme-en.txt</code> <br><br>
       Welcome. A few lines about myself: i'm a lazy guy, an aspiring web application and website developer. At the moment everything is developed on a mobile device, using Acode and KSWeb. I know Vanilla JS, I am gradually learning PHP and databases (MYSQL, soon I will learn MariaDB). I dabble in CSS (unfortunately, the site layout is made only for mobile devices). I sit and study at home on my own, so I always have time for all sorts of fun: memes, videos and my Telegram channel.
Thanks for reading this bio, I recommend following the links to learn more 
  <span class="blinking-cursor"></span>
</code> <br>
  </div>
    <div class="container">
    <h1><?php echo $links ?></h1>
    <a><button class="for_ripple interactive-button"></button></a>
       <button class="link for_ripple">
  <img src="./icons/VK.svg" alt="Social Icon" style="display: block; width: 32px; height: 32px; object-fit: cover; object-position: center;">
</button>
  <button class="link for_ripple">
  <img src="./icons/mastodon.svg" alt="Social Icon" style="display: block; width: 32px; height: 32px; object-fit: cover; object-position: center;">
</button>
       <button class="for_ripple interactive-button">Real</button>
  </div>
  <div class="container"> 
  <h1>Sections<h1>
 <a href="./donate"><button class="for_ripple interactive-button">Donate</button></a>
</div>
  </div>
     <div class="container">
       <h1><?php echo $lastfm ?></h1>
       <div class="nowplayingcard">
<div class="nowplayingcontainer-inner my-custom-container">
	  		<img id="trackart" id="link" src="#">
		<div class="trackInfo" id="text">
			<a style="color: white;" id="tracktitle"></a>
			<a id="trackartist"></a>
		</div>
			</div>
	</div>
	<a href="https://www.last.fm/user/s4nt1k" id="link"><img src="./icons/lastfm.svg" alt="last.fm profile"></a>
</div>
</div>
  </div>
  </div><div class="container">
    <h1><?php echo $technical ?></h1>
<p><?php echo $timeloaded ?> <?php echo round($load_time, 4); ?> <?php echo $sec ?>
</p>
  <p><?php echo $counter ?> <?php echo $count ?></p>
 <p> <?php
echo $php . phpversion();

echo phpversion('tidy');
?> </p>
<p><?php echo $domain ?><?php
print $_SERVER["SERVER_NAME"]; ?>
<br>
<script>

</script>
</p>
  </div>

 </div>
  <div class="container">
    <h1><?php echo $newyear ?></h1>
    <p id="countdown"></p>
    <h1><?php echo $bday ?></h1>
        <p id="bday"></p>
  </div>
  <div class="container">
    <button class="for_ripple btn">Button</button>
    <button onclick="hello()" class="for_ripple btn2">Button(no shadow)</button>
    <button onclick="hello()" class="for_ripple btn3">Button(outlined)</button>
    <button class="for_ripple link">Button(text)</button>
  </div>
  <footer>
    <div class="footer-content">
      <p><?php echo $footer ?></p>


    </div>
    </footer>
</body>
 <script>document.addEventListener("DOMContentLoaded", function() {
            var splashscreen = document.getElementById("splashscreen");
            setTimeout(function() {
                splashscreen.style.display = "none";
                document.body.style.overflow = "auto"; 
        });
    </script>
    <script>
      

    </script>
    <script src="js/lottie-player.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/lastfm.js"></script>
<script src="./js/newyear.js"></script>
<script src="./js/bday.js"></script>
<script src="./js/app.js"></script>
<script src="./js/mdbutton2.js"></script>
<script src="./js/email.js"></script>
</html>