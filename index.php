<?php 

  include_once 'inc/db_config.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laundry</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    
    


<!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  
  


       
</head>
<body id="home" class="homepage">
    <header id="header">
        <div class="container LoginMenu">
                 <div class="text-right">
                    <a href="login.php" class="btn-primary">
                       Log in <i class="fa fa-sign-in"></i>
                    </a>
                 </div>
            </div>
    </header>
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg111.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                        	<div class="col-sm-6"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
             <div class="item" style="background-image: url(images/slider/rsz_1rsz_1qq.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="item" style="background-image: url(images/slider/unnamed.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="item img" style="background-image: url(images/slider/hotline.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="section-header"><h2 class="section-title text-center wow fadeInDown">Discount Offer</h2></div>
            <div class="row">

            
          <?php 
            $Discount_offer = DB_Query("SELECT pricing.*, services.service_name, cloths.cloth_type FROM pricing INNER JOIN services ON (pricing.service_id=services.id) INNER JOIN cloths ON (pricing.cloth_id=cloths.id) WHERE `discount`>0");
                $i = 1; 
                while ($data_tbl = mysqli_fetch_assoc($Discount_offer)) {
                  extract($data_tbl);

           ?>

              <div class="col-xl-3 col-lg-5" style="margin: 20px">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">Service Name: <?= $service_name ?> </div>
                    <div class="mr-5">Cloth Type: <?= $cloth_type ?> </div>
                    <br/>
                    <div class="mr-5">Price: <?= $price ?> BDT</div>
                    <br/>
                    <div class="mr-5">Discount:  <?= $discount ?> %</div>
                  </div>
                  <form action="order.php" method="post">
                    <input type="hidden" value="<?= $cloth_id ?>" name="i_cloth_type">
                    <input type="hidden" value="<?= $service_id ?>" name="i_service_name">

                    
                      <button type="submit" class="card-footer text-white clearfix small z-1" >
                        <span class="float-left" style=" font-weight:bold;">Order Now</span>
                        <span class="float-right">
                          <i class="fa fa-angle-right" style="font-weight:bold;"></i>
                        </span>
                      </button>

                  </form>
                  
                </div>
              </div>

             <?php } ?>
                


            </div>
        </div>
    </section>
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 style="text-align: center;">WHAT WE DO?</h2>
                    <p>Mechanized laundry and dry cleaning services are highly developer in the advanced countries. Bangladesh was far behind in promoting this industry till 1988. Some of few 
					international hotels of Dhaka had modern laundry and dry cleaning facilities. They were designed to cater their own needs only. They used to served very selected customers with a very higher services charge and thus Dhaka Sheraton, Radisson 
					and Sonargaon Hotel were operating their units mainly to serve the demand of their Boarders. At Presents many more dry cleaning laundry are still in Dhaka city. Now this year Washout .
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="section-header"><h2 class="section-title text-center wow fadeInDown">Our Services</h2></div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft"><img class="img-responsive" src="images/hotel-servicio-lavanderia.jpg" alt=""></div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left"><i class="fa fa-check-circle"></i></div>
                        <div class="media-body">
                            <h4 class="media-heading">Dry Cleaning/Washing.</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left"><i class="fa fa-check-circle"></i></div>
                        <div class="media-body">
                            <h4 class="media-heading">Curtain Care</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">To Provide on time delivery and best quality Laundry-Dryclean services to the clients.</h2>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>
    <section id="services" >
        <div class="container">
            <div class="section-header"><h2 class="section-title text-center wow fadeInDown">Our Production</h2></div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-line-chart"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Production Capacity</h4>
                                <p style="text-align: justify;">Over the last decade Washout has improved & increased their production 
									capacity by BMRE of the project. To cope with the digital washing & dry 
									cleaning technology, Washout has adopted more sophisticated and digital 
									equipment. At present the production capacity of the plant is 4000 pices 
									of linens/clothes per day on single shit basis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-cubes"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Process Flow</h4>
                                <p style="text-align: justify;">Clothes are received from the customers at different showrooms. It is then 
									sent to factory where checking, sorting and marking take place. The clothes
									are divided into categories viz woolen cotton, etc. The woolen materials are 
									sent to dry cleaning machine where in they are cleaned. It is then pressed in 
									utility press and form finished.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-pie-chart"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Quality Management</h4>
                                <p style="text-align: justify;">Washout introduced 14-steps quality check system starting from receiving the 
									linen for treatment and ends at the delivery point. Each and every item is 
									individually pass through quality checking at each point of this system and 
									if any output is found not up to the mark it is returned back for process
									again. If required they ask for permission from the customer to go for further 
									treatment of the linen.</p>
                            </div>
                        </div>
                    </div>                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-bar-chart"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Vehicles</h4>
                                <p style="text-align: justify;">All the 40 show rooms are located at various locations throughout Dhaka & Narsingdi, 
									Narayangonj city. Washout has 8 vehicles in operation, which enables it to maintain
									its delivery schedule smoothly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-language"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Raw Materials</h4>
                                <p style="text-align: justify;">Since it's commencement Washout has been using detergent & other chemicals of international 
									brands to ensure quality of work. All detergents, spotting chemicals, perchoethylene etc.
									are from johnson Diversey of England, Protek Chemical, Singapore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left"><i class="fa fa-bullseye"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Utilities</h4>
                                <p style="text-align: justify;">As mentionned earlier Washout is self-sufficient in generating its electrical power. 
									It has its own Submersible water pump for continuous supply of water. It has obtained 
									Environment Clearance Certificate from the concerned department of Government and 
									strictly follows all the procedures to prevent any kind of environment pollution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="section-header"><h2 class="section-title text-center wow fadeInDown">About Us</h2></div>
			<div class="row">
				<div class="col-sm-12">
					<h3 class="column-title"></h3>
					<p style="text-align: justify">As started earlier, Washout always uses the best quality raw materials & equipment to ensure quality service. The total factory space has move up to 30,000 square feet to accommodate new machinery. At present the daily production/up to finishing of different linen capacity around 4000 pieces in single shift. Recently washout installed a RAMSONS dry-cleaning machine from Germany. It is the biggest of the RAMSONS family. Most of the machinery are of Germany & USA origin. This is a reflection of Washout's commitment for customer satisfaction. To ensure uninterrupted production & delivery service, the company maintains a second line of complete machinery and also sufficient inventory of spare parts. We have own power supply. In order to uninterrupted supply Washout installed all the auxiliary as standby viz. Boiler, Air compressor etc.</p>
				</div>
			</div>
        </div>
    </section>
    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Process</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-2 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle"><span>1</span><i class="fa fa-play fa-2x"></i></div><h3>Receiving</h3>
                    </div>
                </div>
                <div class="col-md-2  col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle"><span>2</span><i class="fa fa-arrow-circle-right fa-2x"></i></div><h3>Placement</h3>
                    </div>
                </div>
                <div class="col-md-2  col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle"><span>3</span><i class="fa fa-arrow-circle-right fa-2x"></i></div><h3>Dividing</h3>
                    </div>
                </div>
                <div class="col-md-2  col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle"><span>4</span><i class="fa fa-arrow-circle-right fa-2x"></i></div><h3>Cleaning</h3>
                    </div>
                </div>
                <div class="col-md-2  col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle"><span>5</span><i class="fa fa-arrow-circle-right fa-2x"></i></div><h3>Pressing</h3>
                    </div>
                </div>
                <div class="col-md-2  col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle"><span>6</span><i class="fa fa-stop fa-2x"></i></div><h3>Finalizing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright Laundry 2018
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                    
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/google.api.js"></script>
    <script src="js/script.js"></script>
</body>

<!-- Mirrored from washoutbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 May 2018 20:03:13 GMT -->

<!-- Mirrored from washoutbd.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jul 2018 09:26:54 GMT -->
</html>