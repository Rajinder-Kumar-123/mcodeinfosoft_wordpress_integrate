<?php
/**Template Name: About
 * The template for displaying all about
 *Theme Name : About
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#about
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
    <title>About Us</title>
    <!-- Google Fonts -->
	<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap"    rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/plugins.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/eocjs-newsticker.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/aos.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css" />

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
                <a href="home"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo-light.png" alt=""></a>
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
		<section class="page-header bg-img valign parallaxie" data-background="<?php echo esc_url(get_template_directory_uri()); ?>/img/about-bg.jpg"	data-overlay-dark="2">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="cont text-center bred-conts">
							<h2>ABOUT US </h2>
							<h1>KNOW  <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								MORE ABOUT US|
							 </span> </h1>
							<h5><a href="#0">Home</a> / <a href="#0">About Us</a></h5>
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
		
		<section class="aboutus ptb-80 sact">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
						<div class="img-nr-alhta ml-n20">
							<div class="fcct-hover">	
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/partn.jpeg">
							</div>
							<span class="smll-img-al">  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about2.jpg"> </span>
						</div>
					</div>
					<div class="col-lg-6 pl-md-3 aos-item aos-init aos-animate" data-aos="fade-left">
						<div class="cntr-ctr-all ">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Partner </span>
								<h5 class="sub-ttlss"> Technology Partner </h5>
								<h3 class="txt-tra"> A Technology Partner You Can <br>
									<!--span class="tct-dots"> Count On </span--> 
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200" data-animate-index="0">Count On</span>
								 
								 </h3>
							</div>
							<div class="about-content">
								<p><span class="cont">With decades of experience to draw on, our leadership group has successfully helped many global organizations in adopting more modern, scalable, and secured technology solutions. With extensive experience in software development, cloud technologies &amp; AWS Services – we help our clients implement, support, and protect their I.T. applications and infrastructure. </span></p>
								<p><span class="cont">We offer a Nearshore &amp; Offshore hybrid service model, where you can reap the benefits of quality project management and highly skilled technology professionals. With a collaborative Agile &amp; Scrum project management approach, we are able to provide transparent communication and help you Go Live quicker.</span></p>
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
										<span class="overly-tts over-tra"> HOW WE WORK </span>
										<h3 class="txt-tra"> WORK PROCESS </h3>
									</div>
								</div>
							
								<div class="row justify-content-center">
									<div class="col-lg-4 col-md-6">
										<div class="work-process-item">
											<div class="work-process-icon">
												<i class="flaticon-045-thinking"></i>
											</div>
											<div class="work-process-body">
												<span>01</span>
												<h6>Thinking</h6>
												<p>
													There are many variations of passages of Lorem Ipsum available, 
													but the majority have suffered alteration in some form..
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="work-process-item active">
											<div class="work-process-icon">
												<i class="flaticon-005-cursor"></i>
											</div>
											<div class="work-process-body">
												<span>02</span>
												<h6>Research</h6>
												<p>
													There are many variations of passages of Lorem Ipsum available, 
													but the majority have suffered alteration in some form..
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="work-process-item">
											<div class="work-process-icon">
												<i class="flaticon-047-interface-1"></i>
											</div>
											<div class="work-process-body">
												<span>03</span>
												<h6>Design</h6>
												<p>
													There are many variations of passages of Lorem Ipsum available, 
													but the majority have suffered alteration in some form..
												</p>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
		
		
	
	</div>
   </div>

   <?php 
		echo get_footer();
   ?>
   
</body>
</html>