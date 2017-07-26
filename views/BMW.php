<?php
include ("../dbconnect.php");
      
//$query = $DBcon->query("SELECT * FROM cars WHERE brand='BMW'");
//$row=$query->fetch_array();
//foreach ( $DBcon->query("SELECT * FROM cars WHERE brand='BMW'") as $row ) {
  // printf("'%s'@'%s'\n", $row['image'], $row['model']);
//}
    
//if ($result = $DBcon->query($query)) {

    // fetch associative array 
  //  while ($row = $result->fetch_assoc()) {
        
    
//}
   // $result->free();
     //   }
       //$DBcon->close();

   


//$DBcon->close();


//while ($res=mysqli_fetch_array($r))
//{
  //  $name=$res["mname"][0];
    //$price=$res[price][0];
    //echo $price;
//}


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
    <!--[if lt IE 9]><script src="../script/ie8-responsive-file-warning.js"></script><![endif]-->
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
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="../views/aboutus.html">About 3rabeety</a></li>
                <li><a href="../views/contactus.html">Contact Us</a></li>
              
   
                                
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Catalog <b class="caret"></b></a>
        <ul class="dropdown-menu  ">
            <li >
                <div class="row " style="width:100%">
                    <ul class="m1  list-inline list-unstyled col-xs-12 col-sm-8 col-sm-push-2  ">
                        <li class="list-inline-item glyphicon glyphicon-piggy-bank" ><a href="../views/catalog.php#Budget">Budget</a></li>
                        <li class="list-inline-item glyphicon glyphicon-filter"><a href="../views/catalog.php#Usage">Usage</a></li>
                        <li class="list-inline-item glyphicon glyphicon-globe"><a href="../views/catalog.php#Brand">Brand</a></li>
                        <li class="list-inline-item glyphicon glyphicon-fire"><a href="../views/catalog.php#Newest">Newest</a></li>
                        <li class="list-inline-item glyphicon glyphicon-thumbs-up"><a href="../views/catalog.php#Recommedned">Recommended</a></li>
                        <li class="list-inline-item glyphicon glyphicon-heart-empty"><a href="../views/catalog.php#Bestseller">Bestseller</a></li>

                    </ul>
                </div>
            </li>
        </ul>
    </li>

              </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a id="loginA"  href="#"  onclick="openModal()">Login</a>
                      </li>
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
    <div class="bg2"></div>
<div class="jumbotron">
   
  <h1>BMW</h1>
    
</div>
      
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
           <hr class="featurette-divider">
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
    <li><a href="../views/catalog.php">Catalog</a></li>
  <li class="active">BMW</li>
</ol>

      <!-- START THE FEATURETTES -->
    
<div class="container">
    
    <div class="row row-content">
       
       
    
   
<?php foreach($DBcon->query("SELECT * FROM cars WHERE brand='BMW' AND color='black' OR 'blue' ") as $row ): ?>
          <form id="bmw_form" action="user_account.php" method="post">
                <div class="card col-xs-6 col-sm-3" >
                    
              <img class="card-img-top img-responsive img-thumbnail" name="image" src=" <?php echo $row['image']; ?>"  value="<?php= htmlentities($image) ?>" alt="Card image cap">
              <div class="card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="<?php $row['brand'] ?>"><?php echo $row['brand']; ?></a> <span class="badge" name="rating" value="<?php $row['review']; ?>"> <?php echo $row['review']; ?></span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="<?php $row['model']; ?>"> <?php echo $row['model']; ?></h6>
                  <h3 class="card-text" name="price" value="<?php $row['price']; ?>"><strong> <?php echo $row['price']; ?> L.E.</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 
                  <input type="hidden" name="imagee"  value="<?php echo $row['image']; ?>">
                  <input type="hidden" name="brande"  value="<?php echo $row['brand']; ?>">
                  <input type="hidden" name="modele"  value="<?php echo $row['model']; ?>">
                
                <button type="submit" id="submite" name="submite"class="btn btn-primary">Make a request</button>
                 
              </div>
                    <br>
              </div>
                  
         </form>
        <?php endforeach; ?>
            
   
        

                <!--<div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/2series.jpg" alt="Card image cap">
              <div class="card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">8.6</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">2 Series</h6>
                      <h3 class="card-text" name="price" value=""><strong>450,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
                <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/2-series-convertible.jpg" alt="Card image cap">
              <div class="card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">8.1</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">2 Series Convertible</h6>
                      <h3 class="card-text" name="price" value=""><strong>1,700,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
                <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/3series.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">3 Series</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/4series.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">4 Series</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/4seriesconvertible.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">4 Series Convertible</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/5series.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">5 Series</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/6series.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">6 Series</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/6seriesconvertiable.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">6 Series Convertible</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/7series.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">7 Series</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/x1.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">X1</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/x3.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">X3</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
         <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/x4.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">X4</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
        <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/x5.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">X5</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
             <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="../img/bmw/x6.jpg" alt="Card image cap">
              <div class=" card card-block">
                  <h4 class="card-title"><a href="BMW.html" class="card-link" name="Brand" value="">BMW</a> <span class="badge"  name="rating" value="">9.3</span></h4>
                    <h6 class="card-subtitle text-muted" name="model" value="">X6</h6>
                  
                      <h3 class="card-text" name="price" value=""><strong>300,000£</strong></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
                    </div>
                   
       -->
                   
                   
            </div>
    </div>
      <hr class="featurette-divider">
        <h1><strong>About BMW</strong>
        </h1>
        <p>
           <strong>BMW has traditionally taken great pride in building premium executive saloons that combine high levels of efficiency with fantastic sports car handling that few manufacturers can match. Both the 3 and 5 Series have stood the test of time and become terrific examples of rear-wheel drive cars ‘done right’.

This extensive mechanical know-how has aided the development of the Z4 sports car, BMW’s closest rival to the excellent Porsche Boxster.

BMW began a move into less-familiar territory with the likes of the X3 and X5 SUVs and has more recently experimented with coupe styling on a larger platform in the form of the X6.

Its main advance, however, has come with the introduction of the i3 and i8 electric hybrid vehicles. These revolutionary cars combine sharp, futuristic styling with giant leaps forward in design and manufacture that could forever change the way we see electric cars.
            </strong></p>
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 3rabeety, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../script/jquery.min.js"><\/script>')</script>
    <script src="../script/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../script/ie10-viewport-bug-workaround.js"></script>
         <script src="../script/script.js"> </script>
  </body>
</html>
