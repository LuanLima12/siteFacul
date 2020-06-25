<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        include "includes/styleParaLinks.php";
    ?>

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
            include "includes/visualizar2.php";
        ?> 

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php
            include "includes/topo.php";
        ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Visualização de ficha</h1>
          </div>

          <!-- Content Row -->
          <div class="row">


          <!--<div class="card shadow mb-4" style="width: 1200px;">
            <div class="card-header py-3">
                
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
              </div>
            </div>
          </div>-->

        <div class="table-responsive">
                


            <!--<div class="card shadow mb-4" style="width: 1200px;">-->
              <div class="B">
                <div class="table-responsive">

                  <br>

                  <div class="form-group row" style="margin-bottom: 0px;">
                    <div  class="centro">
                    <i> Jogador: <?php echo $jogador; ?> </i>
                    </div>
                  </div>

                  <br>
                  <div class="form-group row" style="margin-bottom: 0px;">
                      <div id= "vazio" class="col-sm-2"></div>
                      <div class="col-sm-6" >
                      <i> Personagem: <?php echo $personagem; ?> </i>
                      </div>
                      <div id="vazio" class="col-sm-1"></div>
                      <div class="col-sm-1">
                      <i> ID: <?php echo $id; ?> </i><br>
                      </div>
                  </div><br>

                  <div class="form-group row">
                    <div id="vazio" class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <i id="i">Raça: <?php echo $raca; ?> </i>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div id="vazio" class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <i id="i">Classe: <?php echo $classe; ?> </i>
                    </div>
                  </div><br>

                  <div class="form-group row" style="margin-bottom: 0px;">
                    <div  class="centro">
                      <i id="centro">Atributos</i>
                    </div>
                  </div><br>

                  <div class="form-group row" style="margin-bottom: 0px;">
                    <div id="vazio" class="col-sm-5"></div>
                    <div class="col-sm-2">
                      <i>Força: <?php echo $forca; ?> </i> 
                    </div>
                    <!--<div id="vazio" class="col-sm-1"></div>-->
                    <div class="col-sm-2">
                      <i>Mana: <?php echo $mana; ?> </i><br>
                    </div><br>
                  </div>

                  <div class="form-group row" style="margin-bottom: 0px;">
                    <div id="vazio" class="col-sm-3"></div>
                    <div class="col-sm-2">
                      <i>Destreza: <?php echo $destreza; ?> </i> 
                    </div>
                    <!--<div id="vazio" class="col-sm-1"></div>-->
                    <div class="col-sm-2">
                      <i>Resistência: <?php echo $resistencia; ?> </i>
                    </div>
                    <!--<div id="vazio" class="col-sm-1"></div>-->
                    <div class="col-sm-2">
                      <i>Carisma: <?php echo $carisma; ?> </i>
                    </div>
                  </div><br><br><br>

                </div>
              </div>
            <!--</div>-->
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
