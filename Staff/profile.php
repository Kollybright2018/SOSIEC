<!DOCTYPE html>
<html lang="en">
<head>
<?php require ('inc/head.php'); ?>
   <title>Profile</title>
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
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->


            <!-- container -->
                <div class="container mt-4   p-3  ">
                    <!-- row -->
                    <div class="row  justify-content-center">
                       <div class="col-md-6 col-sm- text-center p-5 p-con">
                           <img src="images/user8-128x128.jpg" width="100" height="100" class="d-block m-auto img-thumnail img-fluid rounded-circle" alt="">
                            
                           <h1> <strong> Sunday Omolewu </strong></h1> 
                           <p>Software Director</p>
                           
                           <button data-toggle="collapse" data-target="#profile" class="btn btn-info mt-2">Edit Profile <i class="pl-2 fas fa-arrow-down"></i> </button>
                        <div id="profile" class="collapse text-left">
                            <form action=""> 
                                <div class="form-group mt-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded-pill " name="" id="" placeholder="Name">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control rounded-pill " name="" id="" placeholder="Email">
                                </div>
                                 
                                <div class="form-group mt-3">
                                    <label for="" class="form-label">Phone Number</label>
                                    <input type="email" class="form-control rounded-pill " name="" id="" placeholder="Phone number">
                                </div>

                                <div class="form-group mt-3">
                                    <input type="submit" class="form-control btn btn-success rounded-pill" value="Update" name="" id="" placeholder="Name">
                                </div>
                                
                            </form>
                        </div>
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
