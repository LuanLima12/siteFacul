<html>

<head>
   <!-- Custom fonts for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <?php
          include "includes/styleParaLinks.php";

    ?>

</head>

<body>
<div class="card shadow mb-4" style="width: 1200px;">
            <div class="card-header py-3">
                <div class="float-left">
                  <form name="search" id="search" method="POST" action="pesquisa.php">
                    <input type="search" class="pesquisa" id="jogador" name="jogador" placeholder="Nome do jogador">
                    <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i></button>
                  </form>
                </div>
                <div class="float-right">
                <button type="button" class="btn btn-dark">
                <a class="luan" href="add_perso.php"><i class="fa fa-plus-circle"></i> Add personagem</button></a>                
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Jogador</th>
                      <th>Personagem</th>
                      <th>Raça</th>
                      <th>Classe</th>
                      <th>Operações</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Jogador</th>
                      <th>Personagem</th>
                      <th>Raça</th>
                      <th>Classe</th>
                      <th>Operações</th>
                    </tr>
                  </tfoot>
                 
                    <?php
                        include "includes/selecionar.php";
                        //include "includes/modal.php";
                    ?>

                </table>
              </div>
            </div>
</div>

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <script>

  

  </script>

</body>
</html>
           