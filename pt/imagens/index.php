<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mariana Menezes</title>

  <!-- Bootstrap core CSS -->
  <link href="../../web/pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../../web/pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Custom styles for this template -->
  <!-- Custom styles for this template -->
  <link href="../../web/pages/css/clean-blog.css" rel="stylesheet">
  <link href="../../web/pages/css/extern.css" rel="stylesheet">
  <link rel="stylesheet" href="../../web/pages/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../../web/pages/css/navbar-bio.css">
  <style type="text/css">
    #gallery {
      padding-top: 40px;
      @media screen and (min-width: 991px) {
        padding: 60px 30px 0 30px;
      }
    }

    .img-wrapper {
      position: relative;
      margin-top: 15px;
      img {
        width: 50%;
      }
    }
    .img-overlay {
      background: rgba(0,0,0,0.7);
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      i {
        color: #fff;
        font-size: 3em;
      }
    }

    #overlay {
      background: rgba(0,0,0,0.7);
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 999;
      // Removes blue highlight
      -webkit-user-select: none;
      -moz-user-select: none;    
      -ms-user-select: none; 
      user-select: none; 
      img {
        margin: 0;
        width: 80%;
        height: auto;
        object-fit: contain;
        padding: 5%;
        @media screen and (min-width:768px) {
          width: 60%;
        }
        @media screen and (min-width:1200px) {
          width: 50%;
        }
      }
    }

    #nextButton {
      color: #fff;
      font-size: 2em;
      transition: opacity 0.8s;
      &:hover {
        opacity: 0.7;
      }
      @media screen and (min-width:768px) {
        font-size: 3em;
      }
    }

    #prevButton {
      color: #fff;
      font-size: 2em;
      transition: opacity 0.8s;
      &:hover {
        opacity: 0.7;
      }
      @media screen and (min-width:768px) {
        font-size: 3em;
      }
    }

    #exitButton {
      color: #fff;
      font-size: 2em;
      transition: opacity 0.8s;
      position: absolute;
      top: 50px;
      right: 15px;
      &:hover {
        opacity: 0.7;
      }
      @media screen and (min-width:768px) {
        font-size: 3em;
      }
    }

    .mostrar{
      width: 30%;
      height: 30%;
    }

  </style>
</head>

<body>

  <!-- Navigation -->
  <?php include '../components/navbar.php';?>

  <img src="../../web/pages/img/midia.jpg" class="tentativa">

  <br>

  <!-- Page Header 
  <header class="masthead" style="background-image: url('../../web/pages/img/midia.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-8 mx-auto">
          <div class="post-heading">
            <br><br><br><br><br>
            <h1 class="animated bounceInUp titulo" style="font-size: 70px;">Mariana Menezes</h1>
            <br>
            <h1 class="animated bounceInUp subtitulo" style="font-size: 20px;">REGENTE</h1>
          </div>
        </div>
      </div>
    </div>
  </header> -->

  <!-- Post Content -->

  <div class="container" id="menu">
    <div class="row">
      <div class="col-lg-3 col-md-3 justify-content-md-center">
        <nav class="nav flex-column justify-content-center">
          <b><a class="text-center nav-link letra" href="../imagens/">Imagens</a></b>
          <a class="text-center nav-link letra" href="#">Vídeos</a>
        </nav>
      </div>
      <div class="col-lg-9 col-md-9 mx-auto sobre-maior">
        <div class="row justify-content-md-center col-lg-10 col-md-10 mx-auto">
          <h2 style="text-align: center; font-family: poppins;">Imagens</h2><br>
          <section id="gallery">
            <div class="container">
              <div id="image-gallery">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/1novo.jpg"><img src="../../web/pages/img/galeria/1novo.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/2.jpg"><img src="../../web/pages/img/galeria/2.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/3.jpg"><img src="../../web/pages/img/galeria/3.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/4.jpg"><img src="../../web/pages/img/galeria/4.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/24.jpg"><img src="../../web/pages/img/galeria/24.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/5.jpg"><img src="../../web/pages/img/galeria/5.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/6.jpg"><img src="../../web/pages/img/galeria/6.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/23.jpg"><img src="../../web/pages/img/galeria/23.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/7.jpg"><img src="../../web/pages/img/galeria/7.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/8.jpg"><img src="../../web/pages/img/galeria/8.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/9.jpg"><img src="../../web/pages/img/galeria/9.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/10.jpg"><img src="../../web/pages/img/galeria/10.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/11.jpg"><img src="../../web/pages/img/galeria/11.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/12.jpg"><img src="../../web/pages/img/galeria/12.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/13.jpg"><img src="../../web/pages/img/galeria/13.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/14.jpg"><img src="../../web/pages/img/galeria/14.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/22.jpg"><img src="../../web/pages/img/galeria/22.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/15.jpg"><img src="../../web/pages/img/galeria/15.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/25.jpg"><img src="../../web/pages/img/galeria/25.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/16.jpg"><img src="../../web/pages/img/galeria/16.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/17.jpg"><img src="../../web/pages/img/galeria/17.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/18.jpg"><img src="../../web/pages/img/galeria/18.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/19.jpg"><img src="../../web/pages/img/galeria/19.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/20.jpg"><img src="../../web/pages/img/galeria/20.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                    <div class="img-wrapper">
                      <a href="../../web/pages/img/galeria/21.jpg"><img src="../../web/pages/img/galeria/21.jpg" class="img-responsive"></a>
                      <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <?php
                  require_once('../../administrator/pages/db.class.php');
                  $objDb = new db();
                  $link = $objDb->conecta_mysql();
                  $sqls = " SELECT * FROM photo";
                  $resultado_ids = mysqli_query($link, $sqls);
                  if($resultado_ids){
                    while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){
                      $numero = $registros['id_photo'];
                      ?>
                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 image">
                        <div class="img-wrapper">
                          <a href="../../administrator/pages/<?php echo $registros['file_name'];?>"><img src="../../administrator/pages<?php echo $registros['file_name'];?>" class="img-responsive"></a>
                          <div class="img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                  }
                  else {
                    echo 'Erro na consulta dos emails no banco de dados!';
                  }
                  ?>
                </div>
              </div><!-- End row -->
            </div><!-- End image gallery -->
          </div><!-- End container --> 
        </section>
      </div>
    </div>
  </div>
</div>

<!--
  <ul class="gallery_box">
  <li>
    <a href="#0"><img src="../../web/pages/img/6.jpg" class="img-responsive">
    <div class="box_data">
    </div></a>
  </li>
  <li>
    <a href="#0"><img src="../../web/pages/img/6.jpg">
    <div class="box_data">
    </div></a>
  </li>
  <li>
    <a href="#0"><img src="../../web/pages/img/6.jpg">
    <div class="box_data">
    </div></a>
  </li>
  <li>
    <a href="#0"><img src="../../web/pages/img/6.jpg">
    <div class="box_data">
    </div></a>
  </li>
  <li style="position: relative;top: -134px;">
    <a href="#0"><img src="../../web/pages/img/6.jpg">
    <div class="box_data">
    </div></a>
  </li>
      <li>
    <a href="#0"><img src="../../web/pages/img/6.jpg">
    <div class="box_data">
    </div></a>
  </li>
  
</ul>
-->

<hr>

<!-- Footer -->
<?php include '../components/footer.php';?>

<!-- Bootstrap core JavaScript -->
<script src="../../web/pages/vendor/jquery/jquery.min.js"></script>
<script src="../../web/pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../../web/pages/js/clean-blog.min.js"></script>
<script type="text/javascript">
    // Gallery image hover
    $( ".img-wrapper" ).hover(
      function() {
        $(this).find(".img-overlay").animate({opacity: 1}, 600);
      }, function() {
        $(this).find(".img-overlay").animate({opacity: 0}, 600);
      }
      );

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) { 
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
</script>

</body>

</html>
