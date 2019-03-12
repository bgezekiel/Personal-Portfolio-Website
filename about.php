<!--
    About me page for website
    Author: Brandon Ezekiel
    Date: March 11, 2019
    This is the page is designed to let people who I am outside of prgramming
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
        <header>
            <div class="containerAbout">
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
                <div class="textabout">
                    <h5>Learn who I am outside of programming.</h5>
                    <h1>ABOUT ME.</h1>
                </div>
            </div> 
    </header>
    <main id="about">
        <div class="page-content-about">
            <div class="copy">
                <div style="width:100%; margin:auto; float:left">
                    <div class="aboutPillar">
                        <div class="paddingBran"></div>
                    </div>
                    <div class="wrapAbout">
                        <img class="person" src="images/person.jpg">
                        </div>
                    <section class="content">
                        <h1 class="bran">Hi, I'm Brandon Ezekiel.</h1>
                        <p class="bran">
                            I am a student of software development. I enjoy both development and web design. I like to build clean, simple, and functional applications that provide value for end users.
                        </p>
                    </section>
                    <hr style="width: 80%;">
                    

                </div>
            </div>
            
        </div>
    
    </main>




    <!--To include footer -->
    <?php include("footer.php")?>
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