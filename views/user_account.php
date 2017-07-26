<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$DBcon->close();
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
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="../views/aboutus.html">3rabeety</a></li>
                <li><a href="../views/contactus.html">Contact Us</a></li>
                <li><a href="../views/catalog.php" >View Catalog </a></li>
        
<li ><a href="../views/renting.html">Rent a Car</a></li>
                     <li ><a href="../views/Service_center.html">Service centers</a></li>
              </ul>
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="../logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
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
          <img class="first-slide img-responsive" src="../img/12_cars.jpg" data-src="../img/12_cars.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>3rabeety</h1>
              <p>If you're viewing this page now that means that you are now one of our greatest fan </p>
              <p><a class="btn btn-lg btn-primary"  role="button" id="RegisterA"  href="#"  >HI <?php echo $userRow['username']; ?></a></p>
            </div>
          </div>
        </div>
        <div class="item">
         <img class="second-slide img-responsive" src="../img/14_cars.jpg"  data-src="../img/14_cars.jpg"alt="Second slide">
           <div class="container">
            <div class="carousel-caption">
              <h1> more about us</h1>
              <p>There’s a rapidly growing movement of people in Egypt who are choosing a new way to buy their next car. A better way. This is   3rabeety, the way forward..</p>
               <p><a class="btn btn-lg btn-primary" href="../views/aboutus.html" role="button">About 3rabeety</a></p>
            </div>
          </div>
        </div>
        <div class="item">
             <img class="third-slide img-responsive" src="../img/13_cars.jpg"  data-src="../img/13_cars.jpg"alt="Third slide">
<!--          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">-->
         <div class="container">
            <div class="carousel-caption">
              <h1>Not sure what car you want?</h1>
              <p>Take a round and go through the cars we got for you, we're sure you'll find what you're looking for!</p>
              <p><a class="btn btn-lg btn-primary" href="../views/catalog.php" role="button">View Catalog</a></p>
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


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

           <div class="row row-content">

                <div class="card col-xs-6 col-sm-3" >
              <img class="card-img-top img-responsive img-thumbnail" name="image" src="<?php echo $userRow['img']; ?>" alt="Card image cap">
                      <h3 class="card-text" name="name" value=""><strong><?php echo $userRow['username']; ?></strong></h3>
              <div class=" card card-block">
                  <h4 class="card-title"><p><?php echo $userRow['email']; ?></p> </h4>
                   
                  
            
                <p class="card-text">You are my lovely customer.</p>
                  
                
              </div>
                    </div>
                   
            </div>
    
          <div>
   
    
<label>Your selected car  is</label><br> <img src="<?php echo $_POST['imagee'];?>" alt="<?php echo $_POST['imagee'];?>">  
              <br>
      <label>Brand is: </label> <?php echo $_POST['brande']; ?>
              <br>
      <label>Model is: </label>   <?php  $car = $_POST['modele']; echo $car;  ?>
 

      <hr class="featurette-divider">

      <!-- /END THEModel is: FEATURETTES -->


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


