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
  <link rel="stylesheet" href="../../web/pages/css/navbar-bio.css">

</head>

<body>

  <!-- Navigation -->
  <?php include '../components/navbar.php';?>

  <img src="../../web/pages/img/fale.jpg" class="tentativa">

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p style="text-align: center;">Fill out the form below to receive our newsletter and blog news:</p>
        <form action="insert.php" method="POST">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>E-mail</label>
              <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Por favor, preencha o seu endereço de e-mail." name="email">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div id="success"></div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
          </div>
        </form>
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
