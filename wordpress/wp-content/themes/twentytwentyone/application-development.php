<?php
/**Template Name: application-development
 * The template for displaying all aplication-development
 *Theme Name : Application-Development
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#aplication-development
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
    <title>Application Development</title>
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
                <a href="home"><img src="<?php echo esc_url(get_template_directory_uri()); ?>img/logo-light.png" alt=""></a>
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
		<section class="page-header bg-img valign parallaxie" data-background="<?php echo esc_url(get_template_directory_uri()); ?>/img/app-development.jpg" data-overlay-dark="2">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="cont text-center bred-conts">
							<h2>Development </h2>
							<h1>Application    <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Development|
							 </span> </h1>
							<h5><a href="#0">Home</a> / <a href="#0">Application Development</a></h5>
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
								<span class="overly-tts"> Integrate </span>
								<h5 class="sub-ttlss"> About Application Development  </h5>
								<h3 class="txt-tra"> Application  <br> 
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200"									data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											Development|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>As a leader in e-commerce development, Datazon can help you improve your customer journey and streamline operations through efficient app integration. Your e-commerce platform is only as good as the data it generates, and we put that data to use in the best possible way to streamline your business processes and maximize your return on investment.
								</p>
								<p>Our team can offer a full-service solution, or we can work with your existing APIs to generate customized integrations across your entire sales system. A fully integrated system has numerous benefits, from data entry to customer retention.
								</p>
								<p>With the right integration solution, customized for your business, you can manage all your data seamlessly from a central hub. A single data hub makes your current framework more efficient and allows you to capitalize on legacy data with ease.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="img-applic">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about2.jpg" alt="Arden" class="img-str">
							<span class="fero-in"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/dotted.png" alt="Arden"> </span>
						</div>
					</div>
					
				</div>
			</div>
        </section>
		<section class="aboutus ptb-80 sact bg-cgt-half pdd-80-100">
			<div class="half-ovlys">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="img-nr-alhta wow fadeInLeft">
								<div class="fcct-hover">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ecoom.jpeg"/>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="cntr-ctr-all wow fadeInRight cont-sm-fr">
								<div class="title-laa-main new-ses">
									<span class="overly-tts"> E-Commerce Platform </span>
									<h5 class="sub-ttlss scrv-afr-bfr"> About E-Commerce Platform </h5>
									<h3 class="txt-tra left-lins font-42"> Signs That You Need App Integration in Your  <br>  <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								E-Commerce Platform|
							 </span> </h3>
								</div>
								<div class="about-content cont-spac">
									<p><span class="cont">No matter what business or stage you’re in, chances are we can improve your outputs with smart app integration. If your business is stuck in some operational quagmire, we can help you even more.</span></p>
									<p><span class="cont">If you have teams dedicated to transferring data from one system to another, that’s a bad sign. All that work is something that could be automated with proper app integration. Your ERP and sales platform should be able to instantly share data if you want to remain competitive in today’s e-commerce environment.</span></p>
									<p><span class="cont">Look at your mistakes to find your weak spots. Are you making shipping errors, or are customer complaints piling up? We’ll help you identify where these errors are coming from and minimize them through app integration. </span></p>
									<p><span class="cont">If you’re always playing catch-up with competitors every time there are changes in the marketplace; your systems aren’t fast enough. Datazon’s app integration services will make it easy to implement system-wide changes as fast as they happen. </span></p>
									
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
					<div class="col-lg-6 pr-md-5">
						<div class="cntr-ctr-all wow fadeInLeft">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Access Data </span>
								<h5 class="sub-ttlss">About Access Data</h5>
								<h3 class="txt-tra"> Access Your Data When You  </br>
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200"									data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											 Need It|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>Our team will help you understand how to break down the barriers between your APIs and what that can do for your bottom line. With relevant APIs integrated, you can implement scalable, secure, and agile data management projects in a fraction of the time.
								</p>
								<p>Instead of having a large number of applications running on as many networks and producing disparate databases, a properly-integrated master hub provides everything you need under one roof. Datazon can help you identify and break down these data silos effectively and implement a solution that works for your business.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xl-5 offset-xl-1 image wow fadeInUpBig">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/access.jpeg" class="about-image" alt="">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/dotted.png" class="dotted" alt="">
					</div>
					
				</div>
			</div>
        </section>
		<section class="aboutus ptb-80 sact conts-stra">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="img-nr-alhta wow fadeInLeft">
							<div class="fcct-hover">	
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about2w.jpg"/>
							</div>
							<span class="smll-img-al">  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/photo.jpeg"/> </span>
						</div>
					</div>
					<div class="col-lg-6 pl-md-5 wow fadeInRight">
						<div class="cntr-ctr-all">
							<div class="title-laa-main new-ses">
								<span class="overly-tts"> Journey </span>
								<h5 class="sub-ttlss"> About Customer’s Journey</h5>
								<h3 class="txt-tra"> Streamline Your Customer’s <br>
									<span class="animate-typing" data-animate-loop="true" data-type-speed="200"									data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
											Journey|
								 </span>
								 </h3>
							</div>
							<div class="about-content">
								<p>All your workflows can be customized. Automation makes your job easier, but it also makes your customers happier. </p>
								<p>
									We’ll eliminate manual data management as much as possible so your customers don’t have to wait any longer than necessary when purchasing, returning products, or getting support.
								</p>
								<p>
									Datazon can also help you create more engaging customer experiences with elegant and efficient forms and API integration. Customers will be able to access your store instantly from all devices with the same speed and ease, and all the data from each device will be collected and managed functionally.
								</p>
							</div>
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
							<span class="overly-tts"> Integration </span>
							<h5 class="sub-ttlss animated fadeInLeft go">About  ERP and CRM </h5>
							<h3 class="animated pulse go"> ERP and CRM   <span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Integration
							 </span> </h3>
						</div><!-- /.theme-title -->
							<div class="row">
								<div class="col-md-12 col-lg-12 mb-5">
								  <p class="scr-txt smll wow fadeInLeftBig">We know e-commerce, but we also know enterprise management. Regardless of your e-commerce platform, you’ll need end-to-end information flow, which we can help you create with ERP integration.</p>
								  <p class="scr-txt smll wow fadeInLeftBig">If you’re still manually inputting your orders from the frontend into the ERP, it’s time to make a change. At Datazon, we create custom solutions to reduce human error and minimize manual input throughout the ERP process. An ERP system fully automated with your sales platform allows you to spend more time selling and less time worrying about whether orders are fulfilled correctly.</p>
								  <p class="scr-txt smll wow fadeInLeftBig">ERP integration will also help you reduce inventory errors and manage refunds and returns more effectively. Would you like to have channel-customized pricing and promotional offers? We can help you do that, and we’ll make sure it’s all tracked accurately.</p>
								  <p class="scr-txt smll wow fadeInLeftBig">Let us integrate your planning and management systems, and you’ll immediately see a host of benefits.</p>
								</div>
							</div>
							<div class="row wow fadeInUp">
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist left-ad  new-bos-all">
										<span class="numbrs-a"> 01. </span>
										<div class="paidcontent">
											<p>Prevent lost sales and reduce cart abandonment. Through CRM integration with your sales platform, you can produce custom notifications and additional incentives that drive sales.</p>
										</div>	
										
									</div>	
								</div>
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist right-ad  new-bos-all">
										<span class="numbrs-a"> 02. </span>
										<div class="paidcontent">
											<p>Personalized campaigns for your customers. We’ll show you how the data collected from your store can be leveraged to produce custom marketing efforts with CRM integration.</p>
										</div>	
										
									</div>	
								</div>	
								<div class="col-md-12 col-lg-12 mb-4">
									<div class="seolist left-ad  new-bos-all">
										<span class="numbrs-a"> 03. </span>
										<div class="paidcontent">
											<p>Improve your customer support. You can integrate all your CRM channels into one application. A single application allows your customer support team to serve customers better and with fewer errors.</p>
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
								<span class="overly-tts"> Benefits </span>
								<h5 class="sub-ttlss animated fadeInLeft go"> About App Integration </h5>
								<h3 class="animated pulse go"> Benefits of App Integration for <br /><span class="animate-typing" data-animate-loop="true" data-type-speed="200" data-type-delay="200" data-remove-speed="50" data-remove-delay="500" data-cursor-speed="200">
								Your Business
							 </span> </h3>
							</div>
							<div class="content-trs-al rlat-ints">
								<p> With our integration solutions, your customers will be happier and you’ll save time and money. Whether you’re selling to 100 customers or a million, you probably rely on several apps to manage your traffic. We’ll make sure all those apps work well together to produce the best possible outcome for your customers and for you.
								</p>
							</div>
                        </div>
					</div>
				</div>
				<div class="container">
					<div class="row justify-content-center wow pulse fovt">
                       <div class="col-lg-12 quote-text valign">
                            <div class="owl-carousel owl-theme virtual-slides">
								<div class="item">
									<span class="numbs-1ps"> 01. </span>
									<div class="cont-slid-al">
										<p>Automating processes between applications will save you significant labor costs associated with inputs and data management. With simple integration, we can automate communication between your sales platform and your CRM tools to eliminate manual inputs altogether.

										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/about2.jpg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 02. </span>
									<div class="cont-slid-al">
										<p>Generate better insights faster. App integration transfers data instantly and error-free. With more complex integration solutions, you can track the entire sales funnel that led to a sale as soon as the sale is completed. With sales tracking, you can create and optimize reproducible sales experiences for your customers.

										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/boost.jpeg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 03. </span>
									<div class="cont-slid-al">
										<p>Datazon can create a customized app integration strategy that produces data tailored for your specific organizational needs. Whether you need instant revenue reports, marketing insights, or customer data, the right custom integration from Datazon will make it happen.

										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/boost-web.jpg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 04. </span>
									<div class="cont-slid-al">
										<p>Reduce or eliminate human error with app integration. Tracking and inputting vast datasets across multiple platforms is bound to produce some errors. But, app integration can significantly reduce those errors and help you identify where the errors come from. Fewer errors will save you the costs of fixing them and make your customers happier.
										</p>
										<span class="bg-img-hover" style="background:url('<?php echo esc_url(get_template_directory_uri()); ?>/img/about4.jpg');"></span>
									</div>
								</div>
								<div class="item">
									<span class="numbs-1ps"> 05. </span>
									<div class="cont-slid-al">
										<p>Make changes to your entire system instantly. Whether you need to make changes to pricing or product information, you can do it instantly when all your systems are integrated. Being able to make changes through a single interface and see them implemented across your entire sales system makes you more agile and responsive to market trends.

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