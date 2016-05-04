<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
"http://www.w3.org/TR/html4/frameset.dtd">
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
    <link rel="stylesheet" type="text/css" href="js/source/jquery.fancybox.css?v=2.1.5" media="screen" />

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


    <div id="about">
      <div class="container">
        <a name="about-me-anchor"><div class="space"></div></a>
        <h1>Who am I?</h1>
        <div class="row">
          <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
            <img src="img/sharon.png" alt="Sharon"/>
          </div>
        </div>
          <div class="col-md-offset-2 col-md-8">
            <p>A 25 year old woman. Currently doing a traineeship to become a Full Stack Webdeveloper in Amsterdam. 
              Is interested in learning all kinds of languages. Is curious, helpful and conscientious. 
              Loves to snowboard, play football and play guitar. If possible all in one day. 
            </p>
          </div>
        </div>
      </div>
    </div> 



    <div id="projects">
      <div class="container">
        <a name="projects-anchor"><div class="space"></div></a>
        <h1>Latest projects</h1>
        <div id="project-box" class="row">
          <div class="col-sm-6 col-md-3">
            <a class="fancybox fancybox.iframe" href="first-homework.html" alt="First Homework">
              <section><img src="img/first-homework.PNG" alt="project"/>
                <h4>First homework</h4>
                Getting started with JavaScript and Git Bash.
              </section>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="fancybox fancybox.iframe" href="project1.html" alt="Project 1">
              <section>
                <img src="img/placeholder.png" alt="project"/>
                <h4>Second Title</h4>
                Some text and some more text...
              </section>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="fancybox fancybox.iframe" href="project1.html" alt="Project 1">
              <section>
                <img src="img/placeholder.png" alt="project"/>
                <h4>Third Title</h4>
                Some text and some more text...
              </section>
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="fancybox fancybox.iframe" href="project1.html" alt="Project 1">
              <section>
                <img src="img/placeholder.png" alt="project"/>
                <h4>Title</h4>
                Some text and some more text...
              </section>
            </a>
          </div>
        </div>
        <!-- <div id="seemore">
          <a href="" alt="">See more >></a>
        </div> -->
      </div>
    </div>


    <div id="contact">
      <div class="container">
        <a name="contact-anchor"><div class="space"></div></a>
        <h1>Get in touch</h1>
        <div class="row">
          <div class="col-xs-offset-2 col-xs-4 col-sm-offset-4 col-sm-1">
            <a class="circle mail-img" href="mailto:sharon@mediafruits.nl" alt="sharon@mediafruits.nl"></a>
          </div>
          <div class="col-xs-4 col-sm-offset-2 col-sm-1">
            <a class="circle linkedin-img" href="https://www.linkedin.com/in/svdgeest" alt="LinkedIn" target="blank"></a>
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


  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="js/source/jquery.fancybox.js?v=2.1.5"></script>


  <script type="text/javascript">
  
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      jQuery('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });


    });


  </script>
    
</html>