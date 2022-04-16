<!DOCTYPE html>
<html lang="en">
<head>
<?php require ('inc/head.php'); ?>
   <title>Change password</title>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php require ('inc/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require ('inc/main_sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Change Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->


            <!-- container -->
                <div class="container m-4 p-con  p-3  ">
                    <!-- row -->
                    <div class="row  justify-content-center ">
                        <div class="col-md-6 col-sm-10">
                            <img src="../images/forgot.png" class="img-fluid" alt="">
                        </div>

                        <div class="col-md-6 col-sm-10">
                            <form action="" class="mt-5">
                                <div class="form-group mt-3">
                                    <label class="form-label" for="">Old Password</label>
                                    <input type="text" name="" id="" placeholder="Old Password" class="form-control form-control-lg  rounded-pill">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label" for="">New Password</label>
                                    <input type="text" name="" id="" placeholder="New Password" class="form-control form-control-lg rounded-pill">
                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label" for="">Confirm New Password</label> 
                                    <input type="text" name="" id="" placeholder="Confirm New Password" class="form-control form-control-lg rounded-pill">
                                </div>

                                <div class="form-group mt-3">
                                  
                                    <input type="submit" name="" id="" Value="Change Password" class="btn btn-primary form-control form-control-lg rounded-pill">
                                </div>
                            </form>
                        </div>

                     
                       
                    </div>
                    <!-- /row -->
                </div>
            <!-- /container -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php require ('inc/footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php require ('inc/script.php'); ?>
</body>
</html>
