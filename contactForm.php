<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lighting Solutions</title>

    <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/category.css" rel="stylesheet">

      <!--Alert-->
      <script type="text/javascript">
      <!--("This website is currently under construction.\n \n In the meantime please contact us by either...\n \n Telephone 01726 695520\n \n Mobile 07749 768 962\n \n Email mail@lampexpress.uk\n \n Sorry for the inconvenience.");-->
      </script>
      <style>



      </style>

    </head>

    <body>
      <nav class="navbar navbar-fixed-top">
        <div class="container-fluid ">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar iconBarColor"></span>
              <span class="icon-bar iconBarColor"></span>
              <span class="icon-bar iconBarColor"></span>
            </button>
            <a class="navbar-brand">Lighting Solutions Ltd<span style="font-size:0.6em"><br />Formely known as B.G Lamps</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="navSpacing">
      <li class="navLinks"><a class="widthCorrection NavSmallerFont"href="index.html">LED</a></li>
        <li class="navLinks"><a class="widthCorrection NavSmallerFont" href="halogen.html">Halogen</a></li>
        <li class="navLinks"><a class="widthCorrection NavSmallerFont"href="compactFluor.html">Compact Fluorescent <br />lamps &amp; tubes</a></li>
        <li class="navLinks"><a class="widthCorrection NavSmallerFont "href="halide.html">Halide discharge <br />lamps</a></li>
        <li class="navLinks"><a class="widthCorrection NavSmallerFont"href="lightingAcc.html">Lighting units,<br /> gear &amp; accessories</a></li>

      </ul>
          </div><!--/.navbar-collapse -->
        </div>

      </nav>

      <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="jumbotron">
        <div class="container">
          <h1>Ask the experts...</h1>
          <p id="jumbotronTagline">Always happy to help.</p>

        </div>
      </div>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">x</button>
        This Website is currently under construction, Please note that some features may not work properly.<br />Any problems please email us on: mail@lampexpress.uk
      </div>


      <!--Form-->
      <div class="container categories">
        <div class="row">
          <div class="col-md-12 col-centered">
            <h2 class="contactFormTitle">Contact Form</h2>


          </div>
          <div class="formContainer">

    <div class="col-md-6 col-md-offset-3" id="emailForm">

      <?php echo $result; ?>
      <form method="post">
        <div class="form-group textBlue">
          <label for="name">Your Name:</label>
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST ['name']; ?>" />
        </div>

        <div class="form-group textBlue">
          <label for="email">Your Email:</label>
          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST ['email']; ?>" />
        </div>

        <div class="form-group textBlue">
          <label for="comment">Comment:</label>
          <textarea class="form-control" name="comment" placeholder="Your Comment..."><?php echo $_POST ['comment']; ?></textarea>
        </div>

        <input type="submit" name="submit"class="btn btn-lg btnBlue" />

      </form>

  </div>


            </div>




      </div> <!-- /container -->

      <footer id="footerDiv"class="text-center">
        <p>&copy; Copyright 2016-2017 Lighting Solutions</p>
      </footer>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

         <script src="js/bootstrap.min.js"></script>

  </body>
</html>
