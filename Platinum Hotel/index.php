<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Platinum Hotel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <<script src="https://kit.fontawesome.com/6b9e046e0f.js" crossorigin="anonymous"></script>
        
        <script>
            var swiper = new Swiper(".swiper-bundle", {
              spaceBetween: 1,
              effect: "fade",
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
            });
          </script>
        
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

</style>
    </head>


<body class="bg-light">

  <?php require('ht/header.php') ?>
<!--Carosel-->
  
  <div class="container-fluid">
    <div class="swiper swiper-bundle">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/capture.jpg" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/capture2.jpg" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/capture3.jpg" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/capture4.jpg" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/capture5.jpg" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/capture6.jpg" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/capture7.jpg" class="w-100 d-block">
          </div>
        </div>
      </div> 
  </div>


<!--Check avability-->


<div class="container availability-form">
    <div class="row"">
        <div class="col-lg-14 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Avability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none">  
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none">  
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <button type="submit" class="btn text-white shadow-none custom-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<!--        Our rooms          -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/room1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Room1</h5>
          <h6 class="mb-4">₹1500 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">AC room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Bathroom</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Balcony</span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Wi-Fi</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Parking</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Pool</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Room and Water Heater</span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">More Details</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/room1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Room1</h5>
          <h6 class="mb-4">₹1500 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">AC room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Bathroom</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Balcony</span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Wi-Fi</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Parking</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Pool</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Room and Water Heater</span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">More Details</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/room1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Room1</h5>
          <h6 class="mb-4">₹1500 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">AC room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 room</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Bathroom</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">1 Balcony</span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-7x">Wi-Fi</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Parking</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Pool</span>
            <span class="badge rounded-pill bg-warning text-dark mb-3 text-wrap btn-lg">Room and Water Heater</span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark badge round-pill bg-danger text-light mb-3 text-wrap btn-lg">More Details</a>
        </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-lg btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
    </div>
  </div>
</div>

    <!--        Our Facilities          -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

<div class="container">
  <div class="row justify-content-lg-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center rounded my-4">
      <i class="fa-solid fa-wifi fa-6x" style="color: #32CD32"></i>
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center rounded my-4">
      <i class="fa-sharp fa-solid fa-car fa-6x" style="color: #32CD32"></i>
      <h5 class="mt-3">Parking</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center rounded my-4">
      <i class="fa-sharp fa-solid fa-person-swimming fa-6x" style="color: #32CD32"></i>
      <h5 class="mt-3">Swimming Pool</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center rounded my-4">
      <i class="fa-sharp fa-solid fa-volleyball fa-6x" style="color: #32CD32"></i>
      <h5 class="mt-3">Beach</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center rounded my-4">
      <i class="fa-sharp fa-solid fa-spa fa-6x" style="color: #32CD32"></i>
      <h5 class="mt-3">Beauty Spa</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center rounded my-4">
      <i class="fa-solid fa-user-doctor fa-6x" style="color: #32CD32"></i>
      <h5 class="mt-3">Doctor on call</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-lg btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
    </div>
  </div>
</div>




<!--       Testimonials-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

<div class="container mb-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-white p-4 mb-5">
        <div class="profile d-flex align-items-center p-4">
          <img src="#" width="30">
          <h6 class="m-0 ms-2">Random Userl</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat nostrum consequatur fugiat facilis ipsam officiis, eveniet delectus provident, illo maxime exercitationem dicta mollitia nisi nam quam ex corporis error?
        </p>
        <div class="rating">
          <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
            <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        </div>
    </div>
    <div class="swiper-slide bg-white p-4">
      <div class="profile d-flex align-items-center p-4">
        <img src="#" width="30">
        <h6 class="m-0 ms-2">Random Userl</h6>
      </div>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat nostrum consequatur fugiat facilis ipsam officiis, eveniet delectus provident, illo maxime exercitationem dicta mollitia nisi nam quam ex corporis error?
      </p>
      <div class="rating">
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
      </div>
  </div>
  <div class="swiper-slide bg-white p-4">
    <div class="profile d-flex align-items-center p-4">
      <img src="#" width="30">
      <h6 class="m-0 ms-2">Random Userl</h6>
    </div>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat nostrum consequatur fugiat facilis ipsam officiis, eveniet delectus provident, illo maxime exercitationem dicta mollitia nisi nam quam ex corporis error?
    </p>
    <div class="rating">
      <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
        <i class="fa-sharp fa-solid fa-star" style="color: #32CD32"></i>
    </div>
</div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-lg btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
</div>



<!--       Reach us-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29616.224868506837!2d83.3950763!3d21.89499335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a27253cf3eb615d%3A0x29629b8b0a92e6e!2sRaigarh%2C%20Chhattisgarh%20496001!5e0!3m2!1sen!2sin!4v1681580305579!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +912345678901" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fa-solid fa-phone" style="color: rgb(233, 104, 19)"></i> +912345678901</a>
        <br>
        <a href="tel: +912345678901" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fa-solid fa-phone" style="color: rgb(233, 104, 19)"></i> +910987654321</a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-2"><span class="badge bg-light text-dark fs-6 p-2"><i class="fa-brands fa-twitter me-1" style="color: rgb(0, 153, 255)"></i> Twitter</span></a>
        <br>
        <a href="#" class="d-inline-block mb-2"><span class="badge bg-light text-dark fs-6 p-2"><i class="fa-brands fa-facebook me-1" style="color: rgb(9, 13, 245)"></i> Facebook</span></a>
        <br>
        <a href="#" class="d-inline-block mb-2"><span class="badge bg-light text-dark fs-6 p-2"><i class="fa-brands fa-instagram me-1" style="color: rgb(245, 9, 202)"></i> Instagram</span></a>
        <br>
      </div>
    </div>
  </div>
</div>




<?php require('ht/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
  <script>
      var swiper = new Swiper(".swiper-bundle", {
        spaceBetween: 0,
        effect: "swipe",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
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