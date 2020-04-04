<?php
session_start();
if(!isset($_SESSION['login'])){
  header('Location: index.php?erro=1');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administração - Usuários</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include '../../components/menulateral.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include '../../components/nav.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel</h1>
            <a href="register.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Novo Usuário</a>
          </div>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Usuários</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th style="text-align: center;">Editar</th>
                      <th style="text-align: center;">Excluir</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th style="text-align: center;">Editar</th>
                      <th style="text-align: center;">Excluir</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    require_once('../db.class.php');
                    $objDb = new db();
                    $link = $objDb->conecta_mysql();
                    $sqls = " SELECT * FROM user";
                    $resultado_ids = mysqli_query($link, $sqls);
                    if($resultado_ids){
                      while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){
                        $numero = $registros['id_user'];
                        ?>
                        <tr>
                          <td><?php echo $registros['name_user']?></td>
                          <td><?php echo $registros['email_user']?></td>
                          <td style="text-align: center;">
                            <div class="item_lista">
                              <span class="btn btn-warning btn-circle" data-toggle="modal" data-target="#exampleModal" data-whatevernome="<?php echo $registros['name_user']; ?>" data-id="<?php echo $registros['id_user']; ?>" data-whatevertel="<?php echo $registros['email_user']; ?>" data-pagenda="<?php echo $registros['photo_permission']?>" data-pmensagens="<?php echo $registros['concert_permission']?>" data-psistema="<?php echo $registros['video_permission']?>"><i class="fas fa-cogs"></i></span>
                            </td>
                            <td style="text-align: center;">
                              <a href="#" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#ModalApagar"
                              data-id="<?php echo $registros['id_user']; ?>">
                              <i class="fas fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    else {
                      echo 'Erro na consulta dos emails no banco de dados!';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include '../../components/footer.php';?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal-->
  <div id="ModalApagar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Remover Imagem</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="remove.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
          <div class="modal-body">
            <label>Tem certeza que deseja remover a imagem?</label>
            <div class="modal-footer">
              <input type="hidden" class="form-control" name="id" id="id">
              <button type="submit" class="btn btn-danger">Apagar</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="exampleModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="box-title"></h5>
        </div>
        <div class="modal-body">
          <div class="box">
            <form action="edit.php" method="POST">
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" placeholder="Nome" name="nome" id="recipient-name">
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" placeholder="Email" name="email" id="telefone">
              </div>
              <hr>
              <p> Este usuário tem as seguintes permissões:</p>
              <div class="form-group row">
                <div class="col-sm-1 mb-3 mb-sm-0"></div>
                <div class="col-sm-11 mb-3 mb-sm-0">
                  <input type="checkbox" name="usuarios" id="agenda"> Concertos</input>
                </div>
                <div class="col-sm-1 mb-3 mb-sm-0"></div>
                <div class="col-sm-11 mb-3 mb-sm-0">
                  <input type="checkbox" name="imagens" id="mensagens"> Imagens</input>
                </div>
                <div class="col-sm-1 mb-3 mb-sm-0"></div>
                <div class="col-sm-11 mb-3 mb-sm-0">
                  <input type="checkbox" name="videos" id="sistema"> Vídeos</input>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" class="form-control" name="id" id="id">
                <button type="submit" class="btn btn-danger">Atualizar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
            </form>
          </div>   
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

  <script type="text/javascript">
   $('#ModalApagar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-footer #id').val(recipient)
    })
  </script>

  <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal

      var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientnome = button.data('whatevernome')
      var recipienttel = button.data('whatevertel')

      var recipient4 = button.data('pagenda')
      var recipient5 = button.data('pmensagens')
      var recipient6 = button.data('psistema')
      

      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)

      modal.find('#id-curso').val(recipient)
      modal.find('#recipient-name').val(recipientnome)
      modal.find('#telefone').val(recipienttel)

      modal.find('.modal-body #agenda').val(recipient4)
      modal.find('.modal-body #mensagens').val(recipient5)
      modal.find('.modal-body #sistema').val(recipient6)

      recipient4 == 1 ? ($("#agenda").prop('checked', true)) : ($("#agendaeditar").prop('checked', false));
      recipient5 == 1 ? $("#mensagens").prop('checked', true) : $("#mensagens").prop('checked', false);
      recipient6 == 1 ? $("#sistema").prop('checked', true) : $("#sistema").prop('checked', false);

    })
  </script>

  <script type="text/javascript">
   $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-footer #id').val(recipient)
    })
  </script>

</body>

</html>
