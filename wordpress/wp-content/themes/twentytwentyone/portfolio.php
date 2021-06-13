<?php
/**Template Name: portfolio
 * The template for displaying all portfolio
 *Theme Name : portfolio
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#portfolio
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
    <title>Portfolio</title>
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
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" />
<style>
.row,
.row > .column {
  padding: 15px;
}

.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.content {
  background-color: white;
  padding: 0px;
  height:300px;
  position:relative;
  overflow: hidden;
}
.content img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.show {
  display: block;
}

.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

.info-area {
    position: absolute;
    bottom: 0;
    background: rgba(0,0,0,0.75);
    width: 100%;
    text-align: left;
    padding: 10px 10px;
    color: #fff;
}.info-area p{
	color:#fff;
}.info-area h4 {
    font-size: 20px;
    padding: 10px 5px;
    font-weight: 400;
}

.btn.active {
    background-color: #e31e24;
}
.lb-dataContainer {
    position: absolute !important;
    top: -16px !important;
    right: -39em!important;
    z-index: 9999999999;
    left: 0;
    background: #e31e24;
    width: 35px!important;
    border-radius: 33px;
    box-shadow: 1px 4px 15px #6f6f6f;
}
.lb-data .lb-close {
    width: 28px;
    height: 28px;
    background-size: 20px 20px;
    background-position: top center;
}
.lb-data .lb-details{display:none;}
.lb-outerContainer {
    position: relative;
    background-color: #fff;
    width: 250px;
    height: 250px;
    margin: 0 auto;
    border-radius: 4px;
    width: 558px!important;
    height: 558px!importnat;
    height: 100%!important;
}
.lightbox .lb-image {
    display: block;
    height: auto;
    max-width: inherit;
    border-radius: 3px;
    width: 100%!important;
    height: 100%!important;
}

.lightbox {
    position: absolute;
    left: 0!important;
    width: 100%;
    z-index: 10000;
    font-weight: 400;
    
    /* display: flex!important; */
    justify-content: center;
    align-items: center;
}
.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    background: #e31e24 !important;
}
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    border: 1px solid #e31e24;
    cursor: pointer;
    border-radius: 0;
}
.btn-curve.btn-lit {
    border-color: #000;
    color: #000;
}


.btn-curve.btn-lit:after {
    background: #e31e24;
}

@media (max-width:991px){
.content {
    background-color: white;
    padding: 0px;
    height: 100%;
    position: relative;
    overflow: hidden;
}
}
@media only screen and (max-width: 767px){
.lb-dataContainer {
    left: 9px;
    right: 0!important;
    margin: 0;
}
.aboutus .content {
    padding: 0px 0px 0 30px !important;
}
.row, .row > .column {
    padding: 15px;
    width: 100%;
}
.lb-outerContainer {

    width: 90%!important;
 
}
.lightboxOverlay {
    width: 100%!important;
}
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
                <span>Start New Project</span>
            </a>
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
                                    <span class="link dmenu">Company</span>
                                </div>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <span class="sub-link back">Go Back <i
                                                        class="fas fa-long-arrow-alt-right"></i></span>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <span class="sub-link mainmenu">Company</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">About Mcode</a>
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
								  <span class="link dmenu">Technology</span>
                                  
                                </div>
								 <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <span class="sub-link back">Go Back <i class="fas fa-long-arrow-alt-right"></i></span>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <span class="sub-link mainmenu">Technology</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Ecommerce Development</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Data Science</a>
                                            </div>
                                        </li>
										 <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">App Integration </a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Cyber Security </a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Virtual Reality</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-link" data-menu-bg="designbg">
                                <div class="o-hidden">
								 <span class="link dmenu">Design</span>
                                </div>
								 <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <span class="sub-link back">Go Back <i class="fas fa-long-arrow-alt-right"></i></span>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <span class="sub-link mainmenu">Design</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Web UI Design</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Mobile UI Design</a>
                                            </div>
                                        </li>
										 <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Graphic Design</a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Virtual Reality Design</a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Animation</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-link" data-menu-bg="marketingbg">
                              
								 <div class="o-hidden">
								 <span class="link dmenu">Marketing </span>
                                </div>
                          
                               
								 <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <div class="o-hidden">
                                                <span class="sub-link back">Go Back <i class="fas fa-long-arrow-alt-right"></i></span>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <span class="sub-link mainmenu">Marketing</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Affiliate Marketing</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Search Marketing</a>
                                            </div>
                                        </li>
										 <li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Social Marketing</a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Content Creation</a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Paid Advertising</a>
                                            </div>
                                        </li>
										<li>
                                            <div class="o-hidden">
                                                <a href="javascript:void(0)" class="sub-link">Marketing Analytics</a>
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
						 <a href="javascript:void(0)" class="btn-curve btn-lit mt-2"><span>Get Started</span></a>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
	
	


<!--<section class="imagen-light">
  <i class="fas fa-times close"></i>
  <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
</section>-->


    <div class="wrapper">
	<div class="main ">
		<section class="page-header bg-img valign parallaxie" data-background="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg.jpeg" data-overlay-dark="2" style="background-position: 0px -220px !important;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="cont text-center bred-conts">
							<h2>PORTFOLIO</h2>
							<h1>PORT<span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								FOLIO
							 </span> </h1>
							<h5><a href="#0">Home</a> / <a href="#0">PORTFOLIO</a></h5>
						</div>
					</div>
				</div>
			</div>
			<div class="waves-desis">
				<div class="inner-header flex">
					<svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
						<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
						<g>
						<path fill="#fff" d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
						C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
						c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
						</g>
					</svg>
				</div>
				<div>
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
						<defs>
							<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
						</defs>
						<g class="parallax">
							<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
							<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
							<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
							<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
						</g>
					</svg>
				</div>
			</div>
		</section>
		<section class="aboutus ptb-80 sact conts-stra pb-3 " id="gallery">
			<div class="container">
				  


<div id="myBtnContainer" style="text-align: center;margin-bottom: 40px;">
	<button class="btn btn-curve btn-lit col-resa active" onclick="filterSelection('all')"><span>See All</span></button>
	<button class="btn btn-curve btn-lit col-resa" onclick="filterSelection('nature')"><span>Application</span></button>
	<button class="btn btn-curve btn-lit col-resa" onclick="filterSelection('cars')"><span>Websites</span>


	 </button>
	<button class="btn btn-curve btn-lit col-resa" onclick="filterSelection('people')"><span>Admin Portals</span>


	</button>
</div>

<!-- Portfolio Gallery Grid -->
	<div class="row">
		
		
		
		<div class="column all">
			<div class="content">
			<a href="projects/abacus.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/abacus-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>Project Name</h4>
				</div>
			</div>
		</div>
	  
		<div class="column cars">
			<div class="content">
			<a href="projects/ab-music.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/ab-music–thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>Ab Music</h4>
				</div>
			</div>
		</div>
		
		<div class="column cars">
			<div class="content">
			<a href="projects/church.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/ projects/church-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>Church Website</h4>
				</div>
			</div>
		</div>
		
		<div class="column cars">
			<div class="content">
			<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/Hidden-Heals.jpg" data-lightbox="homePortfolio">
        <img src="projects/Hidden-Heal–thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>Hidden Deals</h4>
				</div>
			</div>
		</div>
		<div class="column cars">
			<div class="content">
			<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/jbi.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/jbi-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
			
				
				<div class="info-area">
					<h4>Jbi</h4>
				</div>
			</div>
		</div>
		<div class="column cars">
			<div class="content">
			<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/magic-city.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/magic-city-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>Magic City</h4>
				</div>
			</div>
		</div>
		<div class="column cars">
			<div class="content">
			
				<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/NDDA.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/NDDA–thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>NDDA </h4>
				</div>
			</div>
		</div>
		

		<div class="column people">
			<div class="content">
			<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/primeshareadmin.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/primeshareadmin-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Prime Share Admin</h4>
				</div>
			</div>
		</div>
		
		<div class="column people">
			<div class="content">
			<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/sport-deal–admin.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/spot-deal–thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				<div class="info-area">
					<h4>Spot your deal</h4>
				</div>
			</div>
		</div>
		
		<div class="column cars">
			<div class="content">
				<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/souqalfekra.jpg " data-lightbox="homePortfolio">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/souqalfekra-thumbnail.jpg" alt="Lights" style="width:100%">
        
      </a>
				
				<div class="info-area">
					<h4>Souqalfekra</h4>
				</div>
			</div>
		</div>
		<div class="column cars">
			<div class="content">
				<a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/Victoriya.jpg " data-lightbox="homePortfolio">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/Victoriya–thumbnail.jpg" alt="Lights" style="width:100%">
        
      </a>
				
				<div class="info-area">
					<h4>Victoriya</h4>
				</div>
			</div>
		</div>
		
		<div class="column nature">
			<div class="content">
			 <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app1.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app1-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Quickfix</h4>
				</div>
			</div>
		</div>
		<div class="column nature">
			<div class="content">
			  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app2.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app2-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Smart Friendly</h4>
				</div>
			</div>
		</div>
		<div class="column nature">
			<div class="content">
			  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app3.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app3-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Laundr Life</h4>
				</div>
			</div>
		</div>
		<div class="column nature">
			<div class="content">
			 <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app4.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app4-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Paypay</h4>
				</div>
			</div>
		</div>
		<div class="column nature">
			<div class="content">
			 <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app5.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app5-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Rewards</h4>
				</div>
			</div>
		</div>
				<div class="column nature">
			<div class="content">
			  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app6.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app6-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Flame</h4>
				</div>
			</div>
		</div>
				<div class="column nature">
			<div class="content">
			  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app7.jpg" data-lightbox="homePortfolio">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/projects/app7-thumbnail.jpg" alt="Lights" style="width:100%">
      </a>
				
				
				<div class="info-area">
					<h4>Shop My</h4>
				</div>
			</div>
		</div>
	
	  
	<!-- END GRID -->
	</div>
			</div>
        </section>
	</div>
   </div>

    <?php
           echo get_footer();
    ?>
	
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

$(".btn ").click(function () {
    $(".btn").removeClass("active");
	$(this).addClass("active");      
});
</script>
</body>
</html>