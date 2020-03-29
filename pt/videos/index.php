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

  <!-- Custom styles for this template -->
  <link href="../../web/pages/css/clean-blog.css" rel="stylesheet">
  <link href="../../web/pages/css/extern.css" rel="stylesheet">
  <link rel="stylesheet" href="../../web/pages/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../../web/pages/css/navbar-bio.css">
</head>

<body>

  <!-- Navigation -->
  <?php include '../components/navbar.php';?>

  <!-- Page Header -->
  <img src="../../web/pages/img/midia.jpg" class="tentativa">
  <br><br>
  <!-- Main Content -->
  <div class="container" id="menu">
    <div class="row">
      <div class="col-lg-3 col-md-3 justify-content-md-center">
        <nav class="nav flex-column justify-content-center">
          <a class="text-center nav-link letra" href="../imagens/">Imagens</a>
          <b><a class="text-center nav-link letra" href="#">Vídeos</a></b>
        </nav>
      </div>
      <div class="col-lg-9 col-md-9 mx-auto sobre-maior">
        <h2 style="text-align: center; font-family: poppins;">Entrevistas</h2><br>
        <div class="row justify-content-md-center col-lg-10 col-md-10 mx-auto">
          <iframe width="720" height="480" src="https://www.youtube.com/embed/jkfETzqEkU0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <?php
          require_once('../../administrator/pages/db.class.php');
          $objDb = new Db();
          $link = $objDb->conecta_mysql();
          $sql = "SELECT * FROM `video` WHERE `categoria` LIKE 'Entrevistas'";
          $resultado_id = mysqli_query($link, $sql);
          if($resultado_id){
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
              $link_yt = $registro['link_youtube'];
              echo $link_yt;
              echo "<br>";
            }
          }else{
            echo 'Erro na consulta';
          }
          ?>
        </div>
        <br>
        <div class="row justify-content-md-center">
          <div class="col-sm"></div>
          <div class="col-sm">
            <a class="btn btn-primary btn-block" href="https://m.soundcloud.com/alvarohenrique/bravo-72-190217-mariana-menezes" target="_blank" style="">Ouça aqui <i class="fas fa-podcast"></i></a>
          </div>
          <div class="col-sm"></div>
        </div>
        <br>
        <h2 style="text-align: center; font-family: poppins;">Concertos</h2><br>
        <div class="row justify-content-md-center col-lg-10 col-md-10 mx-auto">
          <iframe width="720" height="480" src="https://www.youtube.com/embed/Xo45Rl21VXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <iframe width="720" height="480" src="https://www.youtube.com/embed/uhPszkoeAfs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <iframe width="720" height="480" src="https://www.youtube.com/embed/02gJlaN6q_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <?php
          require_once('../../administrator/pages/db.class.php');
          $objDb = new Db();
          $link = $objDb->conecta_mysql();
          $sql = "SELECT * FROM `video` WHERE `categoria` LIKE 'Concertos'";
          $resultado_id = mysqli_query($link, $sql);
          if($resultado_id){
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
              $link_yt = $registro['link_youtube'];
              echo $link_yt;
              echo "<br>";
            }
          }else{
            echo 'Erro na consulta';
          }
          ?>
        </div>
        <br>
        <h2 style="text-align: center; font-family: poppins;">Ensaios</h2><br>
        <div class="row justify-content-md-center col-lg-10 col-md-10 mx-auto">
          <iframe width="720" height="480" src="https://www.youtube.com/embed/j4NfVSnjIZE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <br>
          <?php
          require_once('../../administrator/pages/db.class.php');
          $objDb = new Db();
          $link = $objDb->conecta_mysql();
          $sql = "SELECT * FROM `video` WHERE `categoria` LIKE 'Ensaios'";
          $resultado_id = mysqli_query($link, $sql);
          if($resultado_id){
            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
              $link_yt = $registro['link_youtube'];
              echo $link_yt;
              echo "<br>";
            }
          }else{
            echo 'Erro na consulta';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- Footer -->
  <?php include '../components/footer.php';?>

  <!-- Bootstrap core JavaScript -->
  <script src="../../web/pages/vendor/jquery/jquery.min.js"></script>
  <script src="../../web/pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../web/pages/js/clean-blog.min.js"></script>
  <script>
    function scrollNav() {
      $('.nav a').click(function(){  
        //Toggle Class
        $(".active").removeClass("active");      
        $(this).closest('li').addClass("active");
        var theClass = $(this).attr("class");
        $('.'+theClass).parent('li').addClass('active');
        //Animate
        $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href') ).offset().top - 160
        }, 400);
        return false;
      });
      $('.scrollTop a').scrollTop();
    }
    scrollNav();
  </script>
</body>

</html>
