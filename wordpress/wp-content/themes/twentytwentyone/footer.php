<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			<footer class="min-fflt" id="sctin-foot">
        <div id="new-foots">
            <footer class="footer new-foots" id="new-foots">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="home.php"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo-light.png" alt=""></a>
                        </div>
                        <div class="col-lg-21 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="footer-menu text-center">
                                <ul>
                                    <li><a href="home" id="home">Home</a></li>
                                    <li><a href="about" id="about">About Mcode</a></li>
                                    <li><a href="services" id="services">Services</a></li>
                                    <li><a href="contactM" id="contactM">Contact us</a></li><br>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/facebook-2.png" alt="">
                                   
                                </ul>
                            </div>

                            <div class="footer-copyright text-center mt-3">
                                <p> © Copyright <?php echo date("Y"); ?> <a href="javascript:void(0)">Mcode</a> . All
                                    rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div id="project-ffotr">
            <div class="project-ffotr">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="content-all-stre">
                                <div class="tct-tcr-al">
                                    <span class="ovrl-txrs"> Hire Us </span>
                                    <h2> Let’s work <span class="animate-typing" data-animate-loop="true"
                                            data-type-speed="200" data-type-delay="200" data-remove-speed="50"
                                            data-remove-delay="500" data-cursor-speed="200">
                                            together
                                        </span></h2>
                                </div>
                                <a href="javascript:void(0)" class="btn-curve btn-lit">
                                    <span>Start a Project</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cycle-move">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cycle.gif" class="sizr-cuts">
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-3.0.0.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/plugins.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/scripts.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/eocjs-newsticker.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/parallax.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/vanilla-tilt.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/owl.carousel.js"></script>
<script>
    $('.testimon-slider').owlCarousel({
        loop:true,
        margin:0,
        center: true,
        dots: true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })
    
    $('.virtual-slides').owlCarousel({
        loop:true,
        margin:15,
        stagePadding:0,
        center: true,
        nav:false,
        autoHeight:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })
    
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:15,
        stagePadding: 270,
        center: true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
<!-- <script src="js/scrollspy.js"></script> -->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/simplebar.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.animateTyping.js"></script>
<script>

$(document).ready(function(){
$(".topnav .menu-icon ").click(function(){
$(".menu-icon").toggleClass('addicon');
});

$('.hamenu .menu-links .main-menu > li.menu-link').hover(function() {
var myEm = $(this).attr('data-menu-bg');
//alert(myEm);

   $('.menu-bg[data-menu-bg = '+myEm+']').toggleClass('active');
  

});

});


</script>
<script>


$(document).ready(function(){
var footer_height=$("#project-ffotr").height();
$("#new-foots").css({
    'padding-bottom' : footer_height
});
});

$(window).scroll(function() {    
var scroll = $(window).scrollTop();

if (scroll >= 500) {
    $("body").addClass("header-menu-fx");
} else {
    $("body").removeClass("header-menu-fx");
}
});
</script>
<?php wp_footer(); ?>
