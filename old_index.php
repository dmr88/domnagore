<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beauty Bar</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    .mySlides {display: none}
img {vertical-align: middle;width: 100%; height: auto;}
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

header {
    background-color: #dd5398;
    padding: 20px;
    border-bottom: 2px solid #eaeaea;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
nav {
    text-align: center;
    margin-top: 20px;
}

nav a {
    display: inline-block;
    margin: 0 10px;
    color: #333;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    transition: color 0.3s;
}

nav a:hover {
    color: #ff69b4;
}

main {
    padding: 20px;
}

.services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
}

.service {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.service h2 {
    margin-top: 0;
}

.service p {
    margin-bottom: 10px;
}

.form {
    margin-top: 20px;
}

.form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form input[type="text"],
.form input[type="tel"],
.form input[type="datetime-local"],

.form-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff69b4;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.form-button:hover {
    background-color: #e60073;
}
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

footer p {
    margin: 0;
}
</style>
</head>
<body>

<header>
    <h1>Beauty Bar</h1>
    <nav>
        <a href="#">Услуги</a>
        <a href="#">Контакты</a>
        <a href="#">О нас</a>
        <?
          if(isset($_COOKIE['uid'])){
            echo '<a href="profile.php">Личный кабинет</a>';
          }else{
            echo '<a href="login.php">Вход</a>';
          }
        ?>

    </nav>

</header>

<div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="image1.jpg" style="width:100%">
      <div class="text">BEAUTY BAR</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="image2.jpg" style="width:100%">
      <div class="text">BEAUTY BAR</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="image3.jpg" style="width:100%">
      <div class="text">BEAUTY BAR</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<script src="app.js"></script>
<main class="container">
    <h2>Наши услуги</h2>
    <div class="services">
        <div class="service">
            <h2>Ламинирование ресниц</h2>
            <p>Описание услуги...</p>
            <p>Цена: 5000 тг</p>
        </div>
        <div class="service">
            <h2>Наращивание ресниц</h2>
            <p>Описание услуги...</p>
            <p>Цена: от 7000 тг</p>
        </div>
        <div class="service">
            <h2>Маникюр</h2>
            <p>Описание услуги...</p>
            <p>Цена: от 6000 тг</p>
        </div>
        <div class="service">
            <h2>Педикюр</h2>
            <p>Описание услуги...</p>
            <p>Цена: 5000 тг</p>
        </div>
        <div class="service">
            <h2>Окрашивание</h2>
            <p>Описание услуги...</p>
            <p>Цена: от 10 000 тг</p>
        </div>
        <div class="service">
            <h2>Стрижка</h2>
            <p>Описание услуги...</p>
            <p>Цена: от 4000 тг</p>
        </div>
    </div>
    <?
    if (isset($_COOKIE['uid'])) {
      echo '<a href="form.html" class="form-button">Записаться на услугу</a>';
    }else{
      echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
    }
    ?>

</main>
<footer>
    <p>&copy; 2024 Beauty Bar</p>
</footer>
</body>
</html>
