<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="h-font">HB Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php include "inc/links.php"?>
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 9;
            position: relative;
        }

        @media screen and (max-width: 575px){
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <?php include "inc/header.php"?>
    <!--Carousel-->
    <div class="container-fluid px-lg-3 mt-3">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!--Check Availablity Form-->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-In:</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-Out:</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adults:</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="3">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children:</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Our Rooms-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-2">Features:</h6>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Double Bed</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Jacuzzi</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">A.C.</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-2">Facilities:</h6>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">On-hand Servicing</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free WiFi</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free-Buffet</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free-Transports </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-2">Ratings:</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-2">Features:</h6>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Double Bed</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Jacuzzi</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">A.C.</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-2">Facilities:</h6>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">On-hand Servicing</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free WiFi</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free-Buffet</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free-Transports </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-2">Ratings:</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-2">Features:</h6>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Double Bed</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Jacuzzi</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">A.C.</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Room Heater</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-2">Facilities:</h6>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">On-hand Servicing</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free WiFi</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free-Buffet</span>
                            <span class="badge rouned-pill bg-light text-dark text-wrap lh-base">Free-Transports </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-2">Ratings:</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!--Our Facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md- text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>

            <div class="col-lg-2 col-md- text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>

            <div class="col-lg-2 col-md- text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>

            <div class="col-lg-2 col-md- text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>

            <div class="col-lg-2 col-md- text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">WiFi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!--Testimonials-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-3">Random User 1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem molestiae asperiores magni cumque ab, aperiam animi eaque iste cum quisquam.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded fw-bold shadow-none"> Know More >>></a>
        </div>
    </div>

    <!--Reach Us-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.0344739699!2d73.86296739999999!3d18.52461645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1675848973499!5m2!1sen!2sin"  height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5 class="mb-2">Call-Us:</h5>
                    <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +91-7778889991</a>
                    <br>
                    <a href="tel: +917778889991" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +91-0931-23456</a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5 class="mb-3">Follow Us On:</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>

                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                    <br>

                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-linkedin me-1"></i> LinkedIn
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include "inc/footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "4",
        loop: true,
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

        breakpoints:{
            320:{
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
            }
        }
        });
    </script>
</body>

</html>