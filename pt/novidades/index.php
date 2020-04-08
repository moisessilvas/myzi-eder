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
  <img src="../../web/pages/img/news.jpg" class="tentativa">
  <br>
  <!-- Main Content -->
  <h2 style="text-align: center; font-family: poppins;">Novidades</h2>
  <br>
  <?php
  require_once('../../administrator/pages/db.class.php');
  $objDb = new db();
  $link = $objDb->conecta_mysql();
  $sqls = " SELECT * FROM concerto";
  $resultado_ids = mysqli_query($link, $sqls);
  if($resultado_ids){
    while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){
      $numero = $registros['idconcerto'];
      ?>
      <div class="container" style="text-align: left; font-family: poppins;">
        <div class="row">
          <div class="col-lg-1 col-md-1 justify-content-md-center"></div>
          <div class="col-lg-4 col-md-12 justify-content-md-center">
            <img src="../../administrator/pages<?php echo $registros['link_endereco'];?>">
          </div>
          <div class="col-lg-7 col-md-12 justify-content-md-center">
            <h5><b><?php echo $registros['nome_evento'];?></b></h5><br>
            <h6 style="text-align: left; font-family: poppins; font-weight: 200;"><?php echo $registros['nome_concerto'];?></h6>
            <h6 style="text-align: left; font-family: poppins; font-weight: 200;">A Série Madrigal, convida: Mariana Menezes, Maestrina em Residência</h6>
            <h6 style="text-align: left; font-family: poppins; font-weight: 200;"><?php echo $registros['data'];?></h6>
            <h6 style="text-align: left; font-family: poppins; font-weight: 200;"><?php echo $registros['endereco'];?></h6>
          </div>
        </div>
      </div>
      <hr>
      <?php
    }
  }
  else {
    echo 'Erro na consulta dos emails no banco de dados!';
  }
  ?>
  <div class="row">
    <div class="col-lg-2 col-md-1 justify-content-md-center"></div>
    <div class="col-lg-4 col-md-12 justify-content-md-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15355.671104529274!2d-47.881149!3d-15.808289!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa11b843e009d8b7d!2sEscola%20de%20M%C3%BAsica%20de%20Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1585168424020!5m2!1spt-BR!2sbr" width="auto" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="padding-right: 50%; padding-left: 50%;"></iframe>
    </div>
    <div class="col-lg-6 col-md-12 justify-content-md-center">
      <h5><b>Madrigal de Brasília, Temporada 2020</b></h5><br>
      <h6 style="text-align: left; font-family: poppins; font-weight: 200;">The Gift of Life</h6>
      <h6 style="text-align: left; font-family: poppins; font-weight: 200;">A Série Madrigal, convida: Mariana Menezes, Maestrina em Residência</h6>
      <h6 style="text-align: left; font-family: poppins; font-weight: 200;">01 de abril de 2020 às 20h00</h6>
      <h6 style="text-align: left; font-family: poppins; font-weight: 200;">TLA - Teatro Levino de Alcântara</h6>
      <h6 style="text-align: left; font-family: poppins; font-weight: 200;">EMB - Av. L2 Sul - Quadra 602 - Entrada Franca!</h6>
    </div>
  </div>
</div>
<hr>
<div class="container" style="text-align: left; font-family: poppins;">
  <div class="row">
    <div class="col-lg-1 col-md-1 justify-content-md-center"></div>
    <div class="col-lg-7 col-md-12 justify-content-md-center">
      <h5><b></b></h5><br>
      <h5 style="text-align: center; font-family: poppins; font-weight: 200;">Mariana Menezes anuncia parceria com a Equipe de Assessoria e Agenciamento Artístico da Maikai Consultoria, com a qual trabalhará na produção de seus próximos concertos e projetos artísticos.</h5>
    </div>
    <div class="col-lg-4 col-md-12 justify-content-md-center">
      <img src="../../web/pages/img/foto1.jpeg">
    </div>
  </div>
</div>
<hr>
<div class="container" style="text-align: left; font-family: poppins;">
  <div class="row">
    <div class="col-lg-1 col-md-1 justify-content-md-center"></div>
    <div class="col-lg-4 col-md-12 justify-content-md-center">
      <img src="../../web/pages/img/foto2.jpeg">
    </div>
    <div class="col-lg-7 col-md-12 justify-content-md-center">
      <h5><b></b></h5><br>
      <h5 style="text-align: center; font-family: poppins; font-weight: 200;">Em 2020, durante o período de cinco semanas, Mariana será a Maestrina em Residência do renomado coro Madrigal de Brasília. A residência culminará em um concerto que abarca repertório do Século XX e XXI, cujo nome será The Gift Of Life. </h5>
    </div>
  </div>
</div>
<hr>
<div class="container" style="text-align: left; font-family: poppins;">
  <div class="row">
    <div class="col-lg-1 col-md-1 justify-content-md-center"></div>
    <div class="col-lg-7 col-md-12 justify-content-md-center">
      <h5><b></b></h5><br><br>
      <h5 style="text-align: center; font-family: poppins; font-weight: 200;">Mariana continua apresentando o programa Entre Notas, da Plataforma Digital MUSICALLL. Neste ano, o programa toma dimensões ainda maiores com transmissões ao vivo no Instagram da Plataforma @musicalllofficial. <a href="https://www.youtube.com/playlist?list=PLZzV0jygZ2lUVDNAT2kEVKqu19ihleNrX" target="_blank">Confira aqui as entrevistas já realizadas.</a></h5>
    </div>
    <div class="col-lg-4 col-md-12 justify-content-md-center">
      <img src="../../web/pages/img/foto3.jpeg">
    </div>
  </div>
</div>
<hr>

<!-- Footer -->
<?php include '../components/footer.php';?>

<!-- Bootstrap core JavaScript -->
<script src="../../web/pages/vendor/jquery/jquery.min.js"></script>
<script src="../../web/pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="../../web/pages/js/jqBootstrapValidation.js"></script>
<script src="../../web/pages/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="../../web/pages/js/clean-blog.min.js"></script>

</body>

</html>
