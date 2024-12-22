<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ARGANA HOTEL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php require ('inc/link.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <style>
    .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen (max-width: 575px) {
        .availability-form {
            margin-top: -0px;
            padding: 0 35px;
        }
    }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>
    <div class="container-fluid pc-lg-4 mt-4">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/lu/IMG1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/lu/IMG2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/lu/IMG3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/lu/IMG4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/lu/IMG5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/lu/IMG6.png" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

    <!--- check avaibility form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">
                    Check Booking Availability
                </h5>
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
                            <select class="form-select" shadow-none>
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select" shadow-none>
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- our Rooms-->

    <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:  auto;">
                    <img src="images/kamar/dlx4.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>DELUXE ROOM</h5>
                        <h6 class="mb-4">Rp.600.00 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Sofa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Breakfast
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                AC
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="mbtn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:  auto;">
                    <img src="images/kamar/st.5.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>SUITE ROOM</h5>
                        <h6 class="mb-4">Rp.800.00 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Sofa
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Breakfast
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Balcony
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="mbtn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:  auto;">
                    <img src="images/kamar/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>SINGLE ROOM</h5>
                        <h6 class="mb-4">Rp.350.000 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Breakfast
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                AC
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="mbtn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:  auto;">
                    <img src="images/kamar/3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>TWIN ROOM</h5>
                        <h6 class="mb-4">Rp.450.00 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Breakfast
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Facilities </h6>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                AC
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="mbtn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
                    More Rooms
                </a>
            </div>
        </div>
    </div>

    <!-- our FASILITIES-->

    <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/fasilitas/wifi.svg" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/fasilitas/wifi.svg" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/fasilitas/wifi.svg" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/fasilitas/wifi.svg" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/fasilitas/wifi.svg" width="80px">
                <h5 class="mt-3">WIFI</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
                    More Facilitiesc
                </a>
            </div>
        </div>
    </div>

    <!-- our Testimonial-->

    <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">TESTIMONIAL</h2>

    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4 mb-3">
                        <img src="images/customer/cus1.jpg" width="30px">
                        <h6 class="m-0 ms-2 ">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius illum ipsum iste accusamus, hic
                        dolores, maxime laudantium dignissimos, cupiditate voluptatem odio vitae aut eaque distinctio
                        animi deserunt corporis sed beatae!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4 mb-3">
                        <img src="images/customer/cus2.jpg" width="30px">
                        <h6 class="m-0 ms-2 ">Random User2</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia eligendi velit
                        exercitationem unde cupiditate aperiam, blanditiis ratione dolorem ipsam sapiente labore
                        repellat, nesciunt quaerat iste voluptatibus accusantium assumenda vitae.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4 mb-3">
                        <img src="images/customer/cus3.jpg" width="30px">
                        <h6 class="m-0 ms-2 ">Random User3</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, mollitia eligendi velit
                        exercitationem unde cupiditate aperiam, blanditiis ratione dolorem ipsam sapiente labore
                        repellat, nesciunt quaerat iste voluptatibus accusantium assumenda vitae.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!---OUR REACH US--->
            <h2 class="mt-5 pt-4 text-center fw-bold h-font"> ABOUT US </h2>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                        <iframe class="w-100 rounded" height="320px"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255311.492992498!2d104.473!3d0.973798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f6dec85825%3A0xec4ab548c30d02a1!2sTanjungpinang%2C%20Kota%20Tanjung%20Pinang%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1689242282308!5m2!1sid!2sid"
                            width="600" loading="lazy"></iframe>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="bg-white">
                            <h5>Call us</h5>
                            <a href="tel:081374202983" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> 081374202983
                            </a>
                            <a href="tel:081374202983" class="d-inline-block mb-2 text-decoration-none text-dark">
                                <i class="bi bi-telephone-fill"></i> 081374202983
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <?php require('inc/footer.php'); ?>

    <br><br><br>
    <br><br><br>


    <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
    });

    var swiper = new Swiper(" .swiper-testimonials", {
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
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
    </script>

</body>

</html>