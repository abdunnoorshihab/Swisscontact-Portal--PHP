<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slideshow Gallery</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans m-0">

<h2 class="text-center text-2xl font-bold my-4">Slideshow Gallery</h2>

<div class="relative max-w-4xl mx-auto">
  <!-- Slide Container -->
  <div class="relative">
    <div class="mySlides hidden">
      <div class="absolute top-0 left-0 text-white text-sm p-2 bg-black bg-opacity-50 rounded">1 / 6</div>
      <img src="img/astha 1.jpg" class="w-full">
    </div>

    <div class="mySlides hidden">
      <div class="absolute top-0 left-0 text-white text-sm p-2 bg-black bg-opacity-50 rounded">2 / 6</div>
      <img src="img/astha 2.jpg" class="w-full">
    </div>

    <div class="mySlides hidden">
      <div class="absolute top-0 left-0 text-white text-sm p-2 bg-black bg-opacity-50 rounded">3 / 6</div>
      <img src="img/astha 3.jpg" class="w-full">
    </div>

    <div class="mySlides hidden">
      <div class="absolute top-0 left-0 text-white text-sm p-2 bg-black bg-opacity-50 rounded">4 / 6</div>
      <img src="img/banner2.png" class="w-full">
    </div>

    <div class="mySlides hidden">
      <div class="absolute top-0 left-0 text-white text-sm p-2 bg-black bg-opacity-50 rounded">5 / 6</div>
      <img src="img/unicef.png" class="w-full">
    </div>

    <div class="mySlides hidden">
      <div class="absolute top-0 left-0 text-white text-sm p-2 bg-black bg-opacity-50 rounded">6 / 6</div>
      <img src="img/astha 2.jpg" class="w-full">
    </div>

    <!-- Navigation Buttons -->
    <a class="prev absolute top-1/2 left-0 transform -translate-y-1/2 text-white text-2xl font-bold p-4 bg-gray-800 bg-opacity-50 hover:bg-opacity-75 cursor-pointer rounded-r-lg" onclick="plusSlides(-1)">❮</a>
    <a class="next absolute top-1/2 right-0 transform -translate-y-1/2 text-white text-2xl font-bold p-4 bg-gray-800 bg-opacity-50 hover:bg-opacity-75 cursor-pointer rounded-l-lg" onclick="plusSlides(1)">❯</a>
  </div>

  <!-- Caption Container -->
  <div class="text-center bg-gray-800 text-white py-2">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail Row -->
  <div class="flex justify-center mt-4">
    <div class="w-1/6 px-1">
      <img class="demo cursor w-full opacity-60 hover:opacity-100" src="img/astha 1.jpg" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="w-1/6 px-1">
      <img class="demo cursor w-full opacity-60 hover:opacity-100" src="img/astha 2.jpg" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="w-1/6 px-1">
      <img class="demo cursor w-full opacity-60 hover:opacity-100" src="img/astha 3.jpg" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="w-1/6 px-1">
      <img class="demo cursor w-full opacity-60 hover:opacity-100" src="img/banner2.png" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="w-1/6 px-1">
      <img class="demo cursor w-full opacity-60 hover:opacity-100" src="img/unicef.png" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="w-1/6 px-1">
      <img class="demo cursor w-full opacity-60 hover:opacity-100" src="img/astha 2.jpg" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.add("hidden");
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].classList.remove("opacity-100");
    dots[i].classList.add("opacity-60");
  }
  slides[slideIndex-1].classList.remove("hidden");
  dots[slideIndex-1].classList.remove("opacity-60");
  dots[slideIndex-1].classList.add("opacity-100");
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
