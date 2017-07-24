<?php

session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
  }
      $_SESSION['counter'] += 1;
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Results</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/jquery-1.11.1.min.js"></script> 
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>


       <meta http-equiv="content-type" content="text/html; charset=utf-8" />
       <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">


</head>
<body>


<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">


          <div class="navbar-header">
          <img src="img/apple-touch-icon.png">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="planner.php">Planner</a></li>
                    <li><a href="#">Previous Event</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="signout.php">Signout</a></li>
               </ul>
          </div>

  </div>
</div>

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div> 
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Result</h1>
                    <h4>Provide the imformation about your event</h4>
               </div>

          </div>
     </div>
</section>
                    
                    <?php
echo "<p><br><h1>Venues available at your budget</p></h1>";
                         include 'config.php';
                       
                       $sql = "SELECT * FROM input";
                         $result = $conn->query($sql);
  if ($result->num_rows > 0) {
                                    // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                    if($row["subject"]=="1"){
                                       ?>
                                       <div class="row">
                   <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper"> Hilton</div>
                                    </div>
                                    <img alt="DISEC" src="assets/img/portfolio/Hilton.jpg">
                                </div>
                            </figure>
                        </a>
                    </div> 
                   

                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">ITC Grand Chola</div>
                                    </div>
                                    <img alt="image2" src="assets/img/portfolio/ITC Grand Chola.jpeg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">the-epiphany-a-joie-de</div>
                                    </div>
                                    <img alt="UN High Commission for Refugees" src="assets/img/portfolio/img3.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40 code">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">Green Park</div>
                                    </div>
                                    <img alt="iEconomic & Social Council" src="assets/img/portfolio/img5.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
<?php ;
                                    }
                                   if($row["subject"]=="2"){
                                       ?>
                                      <div class="row">
                   <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper"> Hilton</div>
                                    </div>
                                    <img alt="DISEC" src="assets/img/portfolio/Hilton.jpg">
                                </div>
                            </figure>
                        </a>
                    </div> 
                   

                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">ITC Grand Chola</div>
                                    </div>
                                    <img alt="image2" src="assets/img/portfolio/ITC Grand Chola.jpeg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">the-epiphany-a-joie-de</div>
                                    </div>
                                    <img alt="UN High Commission for Refugees" src="assets/img/portfolio/img3.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40 code">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">Green Park</div>
                                    </div>
                                    <img alt="iEconomic & Social Council" src="assets/img/portfolio/img5.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                </div>

                <div class="row">
                   <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper"> Hilton</div>
                                    </div>
                                    <img alt="DISEC" src="assets/img/portfolio/Hilton.jpg">
                                </div>
                            </figure>
                        </a>
                    </div> 
                   

                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">ITC Grand Chola</div>
                                    </div>
                                    <img alt="image2" src="assets/img/portfolio/ITC Grand Chola.jpeg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">the-epiphany-a-joie-de</div>
                                    </div>
                                    <img alt="UN High Commission for Refugees" src="assets/img/portfolio/img3.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40 code">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">Green Park</div>
                                    </div>
                                    <img alt="iEconomic & Social Council" src="assets/img/portfolio/img5.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                </div>




<?php ;
                                    }
                                   if($row["subject"]=="3"){
                                       ?>
                                       <div class="row">
                   <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper"> Hilton</div>
                                    </div>
                                    <img alt="DISEC" src="assets/img/portfolio/Hilton.jpg">
                                </div>
                            </figure>
                        </a>
                    </div> 
                   

                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">ITC Grand Chola</div>
                                    </div>
                                    <img alt="image2" src="assets/img/portfolio/ITC Grand Chola.jpeg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">the-epiphany-a-joie-de</div>
                                    </div>
                                    <img alt="UN High Commission for Refugees" src="assets/img/portfolio/img3.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40 code">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">Green Park</div>
                                    </div>
                                    <img alt="iEconomic & Social Council" src="assets/img/portfolio/img5.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
                <div class="row">
                   <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper"> Hilton</div>
                                    </div>
                                    <img alt="DISEC" src="assets/img/portfolio/Hilton.jpg">
                                </div>
                            </figure>
                        </a>
                    </div> 
                   

                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">ITC Grand Chola</div>
                                    </div>
                                    <img alt="image2" src="assets/img/portfolio/ITC Grand Chola.jpeg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">the-epiphany-a-joie-de</div>
                                    </div>
                                    <img alt="UN High Commission for Refugees" src="assets/img/portfolio/img3.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40 code">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">Green Park</div>
                                    </div>
                                    <img alt="iEconomic & Social Council" src="assets/img/portfolio/img5.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
                <div class="row">
                   <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper"> Hilton</div>
                                    </div>
                                    <img alt="DISEC" src="assets/img/portfolio/Hilton.jpg">
                                </div>
                            </figure>
                        </a>
                    </div> 
                   

                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">ITC Grand Chola</div>
                                    </div>
                                    <img alt="image2" src="assets/img/portfolio/ITC Grand Chola.jpeg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">the-epiphany-a-joie-de</div>
                                    </div>
                                    <img alt="UN High Commission for Refugees" src="assets/img/portfolio/img3.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="portfolio-item col-sm-3 col-xs-6 margin-bottom-40 code">
                        <a href="#">
                            <figure class="animate <br />
<b>Notice</b>:  Undefined variable: animate in <b>C:\xampp\htdocs\bootstrap\html\php\portfolio-item-4col.php</b> on line <b>28</b><br />
">
                                <div class="grid-image">
                                    <div class="featured-info">
                                        <div class="info-wrapper">Green Park</div>
                                    </div>
                                    <img alt="iEconomic & Social Council" src="assets/img/portfolio/img5.jpg">
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- End Portfolio Item -->
                </div>

<?php ;
                                    }

                                    else {
                                    ;
                                     }}}

                                             ?>


                    <div class="col-md-12 col-sm-12">
                         <p>Come join us and share so that others can also enjoy.</p>
                    </div>
               </div>

          </div>
     </div>
</section>
</body>
</html>