<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Personal Website Sharon</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <?php
      include 'header.html';
    ?>

  <main>
    <div id="projects">
      <div class="container">
        <h1>Latest projects</h1>
        <div id="project-box" class="row">
          <div class="col-sm-6 col-md-3">
            <a href="" alt="">
              <img src="img/placeholder.png" alt="project"/>
              <h4>Title</h4>
              <p>Some text and some more text...</p>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="" alt="">
              <img src="img/placeholder.png" alt="project"/>
              <h4>Title</h4>
              <p>Some text and some more text...</p>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="" alt="">
              <img src="img/placeholder.png" alt="project"/>
              <h4>Title</h4>
              <p>Some text and some more text...</p>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="" alt="">
              <img src="img/placeholder.png" alt="project"/>
              <h4>Title</h4>
              <p>Some text and some more text...</p>
            </a>
          </div>
        </div>
        <div id="seemore">
          <a href="" alt="">See more >></a>
        </div>
      </div>
    </div>


    <div id="about">
      <div class="container">
        <h1>Who am I?</h1>
        <div class="row">
          <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
            <img src="img/sharon.png" alt="Sharon"/>
          </div>
        </div>
          <div class="col-md-offset-2 col-md-8">
            <p>Maecenas eu tristique orci. Praesent nec turpis sed turpis pretium consequat. 
              Donec tincidunt turpis eu tellus eleifend, in posuere leo feugiat. 
              In feugiat aliquam molestie. Sed a blandit felis. Pellentesque consequat viverra lobortis. 
              Phasellus dignissim nulla ac pharetra sagittis. 
            </p>
          </div>
        </div>
      </div>
    </div>


    <div id="contact">
      <div class="container">
        <h1>Get in touch</h1>
        <div class="row">
          <div class="col-sm-offset-4 col-sm-1">
            <a class="mail-img" href="mailto:sharon@mediafruits.nl" alt="sharon@mediafruits.nl"></a>
          </div>
          <div class="col-sm-offset-2 col-sm-1">
            <a class="linkedin-img" href="https://www.linkedin.com/in/svdgeest" alt="LinkedIn"></a>
          </div>
        </div>
      </div>
    </div>


  </main>

    <?php
      include 'footer.html';
    ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</html>