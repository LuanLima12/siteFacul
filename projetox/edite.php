<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Luan Lima</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

        <?php
            include "includes/menulateral.php";
        ?> 

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php
            include "includes/topo.php";
            include "includes/editar.php";
            include "includes/conferirEdite.php";
        ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Editar personagem</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <form name="formulario1" method="POST" action="includes/editar2.php?id=<?php echo $id; ?>">
                <div class="col-sm-6">
                    <label >Id do personagem</label>
                    <input type="number" class="form-control" disabled value="<?php echo $id; ?>" id="id" name="id" required>
                </div>
                <div class="col-sm-6">
                    <label >Nome do jogador</label>
                    <input type="text" class="form-control" value="<?php echo $jogador; ?>" id="jogador" name="jogador" required>
                </div>
                <div class="col-sm-6">
                    <label >Nome completo do personagem</label>
                    <input type="text" class="form-control" value="<?php echo $personagem; ?>" id="personagem" name="personagem" required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>Raça</label>
                        <select class="custom-select" id="raca" name="raca">
                            <option value="humano" <?php echo racaHumano($raca); ?> >Humana</option>
                            <option value="elfo" <?php echo racaElfo($raca);?> >Elfica</option>
                            <option value="besta" <?php echo racaBesta($raca); ?> >Besta</option>
                            <option value="demonio" <?php echo racaDemonio($raca); ?> >Demoniaca</option>
                            <option value="anao" <?php echo racaAna($raca); ?> >Anã</option>
                        </select>
                    </div> 
                    <div class="col-sm-3">
                        <label>Partes robóticas?</label>
                        <select class="custom-select" id="cyborgue" name="cyborgue" value="<?php echo $cyborgue; ?>">
                            <option value="1" <?php echo cyb1($cyborgue); ?> >Sim</option>
                            <option value="0" <?php echo cyb0($cyborgue); ?> >Não</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Classe</label>
                        <select class="custom-select" id="classe" name="classe" value="<?php echo $classe; ?>">
                            <option value="guerreiro" <?php echo classeGue($classe); ?> >Guerreiro</option>
                            <option value="ladino" <?php echo classeLa($classe); ?> >Ladino</option>
                            <option value="necromante" <?php echo classeNe($classe); ?> >Necromante</option>
                            <option value="cacador" <?php echo classeCa($classe); ?> >Caçador</option>
                            <option value="druida" <?php echo classeDru($classe); ?> >Druída</option>
                            <option value="bardo" <?php echo classeBar($classe); ?> >Bardo</option>
                            <option value="berserker" <?php echo classeBer($classe); ?> >Berserker</option>
                            <option value="paladino" <?php echo classePa($classe); ?> >Paladino</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-dark">Atualizar</button>   
                </div>
            </form>

          </div>

         
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

        <?php
            include "includes/footer.php";
        ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
