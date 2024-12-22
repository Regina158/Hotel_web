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
    <h2 class="mt-5 pt-4 text-center fw-bold h-font"> ABOUT US </h2>
    <div class="my-5 px-4">
        <p class="tetx-center mt-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.Iste cumque, dignissimos eum assumenda distinctio
            eaque similique nemo provident earum atque sequi laboriosam consequuntur commodi explicabo? Quod optio eum
            atque aut!
        </p>
        <div></div>
    </div>


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
                        <i class="bi bi-telephone-fill"></i> 081111111111
                    </a>
                    <a href="tel:081374202983" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 081111111111
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>


</body>

</html>