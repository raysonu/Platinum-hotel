<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Platinum Hotel - Rooms</title>
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





<!--       Main Code      -->

<div class="my-5 px-4">
  <h2 class=" h-font text-center">Our Rooms</h2>
  <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">Filters</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch me-2" id="navbarNav">
        <div class="border bg-light p-3 rounded mb-6">
            <h5 class="mb-3" style="font-size: 18px;">Check Avability</h5>
            <label class="form-label">Check-in</label>
            <input type="date" class="form-control shadow-none mb-3"> 
            <label class="form-label">Check-out</label>
            <input type="date" class="form-control shadow-none"> 
        </div>
        <div class="border bg-light p-3 rounded mb-6">
            <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
            <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f1">Facility One</label>
            </div>
            <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f2">Facility two</label>
            </div>
            <div class="mb-2">
            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
            <label class="form-check-label" for="f3">Facility three</label>
            </div>
        </div>
        <div class="border bg-light p-3 rounded mb-6">
            <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
            <div class="d-flex">
            <div class="me-3">
            <label class="form-label">Adults</label>
            <input type="number" class="form-control shadow-none">
            </div>
            <div>
            <label class="form-label">Children</label>
            <input type="number" class="form-control shadow-none">
            </div>
            </div>
        </div>
    </div>
  </div>
</nav>
        </div>
        <div class="col-lg-9 col-md-12 px-4">
<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5">
      <img src="images/room1.jpg" class="img-fluid rounded" alt="...">
    </div>
    <div class="col-md-5 px-lg-3">
      <h5 class="mb-3">Rooms name</h5>
      <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">AC room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Bathroom</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Balcony</span>
          </div>
          <div class="facilities mb-3">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Wi-Fi</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Parking</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Pool</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Room and Water Heater</span>
          </div>
          <div class="guests mb-3">
            <h6 class="mb-1">Guests</h6>
            <span class="btn-lg badge rounded-pill bg-warning text-dark text-wrap">5 Adults</span>
            <span class="badge rounded-pill bg-warning text-dark text-wrap">4 children</span>
          </div>
    </div>
    <div class="col-md-2 text-center">
    <h6 class="mb-4">₹1500 per night</h6>
    <a href="#" class="btn btn-sm w-100 badge round-pill bg-danger text-light mb-3 text-wrap btn-lg mb-2">Book Now</a>
    <a href="#" class="btn btn-sm w-100 btn-outline-dark badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">More Details</a>
    </div>
  </div>
</div>
</div>
    </div>
</div>













<?php require('ht/footer.php') ?>
    
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


</body>
</html>