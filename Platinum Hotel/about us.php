<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Platinum Hotel - About us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <<script src="https://kit.fontawesome.com/6b9e046e0f.js" crossorigin="anonymous"></script>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<style>
    *{
      
      font-family: 'Poppins', sans-serif;
}

.h-font {
    font-family: 'Merienda', cursive;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.custom-btn {
    background-color: #febe00;
}

.custom-btn:hover {
    background-color: #fca510;
}

.availability-form {
    margin-top: 5px;
    z-index: 2;
    position: relative;
}

.h-line {
  width: 150px;
  margin: 0 auto;
  height: 1.7px;
}

.pop:hover {
  border-top-color: aqua !important;
  transform: scale(1.03);
  transition: all 0.3s;
}



</style>
    </head>


<body class="bg-light">

<?php require('ht/header.php') ?>

<!--     Main Code   -->


<div class="my-5 px-4">
  <h2 class="fa-bold h-font text-center">About Us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ipsam necessitatibus sed quo modi.
     Accusantium explicabo<br> voluptatum dignissimos iusto, quos maxime sapiente deserunt consequatur enim. 
     Corporis architecto iusto provident inventore.

  </p>
</div>



<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero fuga quod error, voluptatibus, praesentium similique, animi libero et incidunt ullam rem architecto aliquid esse magnam quibusdam.

      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about us.jpg" class="w-100">
    </div>
  </div>
</div>





<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="text-center">
        <i class="fa-solid fa-hotel fa-6x" style="color: #9a7b4f"></i>
        <h4 class="mt-3">100+ Rooms</h4>
        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, minima. Nesciunt, eveniet! Inventore animi amet vitae?</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="text-center">
        <i class="fa-sharp fa-solid fa-users fa-6x"></i>
        <h4 class="mt-3">450+ Customers</h4>
        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, minima. Nesciunt, eveniet! Inventore animi amet vitae?</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="text-center">
        <i class="fa-sharp fa-solid fa-star fa-6x" style="color: #ffef00"></i>
        <h4 class="mt-3">3000+ Reviews</h4>
        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, minima. Nesciunt, eveniet! Inventore animi amet vitae?</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="text-center">
        <i class="fa-solid fa-user-tie fa-6x"></i>
        <h4 class="mt-3">190+ Staffs</h4>
        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, minima. Nesciunt, eveniet! Inventore animi amet vitae?</h5>
      </div>
    </div>
  </div>
</div>



<h3 class="my-5 fa-bold h-font text-center">Management Team</h3>
<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/random people.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/random people.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/random people.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/random people.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images/random people.jpg" class="w-100">
        <h5 class="mt-2">Random name</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<?php require('ht/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

      <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>
</html>