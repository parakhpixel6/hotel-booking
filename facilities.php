<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="h-font">HB Hotel - Facilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require("inc/links.php")?>
    <style>
        .h-line{
            width: 150px !important;
            margin: 0 auto !important;
            height: 1.7px !important;
        }

        .pop:hover{
            border-top-color: #2ec1ac !important;
            transform: scale(1.03) !important;
            transition: all 0.3s;
        }
    </style> 
</head>

<body class="bg-light">
    <?php include "inc/header.php"?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sit dolorum volupt <br> atibus autem numquam eaque, ducimus iure earum. Quis, cumque?
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded-4 shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/wifi.svg" width="40px">
                        <h5 class="m-0 ms-3">WiFi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure exercitationem beatae illo quasi voluptates, aliquam porro.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include "inc/footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>