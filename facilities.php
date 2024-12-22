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

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <p class="tetx-center mt-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.Iste cumque, dignissimos eum assumenda distinctio
            eaque similique nemo provident earum atque sequi laboriosam consequuntur commodi explicabo? Quod optio eum
            atque aut!
        </p>
        <div></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark">
                    <div class="d-flex align-item-center p">
                        <img src="images/fasillitas/wifi.svg" widht="40px">
                        <h5>Wifi</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, alias nemo ipsa harum quos
                            expedita, explicabo maiores deserunt deleniti, consectetur quasi saepe illo numquam at iure
                            voluptate! Quia, odit quasi?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php require('inc/footer.php'); ?>


</body>

</html>