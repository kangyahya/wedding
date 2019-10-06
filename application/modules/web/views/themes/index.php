<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by YAHYA" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="YAHYA" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/icomoon.css">
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/worksans.css">
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/sacramento.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/<?=BASE_URL()?>assets/frontend/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=BASE_URL()?>assets/frontend/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?=BASE_URL()?>assets/frontend/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?=$navigasi?>

	<?=$header?>

	<?=$content?>

	<?=$footer?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?=BASE_URL()?>assets/frontend/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=BASE_URL()?>assets/frontend/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=BASE_URL()?>assets/frontend/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=BASE_URL()?>assets/frontend/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?=BASE_URL()?>assets/frontend/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?=BASE_URL()?>assets/frontend/js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="<?=BASE_URL()?>assets/frontend/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=BASE_URL()?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=BASE_URL()?>assets/frontend/js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="<?=BASE_URL()?>assets/frontend/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="<?=BASE_URL()?>assets/frontend/js/main.js"></script>

	<script>
    var d = new Date(new Date("Oct 15, 2019 10:00:00").getTime());

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>

	</body>
</html>

