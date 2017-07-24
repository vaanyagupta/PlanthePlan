<?php
session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
    
  }

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

<title>Planner</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

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
                    <li><a href="previousevent.php">Previous Event</a></li>
                    <li><a href="contact.php"><?php echo $_COOKIE[regID] ?></a></li>
                    <li><a href="signout.php">
                     <?php

                         include 'config.php';
                         
                      
                       $sql = "SELECT * FROM user where regID= $_COOKIE[regID]";
                         $result = $conn->query($sql);

                                   if ($result->num_rows > 0) {
                                    // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                   echo $row["regID"];
                                   }
                                        } else {
                                             echo "0 results";
                                             }

                                             ?>
                                                </a></li>
               </ul>
          </div>
        

  </div>
</div>

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div> 
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-sm-12" style="padding-top: 120px">
                    <h1>Planner</h1>
                    
                    <h4>Provide the imformation about your event</h4>
               </div>
               <div class="col-md-6 col-sm-12">
                 <section>
<div>
     <form action="plannerinDB.php" class="contact" method="POST">
    <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder="Name of Event" autofocus>
      </p>

      <p class="contact-input">
        <label for="select" class="select">
          <select name="subject" id="select">
            <option value="" selected>Choose Budget</option>
            <option value="1">50,000</option>
            <option value="2">1,00,000</option>
            <option value="3">2,00,000</option>
          </select>
        </label>
      </p>
      <p class="contact-input">
        <input type="text" name="place" placeholder="Place" autofocus>
      </p>
      <p class="contact-input">
        <input type="Number" name="numberofguests" placeholder="Number of Guests" autofocus>
      </p>
      <p class="contact-input">
        <input type="text" name="cuisine" placeholder="Cuisine" autofocus>
      </p>
      <p class="contact-input">
        <input type="text" name="religon" placeholder="Religon" autofocus>
      </p>
       <p class="contact-input">
        <input type="text" name="theme" placeholder="Theme" autofocus>
      </p>
      <p class="contact-submit">
        <input type="submit" value="Send">
      </p>
    </fieldset>
  </form>
</div>

</section>

               </div>

          </div>
          
     </div>
</section>
</body>
</html>
