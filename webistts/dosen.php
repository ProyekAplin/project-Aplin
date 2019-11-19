
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Istts</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    require("connect.php");
    $dosen=mysqli_query($conn,"SELECT * from dosen");
?>
<img src="<?=$dosen["gambar"]?>" alt="">
<section class="ftco-section bg-light">
    <div class="container-fluid px-4">
        <div class="row">
            <?php
                foreach ($dosen as $key => $value) {
                    echo "
                    <div class='col-md-6 col-lg-3 ftco-animate'>
                        <div class='staff'>
                            <div class='img-wrap d-flex align-items-stretch'>
                                <div class='img align-self-stretch' style='background-image: url($value[gambar]);'></div>
                            </div>
                            <div class='text pt-3 text-center'>
                                <h3>$value[nama] </h3>
                                <span class='position mb-2'>$value[jabatan]</span>
                                <div class='faded'>
                                    <p>$value[email]</p>
                                    <ul class='ftco-social text-center'>
                                    <li class='ftco-animate'><a href='#'><span class='icon-twitter'></span></a></li>
                                    <li class='ftco-animate'><a href='#'><span class='icon-facebook'></span></a></li>
                                    <li class='ftco-animate'><a href='#'><span class='icon-google-plus'></span></a></li>
                                    <li class='ftco-animate'><a href='#'><span class='icon-instagram'></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>
        </div>
    </div>
</section>
</body>
<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</html>