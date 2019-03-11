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
      <title>Responsive Sticky Navbar</title>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
      <div class="wrapper">

            <!--To include nav bar-->
            <?php include("nav.php"); ?>

            <!--Section to introduce myself briefly-->
            <section class="content">
                  <h1>A Brief Introduction</h1>
                  <p> I'm currently a student of software development. My goal is to have a bredth of knowledge in a wide range of skills. Primarily, I see myself focusing on back-end development but also have a passionfor web design.
                  </p>
                  <p> The creation of this webpage servers many purposes. It will allow me to further my front-end skills while providing a platform that I can showcase the projects that I am, and will work on in the future. Further, it provides an outlet for other developers and anyone who may be interested in meeting or working with me to reach out!
                  </p>
                  <div class="btn">
                      <button class="btnLearn"><a href="about.html"></a>Learn More!</button>
                  </div>
            </section>
            <hr style="width: 80%;">

            <!--Section to intorduce technologies that I have worked with-->
            <section class="content">
                <h1>What have I worked with?</h1>
                <p>
                    So far in my programming journey I have had a taste of a number of technologies. I have had expose to both front-end and back-end languages as well as exposure to working with several database technologies.
                </p>
                <h5>What do I feel comfortable with?</h5>
                <p>
                    
                    I would say I feel most comfortable working with HTML and CSS on the front-end. I also have used the bootstrap framework which I can work my way around. On the background I feel the most comfortable using C# and PHP. Further, I feel comfortable using SQL queries to extract and update information within SQL Server and MySQL databases as needed.
                        
                </p>
                <h5>What other technologies have I used?</h5>
                <p>
                    
                    On the front I have worked on projects using some JavaScript and JQuery to enhance the UI. As for the back I am currently taking a course in Java and Android development. I will be completing a project with these technologies so be sure to check back to see the finished product! Finally, I have also worked in Oracle databases using PL/SQL.
             
                </p>
            </section>

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
