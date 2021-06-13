<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>M-Code Infosoft</title>
    <!-- Google Fonts -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap"    rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/eocjs-newsticker.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/aos.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/flaticon.css" />

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css" />
<style type="text/css">
    
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
/**/body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

</head>

<body class="light">
    <!-- ==================== Start Loading ==================== -->
<div id="wrapper">
    <div id="preloader">
        <div class="loading-text">Loading</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div id="navi" class="topnav">
        <div class="container-fluid">
            <div class="logo">
                <a href="home">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo-light.png" alt=""></a>
            </div>

            <a href="javascript:void(0)" class="btn-curve btn-lit btn-slta">
                <span id="myBtn">Start New Project</span>
            </a>

           <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
    Name<input type="text" name=""><br><br>
     Email<input type="text" name=""><br><br>
      Password<input type="text" name=""><br><br>
       Re-password<input type="text" name=""><br><br>
       <input type="submit" value="submit">
  </div>

</div>
            <div class="menu-icon">
                <span class="icon">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
                <!--span class="text menu" data-splitting>Menu</span>
                <span class="text opens" style="display:none" data-splitting>Open</span-->
            </div>
        </div>
    </div>

    <div class="hamenu">
            <div class="menu-bg">
                <div class="active menu-active-bg menu-bg  companybg" data-menu-bg="companybg"></div>
                <div class="menu-bg technologybg" data-menu-bg="technologybg"></div>
                <div class="menu-bg designbg" data-menu-bg="designbg"></div>
                <div class="menu-bg marketingbg" data-menu-bg="marketingbg"></div>
                <div class="menu-bg amazonbg" data-menu-bg="amazonbg"></div>
                <div class="menu-bg trainingbg" data-menu-bg="trainingbg"></div>
                <div class="menu-bg contactsbg" data-menu-bg="contactsbg"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="menu-links">
                            <ul class="main-menu">
                                <li class="active menu-link" data-menu-bg="companybg">
                                    <div class="o-hidden">
                                        <span class="link dmenu">Our Company</span>
                                    </div>
                                    <div class="sub-menu">
                                        <ul>
                                            <li>
                                                <div class="o-hidden">
                                                    <span class="sub-link back">Go Back </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <span class="sub-link mainmenu">Company</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <a href="about" class="sub-link">About Mcode</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <a href="javascript:void(0)" class="sub-link">Careers </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link" data-menu-bg="technologybg">
                                    <div class="o-hidden">
                                        <span class="link dmenu">Our Services</span>

                                    </div>
                                    <div class="sub-menu">
                                        <ul>
                                            <li>
                                                <div class="o-hidden">
                                                    <span class="sub-link back">Go Back </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <span class="sub-link mainmenu">Our Services</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <a href="web-development" class="sub-link">Web Development</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <a href="application-development" class="sub-link">App
                                                        Developement </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="o-hidden">
                                                    <a href="javascript:void(0)" class="sub-link">Web / Graphics
                                                        Designing </a>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                                <li class="menu-link" data-menu-bg="contactsbg">
                                    <div class="o-hidden">
                                        <a href="contactM" class="link">Contact Us</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="wrapper">


            <div class="main ">


                <!-- ==================== Start Slider ==================== -->
                <section class="youtb-vis-stra">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="video-youtb">
                                    <video autoplay muted loop id="myVideo">
                                        <source
                                            src="https://static.videezy.com/system/resources/previews/000/035/264/original/Blurry-laptop.mp4"
                                            type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont-str-str">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="cntr-cnt-akk nw-st-slds wow fadeInUp">
                                        <div class="cont-slidr-yra">
                                            <h1>Welcome To <span> MCode Infosoft</span></h1>
                                            <p>We are an experienced and passionate team of Software Developers, <br>
                                                Web & Graphic Designers , and AWS Service experts.</p>
                                            <span class="befr-brsra">
                                                <a href="about" class="btn-curve btn-lit">
                                                    <span>About Us</span>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="waves-desis">
                        <div class="inner-header flex">
                            <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 500 500" xml:space="preserve">
                                <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10"
                                    d="M57,283" />
                                <!-- <g>
							<path fill="#fff" d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
			C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
			c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
						</g> -->
                            </svg>
                        </div>

                        <!--Waves Container-->
                        <div>
                            <svg class="waves" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28"
                                preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                    <path id="gentle-wave"
                                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                                </defs>
                                <g class="parallax">
                                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                        <!--Waves end-->

                    </div>
            </div>
            </section>

            <section class="aboutus ptb-80 sact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInLeft">
                            <div class="img-nr-alhta ml-n20">
                                <div class="fcct-hover">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/partn.jpeg" />
                                </div>
                                <span class="smll-img-al"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about2.jpg" /> </span>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-md-3 aos-item" data-aos="fade-left">
                            <div class="cntr-ctr-all ">
                                <div class="title-laa-main new-ses">
                                    <span class="overly-tts"> Partner </span>
                                    <h5 class="sub-ttlss"> Technology Partner </h5>
                                    <h3 class="txt-tra"> A Technology Partner You Can <br>
                                        <!--span class="tct-dots"> Count On </span-->
                                        <span class="animate-typing" data-animate-loop="true" data-type-speed="200"
                                            data-type-delay="200" data-remove-speed="50" data-remove-delay="500"
                                            data-cursor-speed="200">
                                            Count On <em class="dot-tsr"> . </em>
                                        </span>
                                        </span>
                                    </h3>
                                </div>
                                <div class="about-content">
                                    <p><span class="cont">With decades of experience to draw on, our leadership group
                                            has successfully helped many global organizations in adopting more modern,
                                            scalable, and secured technology solutions. With extensive experience in
                                            software development, cloud technologies & cyber security – we help our
                                            clients implement, support, and protect their I.T. applications and
                                            infrastructure. </span></p>
                                    <p><span class="cont">We offer a Nearshore & Offshore hybrid service model, where
                                            you can reap the benefits of quality project management and highly skilled
                                            technology professionals. With a collaborative Agile & Scrum project
                                            management approach, we are able to provide transparent communication and
                                            help you Go Live quicker.</span></p>
                                </div>
                                <!--a href="javascript:void(0)" class="btn-curve btn-lit col-resa">
								<span>Read More</span>
							</a-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-other-str">
                                <div class="cont-box-str">
                                    <div class="cntr-ctr-all">
                                        <div class="title-laa-main new-ses">
                                            <span class="overly-tts over-tra"> Expertise </span>
                                            <h3 class="txt-tra"> Areas Of Expertise </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" class="box-main-ftrs">
                                                <div class="img-container fcct-hover">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/devlopment.jpeg">
                                                </div>
                                                <h5 class="equalHeight">
                                                    Software Development
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#" class="box-main-ftrs">
                                                <div class="img-container fcct-hover">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cloud-serv.jpg">
                                                </div>
                                                <h5 class="equalHeight">
                                                    AWS <br />Services
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="web-development.php" class="box-main-ftrs">
                                                <div class="img-container fcct-hover">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cyber.jpg">
                                                </div>
                                                <h5 class="equalHeight">
                                                    Web <br> Development
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="application-development.php" class="box-main-ftrs">
                                                <div class="img-container fcct-hover">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/function.jpeg">
                                                </div>
                                                <h5 class="equalHeight">
                                                    Application Development
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tecchnoly">
                <div class="our-goal-banner large-text-logo">
                    <div class="opacity">
                        <div class="container">
                            <div class="tct-tcr-al wow fadeInUp">
                                <span class="ovrl-txrs"> Spaceships </span>
                                <h2> In A World Full Of Astronauts <br> We Build
                                    <span class="animate-typing" data-animate-loop="true" data-type-speed="200"
                                        data-type-delay="200" data-remove-speed="50" data-remove-delay="500"
                                        data-cursor-speed="200">
                                        Spaceships <em class="dot-tsr"> . </em>
                                    </span>
                                </h2>
                            </div>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/laptop.png" class="ma-lap wow fadeInUp">
                        </div> <!-- /.container -->
                    </div> <!-- /.opacity -->
                    <div class="layers-vrls">
                        <span class="layer-1-over" data-parallax="scroll" data-position="bottom" data-speed="0.3"
                            data-image-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/layer2.png"></span>
                        <span class="layer-2-over" data-parallax="scroll" data-position="bottom" data-speed="0.6"
                            data-image-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/layer3.png"></span>
                        <span class="layer-3-over" data-parallax="scroll" data-position="bottom" data-speed="1"
                            data-image-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/layer4.png"></span>
                        <span class="layer-main" data-parallax="scroll" data-position="bottom"
                            data-image-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/layer1.jpeg"></span>
                    </div>
                </div>

                <div class="feature-section">
                    <div class="container">
                        <div class="tct-tcr-al small-strav">
                            <span class="ovrl-txrs"> Software </span>
                            <h2> Software Development Expertise </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp">
                                <div class="space-services owl-carousel owl-theme owl-dt-true">
                                    <div class="item">
                                        <div class="single-feature-block">
                                            <h4>
                                                <span class="icon p-bg-color" data-tilt data-tilt-scale="1.1">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon10.png">
                                                </span>
                                                <a href="#" class="tran3s">Mobile <br> Development</a>
                                            </h4>
                                            <p>We provide hybrid & native mobile development solutions for IOS, Android,
                                                and Windows.</p>
                                        </div> <!-- /.single-feature-block -->
                                    </div>
                                    <div class="item">
                                        <div class="single-feature-block">
                                            <h4>
                                                <span class="icon p-bg-color" data-tilt data-tilt-scale="1.1">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon11.png">
                                                </span>
                                                <a href="#" class="tran3s">Web <br> Development</a>
                                            </h4>
                                            <p>We create responsive and U.I friendly web designs that increase customer
                                                engagement and loyalty.</p>
                                        </div> <!-- /.single-feature-block -->
                                    </div>
                                    <div class="item">
                                        <div class="single-feature-block">
                                            <h4>
                                                <span class="icon p-bg-color" data-tilt data-tilt-scale="1.1">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon1.png">
                                                </span>
                                                <a href="#" class="tran3s">Ecommerce <br> Solutions</a>
                                            </h4>
                                            <p>We can help you build a custom ecommerce or design a beautiful site using
                                                Shopify, WooCommerce, Magento, and BigCommerce.</p>
                                        </div> <!-- /.single-feature-block -->
                                    </div>
                                    <div class="item">
                                        <div class="single-feature-block">
                                            <h4>
                                                <span class="icon p-bg-color" data-tilt data-tilt-scale="1.1">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon12.png">
                                                </span>
                                                <a href="#" class="tran3s">Enterprise <br> Applications</a>
                                            </h4>
                                            <p>We deliver enterprise applications that perform well across multiple
                                                platforms & browsers – Both on premise and from the cloud.</p>
                                        </div> <!-- /.single-feature-block -->
                                    </div>
                                    <div class="item">
                                        <div class="single-feature-block">
                                            <h4>
                                                <span class="icon p-bg-color" data-tilt data-tilt-scale="1.1">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon2.png">
                                                </span>
                                                <a href="#" class="tran3s">API’s <br> Integration</a>
                                            </h4>
                                            <p>We can develop custom API’s or help you implement SOA and middleware
                                                platforms to efficiently manage communication between applications.</p>
                                        </div> <!-- /.single-feature-block -->
                                    </div>

                                    <div class="item">
                                        <div class="single-feature-block">
                                            <h4>
                                                <span class="icon p-bg-color" data-tilt data-tilt-scale="1.1">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon11.png">
                                                </span>
                                                <a href="#" class="tran3s">Graphic <br> Designing</a>
                                            </h4>
                                            <p>create visual concepts, using computer software or by hand, to
                                                communicate ideas that inspire, inform, and captivate consumers</p>
                                        </div> <!-- /.single-feature-block -->
                                    </div>

                                </div>

                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <section class="portfolio ptb-80 pb-80 prt-new-rond pb-130">
                <div class="container">
                    <div class="title-laa-main new-ses wow fadeInLeft">
                        <span class="overly-tts"> Software </span>
                        <h5 class="sub-ttlss animated fadeInLeft go"> World Class Software Development </h5>
                        <h3 class="animated pulse go"> We Aim To Provide World Class <br> <span class="animate-typing"
                                data-animate-loop="true" data-type-speed="200" data-type-delay="200"
                                data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
                                Software Development.
                            </span> </h3>
                    </div><!-- /.theme-title -->
                    <div class="content-trs-al rlat-ints">
                        <p>With a deep talent pool of industry specific technology experts, Datazon aims to be your
                            trusted software development partner. Whether your looking for a team, individual developer,
                            or an on-demand resource - we are capable of providing you with high end software developers
                            and project managers available on-site or in our Canada and India Nearshore & off-shore
                            centers.
                        </p>

                    </div>
                    <div class="row wow pulse">
                        <div class="col-lg-8 mt-3">
                            <div class="content-trs-al rlat-ints">
                                <div class="ste-cotrs">
                                    <h5 class="tcs-alt"> Agile & Scrum Project Management </h5>
                                    <p> We have extensive experience in delivering software solutions using Agile &
                                        Scrum methodology. This ensures an iterative approach that focuses on
                                        collaboration, customer feedback and small rapid releases. </p>
                                    <span class="numv-stra"> 01.</span>
                                </div>
                                <div class="ste-cotrs">
                                    <h5 class="tcs-alt"> DevOps Engineers </h5>
                                    <p> Bridging the gap between software developers and I.T. operations with a
                                        collaborative and shared approach - ensures quicker delivery and higher software
                                        quality. Our developers are certified DevOps engineers. </p>
                                    <span class="numv-stra"> 02.</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="icon-str-sr">
                                <div class="icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon6.png">
                                </div>
                                <h5 class="features-title">App Development</h5>
                            </a>
                            <a href="#" class="icon-str-sr">
                                <div class="icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon8.png">
                                </div>
                                <h5 class="features-title">Product Support</h5>
                            </a>
                            <a href="#" class="icon-str-sr">
                                <div class="icon">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon4.png">
                                </div>
                                <h5 class="features-title">On-Demand Resources</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="marketing-scta new-clousa">
                <div class="core-features bg-image">
                    <div class="opacity">
                        <div class="container">
                            <div class="title-laa-main new-ses wow fadeInLeft">
                                <span class="overly-tts"> Cloud </span>
                                <h5 class="sub-ttlss animated fadeInLeft go"> our Cloud Services</h5>
                                <h3 class="animated pulse go"> Cloud <span class="animate-typing"
                                        data-animate-loop="true" data-type-speed="200" data-type-delay="200"
                                        data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
                                        Services.
                                    </span> </h3>
                            </div><!-- /.theme-title -->

                            <div class="feature-wrapper-box row border-style-one wow fadeInUpBig">
                                <div class="col-md-4 col-xs-6">
                                    <div class="single-feature tran3s" data-tilt data-tilt-scale="1.1">
                                        <h5><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon13.png"><a href="#" class="tran3s">Cloud
                                                Strategy</a></h5>
                                        <p>With multi industry experience, our cloud experts can help you design a cloud
                                            implementation / migration strategy. </p>
                                    </div> <!-- /.single-feature -->
                                </div> <!-- /.col- -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="single-feature tran3s" data-tilt data-tilt-scale="1.1">
                                        <h5><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon14.png"><a href="#" class="tran3s">Cloud
                                                Migration</a></h5>
                                        <p>With extensive experience in cloud architecture design and ERPs, we can help
                                            you migrate to the cloud.</p>
                                    </div> <!-- /.single-feature -->
                                </div> <!-- /.col- -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="single-feature tran3s" data-tilt data-tilt-scale="1.1">
                                        <h5><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon15.png"><a href="#" class="tran3s">Disaster Recovery
                                                As A Service</a></h5>
                                        <p>Availing Cloud Disaster Recovery can minimize downtime during a major
                                            disaster and have you back up and running quickly. </p>
                                    </div> <!-- /.single-feature -->
                                </div> <!-- /.col- -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="single-feature tran3s" data-tilt data-tilt-scale="1.1">
                                        <h5><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon5.png"><a href="#" class="tran3s">Software As A
                                                Service</a></h5>
                                        <p>Save time, money, and resources by implementing cloud applications that allow
                                            you to scale based on your business needs.</p>
                                    </div> <!-- /.single-feature -->
                                </div> <!-- /.col- -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="single-feature tran3s" data-tilt data-tilt-scale="1.1">
                                        <h5><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon16.png"><a href="#" class="tran3s">Infrastructure As
                                                A Service</a></h5>
                                        <p>Scale up or down based on your needs, and avoid expenses & complexity of
                                            purchasing and managing your own physical servers. </p>
                                    </div> <!-- /.single-feature -->
                                </div> <!-- /.col- -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="single-feature tran3s" data-tilt data-tilt-scale="1.1">
                                        <h5><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon9.png"><a href="#" class="tran3s">Platform As A
                                                Service</a></h5>
                                        <p>Develop, test and run your applications on a PaaS model without having the
                                            headache of maintaining and managing your own infrastructure. </p>
                                    </div> <!-- /.single-feature -->
                                </div> <!-- /.col- -->
                            </div> <!-- /.feature-wrapper-box -->
                        </div> <!-- /.container -->
                    </div> <!-- /.opacity -->
                </div>
                <!--div id="example-1">
				<img src="img/cloudd.png" class="cloud-movs">
			</div-->
            </section>
            <section class="aboutus ptb-80 sact bg-cgt-half">
                <div class="half-ovlys ha-gts">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 wow fadeInLeft">
                                <div class="img-nr-alhta">
                                    <div class="fcct-hover">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cld.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInRight">
                                <div class="cntr-ctr-all">
                                    <div class="title-laa-main new-ses">
                                        <span class="overly-tts"> Services </span>
                                        <h5 class="sub-ttlss scrv-afr-bfr"> Our AWS Services</h5>
                                        <h3 class="txt-tra left-lins"> Amazon Web <br> <span class="animate-typing"
                                                data-animate-loop="true" data-type-speed="200" data-type-delay="200"
                                                data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
                                                Services.
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="about-content cont-spac">
                                        <p class="cnt-st-sr"><span class="cont">Focus on your core business, and let us
                                                manage your I.T.</span></p>

                                        <p>
                                            <span class="cont">
                                                AWS has significantly more services, and more features within those
                                                services, than any other cloud provider–from infrastructure technologies
                                                like compute, storage, and databases–to emerging technologies, such as
                                                machine learning and artificial intelligence, data lakes and analytics,
                                                and Internet of Things. This makes it faster, easier, and more cost
                                                effective to move your existing applications to the cloud and build
                                                nearly anything you can imagine.
                                            </span>
                                        </p>
                                        <p>
                                            <span class="cont">
                                                AWS also has the deepest functionality within those services. For
                                                example, AWS offers the widest variety of databases that are
                                                purpose-built for different types of applications so you can choose the
                                                right tool for the job to get the best cost and performance.
                                            </span>
                                        </p>

                                    </div>
                                    <!--a href="javascript:void(0)" class="btn-curve btn-lit col-resa">
									<span>Read More</span>
								</a-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cont-box-spa">
                        <div class="row">
                            <div class="col-md-4 cont-svt" data-tilt data-tilt-scale="1.05">
                                <a href="#" class="txt-stra-oa">
                                    <small class="num-sta"> 01. </small>
                                    <h5 class="features-title">AWS Solutions Constructs</h5>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon14.png" class="ondmd-img">
                                </a>
                            </div>
                            <div class="col-md-4 cont-svt" data-tilt data-tilt-scale="1.05">
                                <a href="#" class="txt-stra-oa">
                                    <small class="num-sta"> 02. </small>
                                    <h5 class="features-title">AWS Solutions Implementations</h5>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon13.png" class="ondmd-img">
                                </a>
                            </div>
                            <div class="col-md-4 cont-svt" data-tilt data-tilt-scale="1.05">
                                <a href="#" class="txt-stra-oa">
                                    <small class="num-sta"> 03. </small>
                                    <h5 class="features-title">AWS Solutions Consulting Offers</h5>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon15.png" class="ondmd-img">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="home-1 about section-padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="about-left section-title">

                                <div class="title-laa-main new-ses">
                                    <span class="overly-tts"> Integration </span>
                                    <h5 class="sub-ttlss"> Application Integration </h5>
                                    <h3>Application <span>Integration</span> <br> Services.</h3>
                                </div>
                                <div class="abt-left-content section-content">
                                    <p>Application integration helps you achieve greater efficiency and allows you to
                                        easily scale and manage the way your applications communicate with one another.
                                        We provide custom API development, API platform implementation and on-going
                                        application integration support.</p>
                                    <p>With multi industry experience, our Solution Architects have been challenged with
                                        integrating localized and custom applications for industry specific clients.
                                        Thus, giving us of experience and knowledge to help you scale and integrate
                                        applications more quicker and secure. </p>
                                    <a href="javascript:void(0)" class="btn-curve btn-lit col-resa">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <div class="about-right fcct-hover">
                                <div class="about-right-img"></div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-9">
                            <div class="row location-list">
                                <div class="col-md-4 hvr-s">
                                    <a href="#" class="txt-stra-oa location" data-tilt data-tilt-scale="1.05">
                                        <small class="num-sta"> 01. </small>
                                        <h5 class="features-title">API <br> Development</h5>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon17.png" class="ondmd-img">
                                    </a>
                                </div>

                                <div class="col-md-4 hvr-s">
                                    <a href="#" class="txt-stra-oa location" data-tilt data-tilt-scale="1.05">
                                        <small class="num-sta"> 02. </small>
                                        <h5 class="features-title">Service Oriented Architecture (SOA)</h5>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon18.png" class="ondmd-img">
                                    </a>
                                </div>

                                <div class="col-md-4 hvr-s">
                                    <a href="#" class="txt-stra-oa location" data-tilt data-tilt-scale="1.05">
                                        <small class="num-sta"> 03. </small>
                                        <h5 class="features-title">Middleware</h5>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons/icon19.png" class="ondmd-img">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- row end -->
                </div> <!-- container end -->
            </section>
            <section class="testimonials  ptb-80 nestimonl-ns">
                <div class="container">
                    <div class="tct-tcr-al main-fn-str wow fadeInUp">
                        <span class="ovrl-txrs"> Testimonials </span>
                        <h2>What Clients <span class="animate-typing" data-animate-loop="true" data-type-speed="200"
                                data-type-delay="200" data-remove-speed="50" data-remove-delay="500"
                                data-cursor-speed="200">
                                Say.
                            </span> </h2>
                    </div>
                    <div class="row justify-content-center wow fadeInUp">
                        <div class="col-lg-12 quote-text valign">
                            <div class="owl-carousel owl-theme testimon-slider">
                                <div class="item">
                                    <div class="cont">
                                        <p>
                                            Mcode team were very professional. They completed the job on time and
                                            exceeded our expectations. I highly recommend their services if you are
                                            looking for
                                            experienced developers for IOS or Android.
                                        </p>
                                        <div class="info">
                                            <h6>Primeshare Inc</h6>
                                        </div>

                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/prime.png" class="usr-img-test">
                                </div>
                                <div class="item">
                                    <div class="cont">
                                        <p>Hiring Mcode was a great experience. They worked so fast that we finished the
                                            project under budget and early. I'm really impressed with the way he was
                                            able to tackle and solve them really fast. I'm definitely going to hire them
                                            again when business picks back up.
                                        </p>
                                        <div class="info">
                                            <h6>Ruth</h6>
                                        </div>

                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/user3.jpg" class="usr-img-test">
                                </div>
                                <div class="item">
                                    <div class="cont">

                                        <p> Great developer! Always quick to respond, honest and easy to get a hold of.
                                            They understands the project scopes easily and always meets expectations. We
                                            use them all the time and I highly recommend MCode!
                                        </p>
                                        <div class="info">
                                            <h6>Julie Glenn</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/user1.jpg" class="usr-img-test">
                                </div>
                                <div class="item">
                                    <div class="cont">

                                        <p>I love working with Mcode, very intelligent, honest and hard working. They
                                            works very flexible hours and is always online when I need. I highly
                                            recommend Mcode !
                                        </p>
                                        <div class="info">
                                            <h6>Rod Garlick</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/user2.jpg" class="usr-img-test">
                                </div>
                                <div class="item">
                                    <div class="cont">

                                        <p>Great freelancer! We will use again for sure! Communication was open and
                                            clear. Deadlines met and exceeded expectations!</p>
                                        <div class="info">
                                            <h6>Ally</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/user4.jpg" class="usr-img-test">
                                </div>
                                <div class="item">
                                    <div class="cont">

                                        <p>Great to work with MCODE, would do business again with him!</p>
                                        <div class="info">
                                            <h6>MadMay Digital Solutions</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mm.png" class="usr-img-test">
                                </div>

                                <div class="item">
                                    <div class="cont">

                                        <p>As always, excellent work! MCODE is always quick to respond, very honest,
                                            straightforward and produces great results!
                                            We use them for everything, they are a true asset!</p>
                                        <div class="info">
                                            <h6>Stringham Schools</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/m-school.png" class="usr-img-test">
                                </div>

                                <div class="item">
                                    <div class="cont">

                                        <p>I strongly encourage you to use Mcode services for your front end projects.
                                            You will be pleasantly surprised and will be very happy with the output. I
                                            have rehired them for other projects at Primeshare to doing outstanding work
                                            for us.</p>
                                        <div class="info">
                                            <h6>Anselm Kia</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/prime.png" class="usr-img-test">
                                </div>
                                <div class="item">
                                    <div class="cont">

                                        <p>MCODE were excellent, and went above and beyond to deliver a full stack
                                            product that looked beautiful and functioned as requested.
                                            Highly competent team, great communication, and would definitely work with
                                            him and his team again!</p>
                                        <div class="info">
                                            <h6>AJ Lee</h6>
                                        </div>
                                    </div>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/1.jpg" class="usr-img-test">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




        </div>
    </div>
    </div>
<?php
echo get_footer();

?>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0]; 
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
