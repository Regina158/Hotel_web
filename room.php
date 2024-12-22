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
    body {
        background-color: #6e5737;
    }

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

    <div class="my-5 px-4">

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
                                <a href="#" class="btn btn-sm text-white custom-bg-dark shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>r
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

        <?php require('inc/footer.php'); ?>


</body>

</html>