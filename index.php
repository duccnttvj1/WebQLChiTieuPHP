<!DOCTYPE html>
<html lang="en">

<head>
<?php include('inc/head.php')?>
</head>

<body class="sb-nav-fixed">
<?php include('inc/header.php')?>
    <div id="layoutSidenav">
    <?php include('inc/menu.php')?>
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
            <?php
       $idad = $_SESSION['id'];
       $sumctcd = mysqli_query($connect, "SELECT SUM(sotien) as 'tongtien' 
       FROM chitieucodinh
       WHERE taikhoan_id = $idad
       ");
       $artinhctcd= mysqli_fetch_array($sumctcd);
       $sumctps = mysqli_query($connect, "SELECT SUM(sotien) as 'tongtien' 
       FROM chitieuphatsinh
       WHERE taikhoan_id = $idad
       ");
       $artinhctps= mysqli_fetch_array($sumctps);
       $sumtnc = mysqli_query($connect, "SELECT SUM(sotien) as 'tongtien' 
       FROM thunhapchinh
       WHERE taikhoan_id = $idad
       ");
       $artinhtnc= mysqli_fetch_array($sumtnc);
       $sumtnp = mysqli_query($connect, "SELECT SUM(sotien) as 'tongtien' 
       FROM thunhapphu
       WHERE taikhoan_id = $idad
       ");
       $artinhtnp= mysqli_fetch_array($sumtnp);
       $sumktk = mysqli_query($connect, "SELECT SUM(sotien) as 'tongtien' 
       FROM khoantietkiem
       WHERE taikhoan_id = $idad
       ");
       $artinhktk= mysqli_fetch_array($sumktk);

       $ttt =  $artinhktk['tongtien'] + $artinhtnc['tongtien'] + $artinhtnp['tongtien'];
       $ttc =  $artinhctcd['tongtien'] + $artinhctps['tongtien'];
       $sd = $ttt - $ttc
    ?>
<div class="container-fluid px-4">

<div class="row mt-4">
<div class="col-xl-4 col-md-6">
<div class="card bg-primary text-white mb-4">
<div class="card-body">Tổng tiền thu : <strong> <?php echo number_format($ttt) ?> VND</strong> </div>
<div class="card-footer d-flex align-items-center justify-content-between">
<a class="small text-white stretched-link" href=""></a>
<div class="small text-white"></div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="card bg-warning text-white mb-4">
<div class="card-body">Tổng tiền chi : <strong> <?php echo number_format($ttc) ?> VND</strong> </div>
<div class="card-footer d-flex align-items-center justify-content-between">
<a class="small text-white stretched-link" href=""></a>
<div class="small text-white"></div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="card bg-success text-white mb-4">
<div class="card-body">Số dư : <strong> <?php echo number_format($sd) ?> VND</strong></div>
<div class="card-footer d-flex align-items-center justify-content-between">
<a class="small text-white stretched-link" href=""></a>
<div class="small text-white"></div>
</div>
</div>
</div>
</div>
</div>

</main>
            </main>
            <?php include('inc/footer.php')?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
                     <?php 
                    if (isset($_GET['msg'])) {?>
                        <script>
                        function Redirect() {
                        window.location = 'index.php';
                        }
                        alert('Đăng nhập thành công !') 
                        Redirect()
                    </script>
                   <?php } ?>
</body>

</html>