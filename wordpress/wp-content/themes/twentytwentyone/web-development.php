<?php
/**Template Name: web-development
 * The template for displaying all web-development
 *Theme Name : Web-Development
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#web-development
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
    <title>Web Development</title>
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
		<section class="page-header bg-img valign parallaxie" data-background="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg.jpeg" data-overlay-dark="2" style="background-position: 0px -220px !important;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="cont text-center bred-conts">
							<h2>WEB DEVELOPMENT</h2>
							<h1>Web   <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Development
							 </span> </h1>
							<h5><a href="#0">Home</a> / <a href="#0">Web Development</a></h5>
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
		<section class="aboutus ptb-80 sact conts-stra pb-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="cntr-ctr-all wow fadeInLeft">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Development </span>
								<h5 class="sub-ttlss"> About Web Development  </h5>
								<h3 class="txt-tra"> Web <br /><span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											Development|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>We provide e-commerce development solutions with your brand in mind. Our team of experienced developers will work with you to understand your business and audience to come up with a custom solution or help you implement a readymade framework that fits your needs. Through a systematic analysis of your current e-commerce site, we can also implement changes to help you phase out legacy software and manage your store more efficiently.
								</p>
								<p>Using the latest best practices and technologies, we can develop a new storefront from scratch or help you migrate to a platform that better suits your needs. We complement our core competencies in web and mobile development with an understanding of the latest implementations of virtual reality in the retail and wholesale industries.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="about-thumb about-thumb-right-align wow fadeInRight">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/macbook-2.png" alt="">
						</div>
					</div>
					
				</div>
			</div>
        </section>
		<section class="aboutus ptb-80 sact bg-cgt-half pdd-80-100">
			<div class="half-ovlys">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="img-nr-alhta wow fadeInLeft">
								<div class="fcct-hover">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/devlopment.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="cntr-ctr-all wow fadeInRight">
								<div class="title-laa-main new-ses">
									<span class="overly-tts"> SOLUTION </span>
									<h5 class="sub-ttlss scrv-afr-bfr"> About Solution </h5>
									<h3 class="txt-tra left-lins font-52"> Find   <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Solution|
							 </span> </h3>
								</div>
								<div class="about-content cont-spac">
									<p><span class="cont">An out of the box e-commerce platform may not be right for all businesses. Your platform may have been a good option when you were starting, but it may no longer meet your needs as your business grows.</span></p>
									<p><span class="cont">With a thorough analysis of your storefront and performance, you can get insight into whether or not a platform migration is the right fit for you. The right platform can make all the difference, and each has significant potential benefits.</span></p>
									<p><span class="cont">We can help you implement, manage and support your Shopify, Magento, BigCommerce, WooCommerce, or any other readily-available ecommerce platform. We also specialize in custom ecommerce development so that we could provide you a solution that meets your unique business challenges and needs. </span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
		<section class="aboutus ptb-80 sact about pt-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 pl-md-5">
						<div class="cntr-ctr-all wow fadeInLeft">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Functionality </span>
								<h5 class="sub-ttlss">About Functionality</h5>
								<h3 class="txt-tra"> Custom  </br>
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200"									data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											Functionality|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>We’ll help you get the most out of your existing technology by working closely with your team to determine the best custom configuration. Custom workflows, extensions, and applications will help you align your web presence with your physical capabilities. The right e-commerce solution will not only generate sales but streamline end-to-end operations.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xl-5 offset-xl-1 image wow fadeInUpBig">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/function1.jpeg" class="about-image" alt="">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/dotted.png" class="dotted" alt="">
					</div>
					
				</div>
			</div>
        </section>
		<section class="offpage pt-100 pb-120 aboutus ptb-80 sact conts-stra bg-white">
		  	<div class="container">
				<div class="row">
					<div class="col-lg-6 seoleft p-0  wow pulse">
						<div class="seoimg beforeimg height-100 bg-img" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/about4.jpg');"></div>
						<span class="before-bordt"></span>
					</div>
					<div class="col-lg-6  offpage-p-l  seoright   wow fadeInRight">
						<div class="cntr-ctr-all contn-pssnd  pl-md-5">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Optimization </span>
								<h5 class="sub-ttlss"> About Optimization</h5>
								<h3 class="txt-tra"> User Experience </br>
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200"									data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											Optimization|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>Working with experienced designers, our development team can set up a strong foundation for your e-commerce store with your customers in mind. From the initial wireframes to the architecture and final implementation, we make sure that your users are satisfied and you have a useful solution. Through an optimization loop, we can look for chances to constantly make your e-commerce solution better and more attractive for users.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 seoright offpage-p-r  order2 wow fadeInLeftBig" >
						<div class="cntr-ctr-all contn-pssnd pr-md-5">
							<div class="title-laa-main new-ses wow fadeInLeft">
								<span class="overly-tts"> Scaling </span>
								<h5 class="sub-ttlss"> About  Support and Scaling </h5>
								<h3 class="txt-tra"> Support and  <br>
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200"									data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											Scaling|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>
									Our service doesn’t stop after your website launches. We’ll be with you every step of the way until your e-commerce solution is everything you expect it to be. As your business grows, so should your online store. With a dedicated support staff, we can make sure every aspect of your storefront scales adequately and you wouldn’t lose customers to shoddy functionality.
								</p>
							</div>
						</div>
					</div>
			  		<div class="col-lg-6 seoleft  p-0 wow pulse">
						<div class="seoimg beforeimg height-100 bg-img after-bordr " style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/market21.jpg');">
							<span class="aftr-bordt"></span>
						</div>
						
					</div>
				</div>
			</div>
        </section>
		
		
		<section class="marketing-scta new-clousa slow-nsts seoservice2 paidad3 bg-white pb-0"> 
			<div class="core-features bg-image">
				<div class="opacity">
					<div class="container">
						<div class="title-laa-main new-ses wow fadeInLeftBig">
							<span class="overly-tts"> Mobile Development </span>
							<h5 class="sub-ttlss animated fadeInLeft go">About Mobile Development</h5>
							<h3 class="animated pulse go"> Mobile  <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Development
							 </span> </h3>
						</div><!-- /.theme-title -->
							<div class="row">
								<div class="col-md-12 col-lg-12 mb-5">
								  <p class="scr-txt smll wow fadeInLeftBig">Mobile traffic is a key profit driver that you need to focus on for a successful e-commerce strategy. More customers are using mobile devices to browse than ever before. We can create a mobile-friendly solution for you or optimize your current e-commerce solution for mobile users. Mobile commerce provides many crucial benefits for your business:</p>
								</div>
							</div>
							<div class="row wow fadeInUp">
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist left-ad  new-bos-all">
										<span class="numbrs-a"> 01. </span>
										<div class="paidcontent">
											<p>Mobile-friendly websites provide easy access to your store. While most users still buy on desktops, the overwhelming majority do their browsing on mobile devices. Your customers can take your storefront with you in their pocket and make decisions regarding their pain points, where purchasing decisions are most emotionally-driven.</p>
										</div>	
										
									</div>	
								</div>
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist right-ad  new-bos-all">
										<span class="numbrs-a"> 02. </span>
										<div class="paidcontent">
											<p>A better user experience. As mobile devices are made to enhance user experience, you can take advantage of their features to provide better engagement with your customers. Our team will work with you to develop a mobile solution that is fast, convenient, and interactive. A smoother user experience increases conversion rates but also increases repeat business.</p>
										</div>	
										
									</div>	
								</div>	
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist left-ad  new-bos-all">
										<span class="numbrs-a"> 03. </span>
										<div class="paidcontent">
											<p>Expands your customer base and creates new marketing channels. Some younger users mostly or only use mobile devices to shop. We’ll create a mobile-friendly site using the latest trends in mobile UX design, which appeals to your customer base.</p>
										</div>	
										
									</div>	
								</div>
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist right-ad  new-bos-all">
										<span class="numbrs-a"> 04. </span>
										<div class="paidcontent">
											<p>Give your users a responsive experience on their device. Our mobile solutions will help keep you competitive in today’s market and make sure you keep up with tech innovations in responsive design. Our responsive development can improve user experience but also helps improve your SEO through better site usability, faster load speeds, and decreased bounce rates.</p>
										</div>	
										
									</div>	
								</div>	
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist left-ad  new-bos-all">
										<span class="numbrs-a"> 05. </span>
										<div class="paidcontent">
											<p>It helps you sell locally and personalize your customer’s experience. We’ll help you identify and take advantage of substantial data available from mobile users. Through push notifications and location tracking, you’ll gain a better understanding of your audience’s preferences and habits, which can inform your future decisions.</p>
										</div>	
										
									</div>	
								</div>
								</div>	
							</div>	
						
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div>
		</section>
		
		
		<section class="portfolio ptb-80 pb-80 prt-new-rond trstd-parts">
				<div class="container wow fadeInLeftBig">
                    <div class="row">
						<div class="col-lg-12">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Virtual Reality </span>
								<h5 class="sub-ttlss animated fadeInLeft go"> About API Integration </h5>
								<h3 class="animated pulse go"> API   <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Integration
							 </span> </h3>
							</div>
							<div class="content-trs-al rlat-ints">
								<p> Virtual reality is the most exciting new technology disrupting e-commerce. If you want your store to 		have the edge over your competition, virtual reality integration is the best way to do it. With VR equipment getting more affordable every day, VR headsets will soon be a household appliance.
								Our team can enable VR solutions for your store that directly impact conversion rates and sales. Even in its nascent stage, VR presents a novel way to engage with your target market and lure new customers. These 	are only some of the ways we can help you:
								</p>
							</div>
                        </div>
					</div>
				</div>
				<div class="container">
					<div class="row justify-content-center wow pulse">
                       <div class="col-lg-12 quote-text valign">
                            <div class="owl-carousel owl-theme virtual-slides">
								<div class="item">
									<span class="numbs-1ps"> 01. </span>
									<div class="cont-slid-al">
										<p>Your customers can visualize and try your products in VR, without ever laying eyes on it. Helping your customers see a product in space rather than just on a screen gives them a much better shopping experience.
										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/about2.jpg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 02. </span>
									<div class="cont-slid-al">
										<p>We can help you create an emotional connection with your customers through VR storytelling. In a VR environment, your customers can try on not just the products you sell but the entire experience those products promise.
										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/boost.jpeg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 03. </span>
									<div class="cont-slid-al">
										<p>Virtual showrooms make buying experiences much easier, especially when it comes to large purchases. With VR integration, your customers can browse items in a familiar shopping environment instead of scrolling through listings online.
										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/boost-web.jpg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 04. </span>
									<div class="cont-slid-al">
										<p>Using VR shopping environments can help you improve and optimize the layout of your brick-and-mortar stores at a fraction of the cost. With virtual reality, we’ll help you run tests with hundreds of store layouts in the time it would take you to redesign a single physical store.
										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/about4.jpg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 05. </span>
									<div class="cont-slid-al">
										<p>You can use VR shopping environments to educate customers about your products. By grouping complementary products logically in a virtual space, you can guide customers to make better purchasing decisions.
										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/impression.jpeg');"></span>
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