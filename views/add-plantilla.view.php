<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin FCTs - Añadir Plantilla</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/png" href="imgs/favicon/agenda.png">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- Calendar -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <?php include "views/partials/menu.partial.php";       ?>
    </ul>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include "views/partials/nav.partial.php";       ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Añadir Plantilla</h1>
                <!--                <p class="mb-4">Descripcion</p>-->

                <form id="add-plantilla" method="post" >
                    <!-- Content Row -->
                    <div class="row ">

                        <div class="col-md-12 col-lg-6 m-auto">
                            <div class="form-group d-none">
                                <label for="id">id</label>
                                <input type="text" class="form-control" id="id" name="id" value="">
                            </div>

                            <div class="form-group col-md-12 col-lg-12 mt-4 ">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="">
                            </div>


                            <div class="form-group col-md-12 col-lg-12 mt-4">
                                <label for="contenido">Contenido</label>
                                <textarea class="form-control" name="contenido" id="contenido" value="" cols="30" rows="10"></textarea>
                                <!--                                <input type="text" class="form-control" id="observaciones" name="observaciones" value="">-->
                            </div>

                            <!--ALERTs-->

                            <div class="form-group mt-2" id="add-success">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center mt-5">
                            <input type="submit" id="save" class="btn btn-lg btn-primary shadow-sm" value="Guardar"><!--<i class="fas fa-save fa-sm text-white-50"></i>-->
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include "views/partials/footer.partial.php";       ?>

        <!-- End of Footer -->

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

<!-- Calendar -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>

<!-- js profile -->
<script src="js/add-plantilla.js"></script>
</body>

</html>
