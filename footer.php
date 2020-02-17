<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
	</div><!-- #content -->

	<footer class="footer-sec">
            <div class="container">
                <div class="row">
                    <div class="vcenter col-lg-8 col-sm-7 col-xs-12">
                        <div class="left-box">
                            <img src="<?php the_field('logo','option');?>" alt="">
                            <?php the_field('about_us','option');?>
                            <ul class="social-area landing-social">
                                <li>
                                    <a href="<?php the_field('facebook','option');?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/l-faceboo-icon.png">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php the_field('twitter','option');?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/l-twitter-icon.png"> 
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php the_field('youtube','option');?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/l-you-tube-icon.png">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php the_field('instagram','option');?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/l-inst-icon.png">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php the_field('linkedin','option');?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/l-linkedin-icon.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="vcenter col-lg-3 col-sm-5 col-xs-12">
                        <div class="right-box footer-list">
                            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

                            
                            <div class="rows">
                                <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>" class="btn pink-btn">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="landing-footer">
                        <span>
                            <?php the_field('copyright','option');?>
                        </span>
                        <a href="<?php echo get_page_link(3); ?>" class="privacy-menu">
                            Privacy Policies
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-1.9.1.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.fancybox.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootbox.min.js"></script>
<?php wp_footer(); ?>   
    <style type="text/css">
        .Learn-more-btn:hover, .Learn-more-btn:focus{    background: #45b3c6 !important;}
        .woocommerce-checkout .woocommerce-remove-coupon{display: none;}
        .xoo-wsc-total-sales{display: none !important;}
        .xoo-wsc-basket {
            padding: 0;
            border-radius: 2px;
            margin: 0;
            box-shadow: none;
            background:#f34173 url(<?php echo get_template_directory_uri();?>/assets/img/cart-icon.png) no-repeat 50% 50%;
            bottom: -2px;
            position: relative;
        }
    </style>

    <div class="lds-ring"><div>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '374260589757002'); 
        fbq('track', 'PageView');
    </script>
    <noscript>
         <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=374260589757002&ev=PageView
        &noscript=1"/>
    </noscript>
        <!-- End Facebook Pixel Code -->
        <script type="text/javascript">

            // vertical tab;
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {

                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {

                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
			
            $(document).ready(function() {
                $('.jqCartView').on('click',function(){
                    $('#jqCartViewModel').modal('show');
                });
                

                $('.navbar-nav li a').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if (target.length) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: target.offset().top
                        }, 2000);
                    }
                });
               
                $('.nav li a').click(function(event){
                    //event.preventDefault();
                    $(this).toggleClass('active');
                });

                // Remove class??
                $('.nav li a').click(function(event){
                    //event.preventDefault();
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                    }
                });
                $('.most-function-slider').owlCarousel({
                    loop:true,
                    dots: true,
                    autoplay:false,
                    autoplayTimeout:3000,
                    autoHeight:true,
                    autoplayHoverPause:false,
                    responsive:{
                        0:{
                            items:1
                        },
                        767:{
                            items:1,
                            autoHeight:true
                        },
                        1000:{
                            items:1
                        }
                    }
                })
            });

            var gallerytab = {
                loop:false,
                autoWidth:true,
                margin: 3,
                navText: false,
                nav: true,
                dots: false,
                responsive:{
                    0:{
                        items:4
                    },
                    600:{
                        items:4
                    },
                    1000:{
                        items:4
                    }
                }
            };

            jQuery('body').on('click','.remove-overlay a',function(){
                $('body').css('overflow', 'auto')
                $(".navbar-collapse").removeClass("in");
                window.setTimeout(function() {
                    $(".jq_overlay_toogle").removeClass("active");
                }, 300);
            });

            function setCarousel(params) {
                var selectorType = ".";
                if (params.selectorType == "id") {
                    selectorType = "#";
                }
                if (window.innerWidth > 992) {
                    if ($(selectorType + params.selector).hasClass(params.newClass) === true) {
                        $(selectorType + params.selector).removeClass(params.newClass);
                        window.location.reload(true);
                    }
                } else if (window.innerWidth <= 992) {
                    $(selectorType + params.selector).addClass(params.newClass);
                    $(selectorType + params.newClass).owlCarousel(params.owlData);
                }
            }

            $(window).load(function() {
                setCarousel({
                    'selector': "jq-gallery-name",
                    'newClass': "owl-carousel",
                    'selectorType': 'class',
                    'owlData': gallerytab
                });
            });

            $(window).resize(function() {
                setCarousel({
                    'selector': "jq-gallery-name",
                    'newClass': "owl-carousel",
                    'selectorType': 'class',
                    'owlData': gallerytab
                });
            });

            $.urlParam = function (name) {
                var results = new RegExp('[\?&]' + name + '=([^&#]*)')
                                  .exec(window.location.search);

                return (results !== null) ? results[1] || 0 : false;
            }

            if($.urlParam('tag') == 'plug-play'){
                $('#collapsetwentyone').addClass('in');
            }
            if($.urlParam('tag') == 'protect-privacy'){
                $('#collapsetwentyfour').addClass('in');
            }

            if($.urlParam('tag') == 'ifttt-support'){
                $('#collapsetwentynine').addClass('in');
            }

            if($.urlParam('tag') == 'real-time'){
                $('#collapsetwentyeight').addClass('in');
            }
            
            jQuery('button.add_to_cart_button').click(function(){
                $('.lds-ring').fadeIn();
            });            

            $(".example-toggle").click(function() {
                $('html,body').animate({scrollTop: $(".gallery-section").offset().top}, 1500);
            });
            $(".navbar-nav").prepend('<li class="remove-overlay"><a href="javascript:void(0);"><span>MENU</span><img src="<?php echo get_template_directory_uri();?>/assets/img/close-menu-icon.png" alt=""></a></li>'); 
            $(".navbar-nav").append('<li class="order-menu-btn"><a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>">Order</a></li>');

        </script>
        <script type="text/javascript" src="https://embed.swivl.chat"></script>

<script>Swivl.embed('h1JpVcNGG5');</script>


		
</body>
</html>
