<?php
include ("../dbconnect.php");
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico">

    <title>3rabeety</title>

    <!-- Bootstrap core CSS -->
    <link href="../style/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../style/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="script/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../script/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../style/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
 <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="logo"class="navbar-brand " href="../index.php"><img class="img-logo img-responsive " name="image" src="../img/logo/logo2.png" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="../index.php">Home</a></li>
                <li><a href="../views/aboutus.html">About 3rabeety</a></li>
                <li><a href="../views/contactus.html">Contact Us</a></li>
                 <li class="active" ><a  href="../views/catalog.php">View Catalog</a></li>
                  <li ><a href="../views/renting.html">Rent a Car</a></li>
                     <li ><a href="../views/Service_center.html">Service centers</a></li>

              </ul>
                  
            </div>
          </div>
        </nav>

      </div>
    </div>


<div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
                <form class="form" role="form" action="/"method="?"> 
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email">
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password">
                    </div>
                     <div class="checkbox">
                         <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                    <div class="modal-footer">
                        <p>Not registered yet?<span><a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Register</a></span></p>
                    <button type="submit" class="btn btn-primary btn-xs">Login</button><button type="button" class="btn btn-default btn-xs"
                       data-dismiss="modal">Cancel</button>
                    </div>
                   
                    
                </form>
                 </div>
            </div>
        </div>
    </div>  
      <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register </h4>
            </div>
            <div class="modal-body">
                <form class="form" role="form" action="/"method="?"> 
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email">
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password">
                    </div>
                     <div class="checkbox">
                         <label>
                            <input type="checkbox">Keep me signed in</label>
                       
                    </div>
                    <div class="modal-footer">
                        <p>Already registered ?<span><a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</a></span></p>
                    <button type="submit" class="btn btn-primary btn-xs">Sign up</button><button type="button" class="btn btn-default btn-xs"
                       data-dismiss="modal"  >Cancel</button>
                    </div>
                   
                    
                </form>
                 </div>
            </div>
        </div>
    </div>  
    <div class="bg"> </div>
      <div class="jumbotron">
     <h1>View Catalog</h1> 
    
</div>
    

    <!-- Marketing messaging 
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
 
    <div class="container marketing">
        <hr class="featurette-divider">
                <ol class="breadcrumb">
                  <li><a href="../index.php">Home</a></li>
                  <li class="active">Catalog</li>
                </ol>
        
      <div class="row">
          <div class="col-xs-12 col-sm-12">
        <!-- Nav tabs -->
              
            
                <ul class="nav nav-tabs navbar-static-top" role="tablist">
                       <li class="nav-item">
                    <a class="nav-link active glyphicon glyphicon-piggy-bank" data-toggle="tab" href="#Budget" role="tab"> Budget</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-filter" data-toggle="tab" href="#Usage" role="tab"> Usage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-globe" data-toggle="tab" href="#Brand" role="tab"> Brand</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-fire" data-toggle="tab" href="#Newest" role="tab"> Newest</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-thumbs-up" data-toggle="tab" href="#Recommended" role="tab"> Recommended</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link glyphicon glyphicon-heart-empty" data-toggle="tab" href="#Bestseller" role="tab"> Bestseller</a>
                  </li>
                </ul>
              <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                       <!--<div class="row col-xs-6 col-sm-3 col-sm-push-1"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/11_car.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p> Under 100,000 </p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3 col-sm-push-1"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/11_car.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p> 100,000 to 200,000</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3 col-sm-push-1"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/11_car.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p> 200,000 to 300,000</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3 col-sm-push-1"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/11_car.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>300,000 to 400,000</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3 col-sm-push-1"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/11_car.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>400,000 to 600,000</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3 col-sm-push-1  "  >
                                <div class="thumbnail text-center">
                                    <img src="../img/11_car.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>Over 600,000</p>
                                    </div>
                                </div>
                            </div>
                            </div>-->
            <div class="tab-pane fade in active" id="Budget" role="tabpanel">
                    <div class="container">
                    <div class="row row-content">
                <div class="card col-xs-12 col-sm-4" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/envy.png"   alt="Card image cap">
              <div class="card-block">
                  <h3 class="card-text" name="price" value=""><strong><span class="card-span">Under</span> 150,000EGP</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                       
                        
                <div class="card col-xs-12 col-sm-4" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/hyundai/i10.jpg" alt="from 150k to 250k EGP">
              <div class="card-block">
                      <h3 class="card-text" name="price" value=""><strong>150,000EGP <span  class="card-span">to</span> 250,000EGP </strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                        
                     
                <div class="card col-xs-12 col-sm-4" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/hyundai/Elentra.jpg" alt="from 250k to 350k EGP">
              <div class="card-block">
                      <h3 class="card-text" name="price" value=""><strong>250,000EGP <span  class="card-span">to</span> 350,000EGP</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                     </div>    
                        <br>
                      <div class="row row-content">
                <div class="card col-xs-12 col-sm-4" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/opel.png" alt="from 350k to 450k EGP">
              <div class=" card card-block">
                      <h3 class="card-text" name="price" value=""><strong>350,000EGP <span  class="card-span">to</span> 450,000EGP</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
                    </div>
                       
                        
        <div class="card col-xs-12 col-sm-4" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/3series.jpg" alt="from 450k to 600k EGP">
              <div class=" card card-block">
                      <h3 class="card-text" name="price" value=""><strong>450,000 EGP <span  class="card-span">to</span> 600,000 EGP</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
                    </div>
                         
        <div class="card col-xs-12 col-sm-4" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/Jeep-Grand-Cherokee-SRT-vs-plane-2.jpg" alt="Above 600k EGP">
              <div class=" card card-block">
                  <h3 class="card-text" name="price" value=""><strong><span class="card-span">Above</span> 600,000 EGP</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
                    </div>  
                        
            </div>
    </div>
                    </div>
                    
                  
                     <!--  <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p> Family Matters </p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p> Space Matters</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p> City Cruise</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>Highway Ride</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>Fun, fun, fun</p>
                                    </div>
                                </div>
                            </div>
                       <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>Tug</p>
                                    </div>
                                </div>
                            </div>
                        <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>Mountains & Dessert</p>
                                    </div>
                                </div>
                         </div>
                         <div class="row col-xs-6 col-sm-3"  >
                                <div class="thumbnail text-center">
                                    <img src="../img/8_cars.jpg" alt="" class="img-responsive">
                                    <div class="caption">
                                        <p>Convertible</p>
                                    </div>
                                </div>
                         </div>-->
                    <div class="tab-pane fade" id="Usage" role="tabpanel">
                      <div class="tab-pane active" id="Budget" role="tabpanel">
                    <div class="container">
                    <div class="row row-content">
                            <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/family-car.jpg"   alt="Card image cap">
              <div class="card-block">
                  <h3 class="card-text" name="price" value=""><strong>Family Matters</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                        <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/space.jpg"   alt="Card image cap">
              <div class="card-block">
                  <h3 class="card-text" name="price" value=""><strong>Space Matters</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/city-cruise.jpg"   alt="Card image cap">
              <div class="card-block">
                  <h3 class="card-text" name="price" value=""><strong>City Cruise</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/sporty.jpg" alt="Card image cap">
              <div class="card-block">
                      <h3 class="card-text" name="price" value=""><strong>Highway Ride</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>  
                        </div>
                        <br>
                        <div class="row row-content">
                <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/fun.jpg" alt="Card image cap">
              <div class="card-block">
                      <h3 class="card-text" name="price" value=""><strong>Fun, fun, fun</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
            </div>
                <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/towing.png" alt="Card image cap">
              <div class=" card card-block">
                      <h3 class="card-text" name="price" value=""><strong>Tug</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
                    </div>
        <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/JEEP_1742-e1435245947123_0.jpg" alt="Card image cap">
              <div class=" card card-block">
                      <h3 class="card-text" name="price" value=""><strong>Mountains & Dessert</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
                    </div>
        <div class="card col-xs-12 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/usage/S-class-cabriolet.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h3 class="card-text" name="price" value=""><strong>Convertible</strong></h3>
                <a href="#" class="btn btn-primary">View Cars</a>
              </div>
                    </div>
                   
                   
                   
            </div>
    </div>
                    </div>
                    </div>
                  <div class="tab-pane fade" id="Brand" role="tabpanel">
                      <br><br><br><br>
                              <ul class="m2 list-unstyled col-xs-6 col-sm-3">
                                  <li> <span> <img src="../img/cars_logo/50px-Logo1.png"></span><a>Alfa Romeo</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/audi.png"></span><a>Audi</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/50px-Logo2.png"></span><a href="BMW.php">BMW</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/CITROEN.png"></span><a>Citroen</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/ferrari.png"></span><a>Ferrari</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/Fiat-Logo-510x510.png"></span><a>Fiat</a>
                                  </li>
                                   <li> <span> <img src="../img/cars_logo/logo-ford_o.png"></span><a>Ford</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/honda.png"></span><a>Honda</a>
                                  </li>
                                  <li><span> <img src="../img/cars_logo/hyundai.png"></span><a href="Hyundai.html">Hyundai</a>
                                  </li>
                              </ul>
                           
                              
                                <ul class="m2 list-unstyled col-xs-6 col-sm-3">
                                 
                                  <li> <span> <img src="../img/cars_logo/infinity.png"></span><a>Infiniti</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/JAGUAR_0.png"></span><a>Jaguar</a>
                                  </li>
                                    <li><span> <img src="../img/cars_logo/jeep.png"></span><a href="Jeep.html">Jeep</a>
                                  </li>
                                     <li> <span> <img src="../img/cars_logo/kia.png"></span><a>Kia</a>
                                  </li>
                                     <li><span> <img src="../img/cars_logo/land-rover.png"></span><a>Land Rover</a>
                                  </li>
                                    <li> <span> <img src="../img/cars_logo/lada%20(1).png"></span><a>Lada</a>
                                  </li>
                                    <li><span> <img src="../img/cars_logo/lexus-logo--1-.png"></span><a>Lexus</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/mazda.png"></span><a>Mazda</a>
                                  </li>
                                     <li> <span> <img src="../img/cars_logo/mercedes-benz.png"></span><a href="Mercedes.html">Mercedes</a>
                                  </li>
                                    
                              </ul>
                           
                            
                                <ul class="m2 list-unstyled col-xs-6 col-sm-3">
                                 <li> <span> <img src="../img/cars_logo/mg.png"></span><a>MG</a>
                                  </li>
                                    <li> <span> <img src="../img/cars_logo/mini.png"></span><a>Mini</a>
                                         </li>
                                  <li> <span> <img src="../img/cars_logo/mitsubishi.png"></span><a>Mitsubishi</a>
                                  </li>
                                     <li><span> <img src="../img/cars_logo/nissan.png"></span><a>Nissan</a>
                                  </li>
                                     <li> <span> <img src="../img/cars_logo/peugeot.png"></span><a>Peugeot</a>
                                  </li>
                              <li><span> <img src="../img/cars_logo/porsche.png"></span><a>Porsche</a>
                                  </li>
                                 <li> <span> <img src="../img/cars_logo/renault.png"></span><a>Renault</a>
                                  </li>
                                    <li> <span> <img src="../img/cars_logo/RR.png"></span><a>Roll-Royce</a>
                                  </li>
                                    <li><span> <img src="../img/cars_logo/seat.png"></span><a>SEAT</a>
                                  </li>
                                    
                              </ul> 
                              
                             
                                  <ul class="m2 list-unstyled col-xs-6 col-sm-3">
                                      <li> <span> <img src="../img/cars_logo/skoda.png"></span><a>Skoda</a>
                                  </li>
                                  <li> <span> <img src="../img/cars_logo/senova.png"></span><a>Senova</a>
                                  </li>
                                 <li> <span> <img src="../img/cars_logo/sssangyong.png"></span><a>SsangYong</a>
                                  </li>
                                     <li> <span> <img src="../img/cars_logo/subaru.png"></span><a>Subaru</a>
                                  </li> 
                                   <li> <span> <img src="../img/cars_logo/suzuki.png"></span><a>Suzuki</a>
                                  </li> 
                                      <li> <span> <img src="../img/cars_logo/tesla%20(2).png"></span><a>Tesla</a>
                                  </li> 
                                       <li> <span> <img src="../img/cars_logo/toyota.png"></span><a>Toyota</a>
                                  </li>
                                       <li><span> <img src="../img/cars_logo/volkswagen.png"></span><a>Volkswagen</a>
                                  </li> 
                                      <li> <span> <img src="../img/cars_logo/volvo.png"></span><a>Volvo</a>
                                  </li>  
                              </ul>
                    </div>
                  <div class="tab-pane fade" id="Newest" role="tabpanel">
                       <?php foreach($DBcon->query("SELECT * FROM cars WHERE date = '2016-01-01'") as $row ): ?>
       
                <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src=" <?php echo $row['image']; ?>"   alt="Card image cap">
              <div class="card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value=""><?php echo $row['brand']; ?></a> <span class="badge" name="rating" value=""> <?php echo $row['review']; ?></span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value=""> <?php echo $row['model']; ?></h6>
                  <h3 class="card-text" name="price" value=""><strong> <?php echo $row['price']; ?> L.E.</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">View Car</a>
              </div>
                    <br>
            </div>
        <?php endforeach; ?>
                      
                    </div>
                    <div class="tab-pane fade" id="Recommended" role="tabpanel">
               <?php foreach($DBcon->query("SELECT * FROM cars WHERE review > 9") as $row ): ?>
       
                <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src=" <?php echo $row['image']; ?>"   alt="Card image cap">
              <div class="card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value=""><?php echo $row['brand']; ?></a> <span class="badge" name="rating" value=""> <?php echo $row['review']; ?></span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value=""> <?php echo $row['model']; ?></h6>
                  <h3 class="card-text" name="price" value=""><strong> <?php echo $row['price']; ?> L.E.</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">View Car</a>
              </div>
                    <br>
            </div>
        <?php endforeach; ?>
                    </div>
                    <div class="tab-pane fade" id="Bestseller" role="tabpanel">
                         <?php foreach($DBcon->query("SELECT * FROM cars WHERE review > 7 AND price < 600000") as $row ): ?>
       
                <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src=" <?php echo $row['image']; ?>"   alt="Card image cap">
              <div class="card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value=""><?php echo $row['brand']; ?></a> <span class="badge" name="rating" value=""> <?php echo $row['review']; ?></span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value=""> <?php echo $row['model']; ?></h6>
                  <h3 class="card-text" name="price" value=""><strong> <?php echo $row['price']; ?> L.E.</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">View Car</a>
              </div>
                    <br>
            </div>
        <?php endforeach; ?>
                    </div>
                </div>
        
          </div>
      </div>
     <hr class="featurette-divider">
    
      <!-- FOOTER -->
        <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
          <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        <p>&copy; 2017 3rabeety, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../script/jquery.min.js"><\/script>')</script>
    <script src="../script/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../script/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../script/ie10-viewport-bug-workaround.js"></script>
 <script src="../script/script.js"></script>
  </body>
</html>
