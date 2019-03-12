<!--
    Main page for website
    Author: Brandon Ezekiel
    Date: March 11, 2019
    This is the page that is loaded when the site is vistied
-->

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Welcome!</title>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <div class="wrapper">
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav> 

    </div>







      <!--Script from scroll and toggle menu-->
      <script type="text/javascript">
      // Menu-toggle button
      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
      // Scrolling Effect
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>
</body>
</html>