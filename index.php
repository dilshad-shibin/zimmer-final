<?php
error_reporting(0);
$source='';
$source=$_GET['utm_source'];
$medium='';
$medium=$_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>Zimmer Medizin Systeme</title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/cookiealert.css">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body class="homepage-1">

    <div class="main">
        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo/zimmer-logo.png" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="assets/img/logo/zimmer-logo.png" alt="sticky brand-logo">
                </a>
                <button class="enq-top d-lg-none" data-toggle="modal" data-target="#exampleModal0">Enquire Now
                </button>

                <div class="navbar-inner">
                    <!--  Mobile Menu Toggler -->
                    <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#screenshots">Screenshots</a>
                            </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area h-90vh d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-12 col-lg-5 pr-40">
                        <div class="welcome-intro">
                            <h1>Physical therappy:</h1>
                            <h3 class="mt-1">Proven Procedures with the lastest technology</h3>
                        </div>
                        <div class="welcome-form">
                            <form name="form1" method="post" action="email.php">
                                <div class="form-title">
                                    <h4>Enquiry</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <select name="place" class="form-control">
                                        <option value="India">India</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Newzeland">Newzeland</option>
                                        <option value="UAE">UAE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                	<input type="hidden" name="esource" value="<?php echo $source;?>">
									<input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                    <input type="submit" value="submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                            <img src="assets/img/bg/banner-bg.png" alt="">
                        </div>
                        <div class="years-exp">
                            <div class="number-count">
                                <div class="value"><h2 class="counter">50</h2><span>+</span></div>
                                <div class="para"><p>years of <br> experience in <br> technical medicine</p></div>
                            </div>
                            <div class="place-count">
                                <h2><span>Made in</span> <br>Germany</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Products Area Start ***** -->
        <section class="products-area ptb_50">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="product-head">
                            <h1>Our Products</h1>
                        </div>
                    </div>
                </div>
                <!-- enShock -->
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <div class="product-box">
                            <div class="product-content">
                                <div class="left-content">
                                    <h3>enShock</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                    <div class="product-btn">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a>
                                    </div>
                                </div>
                                <div class="right-content">
                                    <img src="assets/img/products/enshock_device.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Electrotherapy & Ultra Sound -->
                <div class="row">
                    <div class="col-12 m-5px">
                        <div class="electro-box">
                            <div class="electro-head">
                                <h2>Electrotherapy and Ultrasound</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/physys.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/physys.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>PhySys</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/sono-motivation.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/sono-motivation.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>SoleLine</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/sono-one.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/sono-one.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Sono One</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Laser therapy and cryotherapy -->
                <div class="row">
                    <div class="col-lg-4 m-3px pr-0">
                        <div class="electro-box electro-box-laser">
                            <div class="electro-head">
                                <h2>Laser therapy</h2>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/laser-therapy.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/laser-therapy.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Opton Pro</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 m-3px pl-5">
                        <div class="electro-box">
                            <div class="electro-head">
                                <h2>Cryotherapy</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/cryo-mini.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/cryo-mini.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Cryo 7</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/cryo6.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/cryo6.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Cryo 6</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Diathermy -->
                <div class="row">
                    <div class="col-12 m-5px">
                        <div class="electro-box">
                            <div class="electro-head">
                                <h2>Diathermy</h2>
                            </div>
                            <div class="row">
                                <!-- <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/micro5.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/micro5.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Micro 5</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/thermo-pro.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/thermo-pro.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Thermo Pro</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/thermo-tk.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/thermo-tk.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Thermo TK</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shockwave therapy -->
                <div class="row">
                    <div class="col-12">
                        <div class="electro-box">
                            <div class="electro-head">
                                <h2>Shockwave therapy</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/enplus.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/enplus.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>EnPlus 2.0</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/enplus-pro.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/enplus-pro.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>EnPlus Pro</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/enshock.jpg" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/enshock.jpg" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>EnShock</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- clTrac Traction Unit -->
                <div class="row">
                    <div class="col-12 mt-1">
                        <div class="electro-box">
                            <div class="electro-head">
                                <h2>clTrac Traction Unit</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/traction.png" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/traction.png" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Traction</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/traction2.png" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/traction2.png" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Traction 2</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="elec-sec">
                                        <div class="elec-img">
                                            <img src="assets/img/products/traction3.png" alt="">
                                            <div class="elec-img-overlay">
                                                <div class="overlay-text">
                                                    <p>The high-tech treatment centre in a practice orientated system.</p>
                                                    <div class="overlay-btn">
                                                        <a href="assets/img/products/traction3.png" data-fancybox="images">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elec-content">
                                            <div><h3>Traction 3</h3></div>
                                            <div class="brochure-btn"><a href="#" data-toggle="modal" data-target="#exampleModal0">Download Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Emfield Pro -->
                <div class="row">
                    <div class="col-lg-6 m-5px pr-3px">
                        <div class="emfield-box">
                            <img src="assets/img/products/emfield.jpg" alt="">
                            <div class="emfield-content">
                                <h1>Emfield Pro</h1>
                            </div>
                            <div class="emfield-btn">
                                <a href="#">Download Brochure</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-5px pl-3px">
                        <div class="emfield-box">
                            <img src="assets/img/products/axion.jpg" alt="">
                            <div class="emfield-content">
                                <h1>Axion Treatment table</h1>
                            </div>
                            <div class="emfield-btn">
                                <a href="#">Download Brochure</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- enquire btn -->
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="enquiry-btn-product">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Enquire now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** About Area Start ***** -->
        <section class="section about-area ptb_100">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="about-head"><span>About</span> Zimmer</h2>
                            <p class="mb-3">With 50 years of experience in technical medicine, Zimmer MedizinSysteme has become one of the leading European manufacturers for physiotherapy systems. Innovative cardiologic products, diagnostic products and aesthetic products also enhance our product lines.</p>
                            <p>Our family-run company is located in Bavaria, Southern Germany. Supporting approximately 250 employees nationally and internationally, innovative, German-
                                made products are offered with award-winning design. Customer-oriented services are available through our worldwide network.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vido-sec">
                            <img src="assets/img/youtube-img.jpg" alt="">
                            <div class="center-icon">
                                <a href="https://www.youtube.com/watch?v=h-JF4bkIklY" data-fancybox="images"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Enquiry Area Start ***** -->
        <section class="section enquiry-area ptb_50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <div class="enq-head">
                            <h1>Enquiry</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-box text-center">
                            <form name="form2" method="post" action="email.php">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <select name="place" class="form-control">
                                                <option value="India">India</option>
                                        		<option value="Australia">Australia</option>
                                        		<option value="Newzeland">Newzeland</option>
                                        		<option value="UAE">UAE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 submit-btn">
                                    	<input type="hidden" name="esource" value="<?php echo $source;?>">
										<input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                        <button class="btn" type="submit" name="submit" value="Submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-sec">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/zimmer-footerlogo.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-icons">
                                        <div><h3>Follow Us</h3></div>
                                        <div>
                                            <ul class="social">
                                                <li>
                                                    <a href="" target="_blank" class="text-white-50"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-white-50"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-white-50"><i class="fab fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="copy-right">
                                        <p>&copy; 2021 Zimmer, All Rights Reserved <a href="http://www.theviralmafia.com/?utm_source=akshharam" target="_blank"> <img src="assets/img/logo/viralmafia.svg"></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog log-sign" role="document">
                                <div class="col-lg-12 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal" aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Enquire Now</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log" id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Emial" name="email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <select name="place" class="form-control">
                                                                                    <option value="India">India</option>
                                        											<option value="Australia">Australia</option>
                                        											<option value="Newzeland">Newzeland</option>
                                        											<option value="UAE">UAE</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 text-center">
                                                                            <div class="popup-btn">
                                                                            	<input type="hidden" name="esource" value="<?php echo $source;?>">
																				<input type="hidden" name="emedium" value="<?php echo $medium;?>">
                                                                                <button class="btn1" type="submit" name="submit" value="Submit">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



     <div class="cont_link_box">
      	<a id="" href="tel:+91" class="callnow_inte" target="">
		<i class="fa fa-phone" aria-hidden="true"></i>
		</a>
		<a id="" href="https://wa.me/+91" class="whatsapp_inte" target="_blank">
		<i class="fab fa-whatsapp"></i>
		</a>
    </div> 


   <div class="modal fade popsec onload_pop" id="myModal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="btn-close pop_button" data-dismiss="modal" aria-label="Close"></button>
                        <div class="privacy_onload">

                            <div class="pop-privacy-box">

                                <h4>Privacy Policy</h4>

                                <p>This privacy policy applies to the website( name). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                                <h4>Cookies Policy</h4>

                                <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                            </div>

                        </div>    
                        
                    </div>

                </div>
            </div>
</div>


    <!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="#" data-toggle="modal" data-target="#myModal3">Learn more</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        I agree
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/cookiealert.js"></script>
</body>

</html>