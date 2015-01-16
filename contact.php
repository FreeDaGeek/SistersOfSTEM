<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Free Rosas" content="STEM-related website">
    <link rel="icon" href="../../favicon.ico">

    <title>Sister of STEM | Contact Us</title>
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
   <div class="container">
        <a href="index.html">
        <img id ="logo" src="images/logo.png" alt=""></a>
            <ul class="nav nav-pills">
              <li id="pink"><a href="about.html">About Us</a></li>
              <li id="green"><a href="edusource.html">EduSource</a></li>
              <li id="purple"><a href="events.html">STEM Events</a></li>
              <li id="pink"><a href="diy.html">DIY Experiments</a></li>
              <li id="green"><a href="contact.html">Contact Us</a></li>
            </ul>

<!-- Contact Form
================================================== -->
   Name: <input type="text" name="name" value="<?php echo $name;?>">

   E-mail: <input type="text" name="email" value="<?php echo $email;?>">

   Website: <input type="text" name="website" value="<?php echo $website;?>">

   Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

   	</div>

     <!-- FOOTER -->
      <footer>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-linkedin"></i>
        <p class="pull-left">&copy; 2014 Pink Pineapple, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>