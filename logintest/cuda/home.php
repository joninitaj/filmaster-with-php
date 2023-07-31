<?php 
session_start(); 
include "db_conn.php";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cuda</title>

<!--MOBILE VIEW-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!--FONTS-->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,600,700' rel='stylesheet' type='text/css'>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery.classyloader.min.js"></script>
<script src="js/filterable.pack.js"></script>
<script src="js/responsive-nav.js"></script>
<script src="js/script.js"></script>
<script src="js/waypoints.min.js"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
        
</head>

<body>
<!-- Paste this code after body tag -->
 <div class="se-pre-con"></div>
 <!-- Ends -->
 
 
<!--HEADER-->
<div id="home">
<header>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            
        	<h1 class="logo"><a href="#home">Cuda</a></h1>
            <nav  class="nav-collapse">
            	<ul>
                	<li class="menu-item active"><a href="#home">Home</a></li>
                    <li class="menu-item"><a href="#service">Services</a></li>
                    <li class="menu-item"><a href="#team">Team</a></li>
                    <li class="menu-item"><a href="#skill">Skills</a></li>
                    <li class="menu-item"><a href="#portfolio">Portfolio</a></li>
                    <li class="menu-item"><a href="#contact">Contact</a></li>
                </ul>
            </nav> 
          </div> 
       </div>
     </div>
</header>  
</div> 
<section class="wrapper" id="banner">
	<div class="container">   
        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
        	<p  class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Hi there! Have you ever wished for free netflix? or that the free movie websites have alot of ads. Well Filmaster is here to complete that wish . We are one  of few  free movie websites that have no ads</p>
            
          
					<a href="logintest/index.php" class="os-animation btn btn-2 btn-2a" data-os-animation="zoomIn" data-os-animation-delay="0.5s">Login/register</a>
             </div>       
        </div>
    </div>
</section>

<!--SERVICES-->
<section class="wrapper" id="service">
	<div class="container">
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">SERVICES WE PROVIDE</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s"></p>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
                	<div class="imageheight">
                    	<img src="images/branding.png" alt="Branding">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Branding</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
                	<div class="imageheight">
                    	<img src="images/design.png" alt="Design">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Design</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>
           <div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
                	<div class="imageheight">
                    	<img src="images/development.png" alt="Development">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Development</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
                	<div class="imageheight">
                    	<img src="images/rocket.png" alt="Rocket Science">
                    </div>
                    <figcaption>
                        <h3 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">Rocket Science</h3>
                        <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<!--TEAM-->
<section class="wrapper" id="team">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">MEET OUR BEAUTIFUL TEAM</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">We are a small team of designers and developers, who help brands with big ideas.</p>
                
            </div>
        </div>
        
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>ANNE HATHAWAY</h4>
                    <span>CEO / Marketing Guru</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                	<a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
               </figcaption>
            </figure>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>KATE UPTON</h4>
                    <span>Creative Director</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
                </figcaption>
            </figure>
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>OLIVIA WILDS</h4>
                    <span>Lead Designer</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                	<a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
                </figcaption>
            </figure>
         </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
        	<figure class="os-animation" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
            	<img src="images/blackimage.png" alt="image">
                
                <figcaption>
                	<h4>ASHLEY GREENE</h4>
                    <span>SEO / Developer</span>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                    
                    <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                	</div>
                </figcaption>
            </figure>
         </div>
            
        </div>
    </div>
</section>

<!--SKILL-->
<section class="wrapper" id="skill">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">WE GOT SKILLS!</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
        				<div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.5s">
                                <div class="clearfix">
                                    <canvas class="loader"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader').ClassyLoader({
                                                percentage: 90,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(48,186,231,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                    
                                </div>
                                <span>Web Design</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.7s">
                                <div class="clearfix">
                                    <canvas class="loader1"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader1').ClassyLoader({
                                                percentage: 75,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(215,70,128,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                </div>
                                <span>HTML/CSS</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="0.9s">
                                <div class="clearfix">
                                    <canvas class="loader2"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader2').ClassyLoader({
                                                percentage: 70,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(21,199,168,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                </div>
                                <span>GRAPHIC DESIGN</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="os-animation block" data-os-animation="fadeInDown" data-os-animation-delay="1.1s">
                                <div class="clearfix">
                                    <canvas class="loader3"></canvas>
                                    <script>
                                        $(document).ready(function() {
                                            $('.loader3').ClassyLoader({
                                                percentage: 85,
                                                speed: 20,
                                                fontSize: '40px',
                                                diameter: 80,
                                                lineColor: 'rgba(235,125,75,1)',
                                                remainingLineColor: 'rgba(223,232,237,0.4)',
                                                lineWidth: 12
                                            });
                                        });
                                    </script>
                                </div>
                               	<span>UI/UX</span> 
                            </div>
                        </div>
        </div>
    </div>
</section>

<!--PORTFOLIO-->
<section class="wrapper" id="portfolio"> 
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">OUR PORTFOLIO</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam</p>
            </div>
        </div>
        <div class="row clearfix">
       		<div class="col-lg-12 col-md-12 col-sm-12">
    		<div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s"> 
                <ul id="portfolio-filter">
                    <li><a href="#all" title="">All</a></li>
                    <li><a href="#web" title="" rel="web">WEB</a></li>
                    <li><a href="#apps" title="" rel="apps">APPS</a></li>
                    <li><a href="#icons" title="" rel="icons">ICONS</a></li>
                </ul>
		
                <ul id="portfolio-list" class="clearfix">
                                <li style="display: block;" class="web icons">
                                        <a href="#"><img src="images/portimg1.png" alt=""></a>
                                    <p>
                                        Isometric Perspective Mock-Up
                                    </p>
                                </li>
                                <li style="display: block;" class="apps">
                                        <a href="#"><img src="images/portimg2.png" alt=""></a>
                                    <p>
                                        Time Zone App UI
                                    </p>
                                </li>
                                <li class="apps icons">
                                        <a href="#"><img src="images/portimg3.png" alt=""></a>
                                    <p>
                                        Viro Media Players UI
                                    </p>
                                </li>
                                <li class="web icons">
                                        <a href="#" title=""><img src="images/portimg4.png" alt=""></a>
                                    <p>
                                        Blog / Magazine Flat UI Kit
                                    </p>
                                </li>
                            
                    
                        <li style="overflow: hidden; clear: both; height: 0px; position: relative; float: none; display: block;"></li>
                </ul>
              </div>  
        	</div>
         </div> 
         <div class="row">
         	<div class="col-lg-12 col-md-12 col-sm-12"> 
       		 <a href="#" class="os-animation btn1 btn-21 btn-2a1" data-os-animation="zoomIn" data-os-animation-delay="0.5s">LOAD MORE PROJECT</a>
        </div>
     </div>
  </div>
</section>	

<!--ABOUT US-->
<section class="wrapper" id="about">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">WHAT POEPLE SAY ABOUT US</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">Our clients love us!</p>
            </div>
        </div>
        <div class="row">
        	 <div class="col-lg-6 col-md-6 col-sm-6">
            	<div class="os-animation testimonial clearfix" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
                	<div class="testimage">
                		<img src="images/blackimagesmall.png" alt="">
                    </div>
                    <div class="righttest">
                    	<blockquote>
                        	“Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”
                        </blockquote>
                        <span>Chanel Iman</span>
                        <span class="smalltest">CEO of Pinterest</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
            	<div class="os-animation testimonial clearfix" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
                	<div class="testimage">
                		<img src="images/blackimagesmall.png" alt="">
                    </div>
                    <div class="righttest">
                    	<blockquote>
                        	“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”
                        </blockquote>
                        <span>ADRIANA LIMA</span>
                        <span class="smalltest">Founder of Instagram</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
            	<div class="os-animation testimonial clearfix" data-os-animation="fadeIn" data-os-animation-delay="0.7s">
                	<div class="testimage">
                		<img src="images/blackimagesmall.png" alt="">
                    </div>
                    <div class="righttest">
                    	<blockquote>
                        	“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”
                        </blockquote>
                        <span>ANNE HATHAWAY</span>
                        <span class="smalltest">Lead Designer at Behance</span>
                    </div>
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
            	<div class="os-animation testimonial clearfix" data-os-animation="fadeIn" data-os-animation-delay="0.8s">
                	<div class="testimage">
                		<img src="images/blackimagesmall.png" alt="">
                    </div>
                    <div class="righttest">
                    	<blockquote>
                        	“Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem cursus neque.”
                        </blockquote>
                        <span>EMMA STONE</span>
                        <span class="smalltest">Co-Founder of Shazam</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--GET IN TOUCH-->
<section class="wrapper" id="contact">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">GET IN TOUCH</h2>
                <div class="bottomline"></div>
                <p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
            </div>
        </div>
        <div class="row spacing">
        	<form div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.8s">
            <div class="nameemail">
            	<div class="name">
            		<input type="text" name="yourname" placeholder="Your Name">
                </div>
                <div class="email">
                	<input type="email" name="youremail" placeholder="Your Email">
                </div>
            </div>    
                <textarea placeholder="Your Message"></textarea>
               
               <a href="#" class="os-animation btn11 btn-211 btn-2a11" data-os-animation="zoomIn" data-os-animation-delay="0.5s">SEND MESSAGE</a> 
                
            </form>
        </div>
    </div>
</section>

<!--FOOTER-->
<footer class="wrapper">
	<div class="container">
    	<div class="col-lg-12 col-md-12 col-sm-12">
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google+</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Behance</a></li>
                <li><a href="#">Dribbble</a></li>
                <li><a href="#">GitHub</a></li>
            </ul>
            <p>Free Template by <a href="http://freetemplates.pro/"> FreeTemplates.pro</a></p>
        </div>
      </div>      
</footer>

<!--JS-->
<script src="js/fastclick.js"></script>
<script src="js/scroll.js"></script>
<script src="js/fixed-responsive-nav.js"></script>
</body>
</html>
