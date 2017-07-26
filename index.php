<?php
//session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);  
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
   
   
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
if (isset($_SESSION['dealerSession'])!="") {
	header("Location: dealer_home.php");
}
if(isset($_POST['dealer-signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);  
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
   
   
	
	$check_email = $DBcon->query("SELECT email FROM dealer WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO dealer(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>  
<?php
session_start();
require 'dbconnect.php';
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}

require 'dbconnect.php';
if (isset($_SESSION['dealerSession'])!="") {
	header("Location: dealer_home.php");
	exit;
}

if (isset($_POST['dealer-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT dealer_id, email, password FROM dealer WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['dealerSession'] = $row['dealer_id'];
		header("Location: dealer_home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
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
    <link rel="icon" href="img/favicon.ico">

    <title>3rabeety</title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="style/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="script/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="script/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="style/carousel.css" rel="stylesheet">
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
              <a id="logo"class="navbar-brand " href="index.php"><img class="img-logo img-responsive " name="image" src="img/logo/logo2.png" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="views/aboutus.html">About 3rabeety</a></li>
                <li><a href="views/contactus.html">Contact Us</a></li>
       <li><a href="views/catalog.php">View Catalog </a></li>
<li><a href="views/renting.html">Rent a Car</a></li>
                
                     <li ><a href="views/Service_center.html">Service centers</a></li>
              </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a id="loginA"  href="#"  onclick="openModal()"><span class="glyphicon glyphicon-user"></span> Login</a>
                      </li>
                </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="img/12_cars.jpg" data-src="img/12_cars.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>3rabeety</h1>
              <p>Signup to be one of our users and gain all the priviliges we offer and get the best car deals and know where to find your dream car. It's as easy as ever!</p>
              <p><a class="btn btn-lg btn-primary"  role="button" id="RegisterA"  href="#"  onclick="openModal1()">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide img-responsive" src="img/14_cars.jpg"  data-src="img/14_cars.jpg"alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>About 3rabeety</h1>
              <p>There’s a rapidly growing movement of people in Egypt who are choosing a new way to buy their next car. A better way. This is 3rabeety, the way forward..</p>
               <p><a class="btn btn-lg btn-primary" href="views/aboutus.html" role="button">About 3rabeety</a></p>
            </div>
          </div>
        </div>
        <div class="item">
             <img class="third-slide img-responsive" src="img/13_cars.jpg"  data-src="img/13_cars.jpg"alt="Third slide">
<!--          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Not sure what car you want?</h1>
              <p>Take a round and go through the cars we got for you, we're sure you'll find what you're looking for!</p>
              <p><a class="btn btn-lg btn-primary" href="views/catalog.php" role="button">View Catalog</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">User Login </h4>
                 <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
            </div>
            <div class="modal-body">
                <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email" required>
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password" required>
                    </div>
                     <div class="checkbox">
                         <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                    <div class="modal-footer">
                          
                        <p>Not registered yet ?<span><a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Register</a></span></p>
                        <p>Are you a dealer ?<span><a href="#" data-toggle="modal" data-target="#DloginModal" data-dismiss="modal">Login</a></span></p>
                        
                    <button type="submit" class="btn btn-primary btn-xs" id="btn-login" name="btn-login">Login</button><button type="button" class="btn btn-default btn-xs"
                       data-dismiss="modal">Cancel</button>
                    </div>
                </form>
                 </div>
            </div>
        </div>
    </div>  
             <div id="DregisterModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dealer Register </h4>
                  <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
            </div>
            <div class="modal-body">
                <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form-group">
                        <label class="sr-only" for="username">User name</label>
                            <input type="text" class="form-control input-sm" id="username"  name="username" placeholder="Username" required >
                        </div>
                   
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email" required>
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password" required>
                    </div>
                     <div class="checkbox">
                         <label>
                            <input type="checkbox">Keep me signed in</label>
                       
                    </div>
                    <div class="modal-footer">
                        <p>Already registered ?<span><a href="#" data-toggle="modal" data-target="#DloginModal" data-dismiss="modal">Login</a></span></p>
                       
                    <button type="submit" class="btn btn-primary btn-xs" id="dealer-signup" name="dealer-signup">Sign up</button><button type="button" class="btn btn-default btn-xs"
                       data-dismiss="modal"  >Cancel</button>
                    </div>
                   
                    
                </form>
                 </div>
            </div>
        </div>
    </div> 
      <div id="DloginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dealer Login </h4>
                 <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
            </div>
            <div class="modal-body">
                <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email" required>
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password" required>
                    </div>
                     <div class="checkbox">
                         <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                    <div class="modal-footer">
                        <p>Not registered yet?<span><a href="#" data-toggle="modal" data-target="#DregisterModal" data-dismiss="modal">Register</a></span></p>
                    <button type="submit" class="btn btn-primary btn-xs" id="dealer-login" name="dealer-login">Login</button><button type="button" class="btn btn-default btn-xs"
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
                <h4 class="modal-title">User Register </h4>
                  <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
            </div>
            <div class="modal-body">
                <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form-group">
                        <label class="sr-only" for="username">User name</label>
                            <input type="text" class="form-control input-sm" id="username"  name="username" placeholder="Username" required >
                        </div>
                   
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Email" required>
                        </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Password" required>
                    </div>
                     <div class="checkbox">
                         <label>
                            <input type="checkbox">Keep me signed in</label>
                       
                    </div>
                    <div class="modal-footer">
                        <p>Already registered ?<span><a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login</a></span></p>
                      
                    <button type="submit" class="btn btn-primary btn-xs" id="btn-signup" name="btn-signup">Sign up</button><button type="button" class="btn btn-default btn-xs"
                       data-dismiss="modal"  >Cancel</button>
                    </div>
                   
                    
                </form>
                 </div>
            </div>
        </div>
    </div> 
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-rounded  " src="img/4.PNG" alt="Choose your car" >
          <h2>Choose a car</h2>
          <p>Refering to the ratings from other users and the <a href=views/catalog.php#Recommedned>Recommended </a>and <a href=views/catalog.php#Bestsellers>Bestsellers </a> tabs we might help you choose your first/next car.</p>
         
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded  " src="img/5.PNG" alt="Get your offer" >
          <h2>Get your offer</h2>
          <p>We’ll find you the best offers from local & national dealers within 24 hours.</p>
       
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded  " src="img/6.PNG" alt="Buy the car" >
          <h2>Buy the car</h2>
          <p>Buy direct from the dealer at the quoted price. We don’t charge you any money!</p>
     
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
         <h2 class="featurette-heading">Family cars. <span class="text-muted">They'll blow your mind.</span></h2>
          <p class="lead">A family car is a car classification used in Europe to describe normally-sized cars. The name comes from the suitability of these cars to carry a whole family locally or on vacations.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block img-rounded" src="img/6_cars.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Hatchback.. Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">A hatchback is a car body configuration with a rear door that swings upward to provide access to a cargo area. Hatchbacks may feature fold-down second row seating, where the interior can be flexibly reconfigured to prioritize passenger vs. cargo volume.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block img-rounded" src="img/5_car.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, Sportscars. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">A sports car is a small, usually two seater, two door automobile designed for spirited performance and nimble handling. Sports cars may be spartan or luxurious, but high maneuverability and minimum weight are requisite.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block img-rounded" src="img/4_car.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


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
    <script>window.jQuery || document.write('<script src="script/jquery.min.js"><\/script>')</script>
    <script src="script/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="script/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="script/ie10-viewport-bug-workaround.js"></script>
         <script src="script/script.js"></script>
  </body>
</html>
