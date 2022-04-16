<!DOCTYPE html>
<html lang="en">
<head>
<?php require('inc/head.php');?>
   <title>Staff Dashboard</title>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php require('inc/navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require('inc/main_sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->


            <!-- container -->
                <div class="container mt-4 p-con  p-3  ">
                    <!-- row -->
                   
                    <div class="row justify-content-center">
                      <h2>My Students</h2>
                      <div class="col-12">
                          <form action="">
                        <div class="row justify-content-center">
                         
                          <div class="col-md-4  col-sm-10 ">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Student Info</span>
                              </div>
                              <input type="text" placeholder="Name/Phone/Email" class="form-control" >
                            </div>
                          </div>

                          <div class="col-md-2 col-sm-10 ">
                            <div class="form-group">
                           <select name="" class="form-control" id="">
                             <option value="">Select Institution</option>
                           </select>
                            </div>
                          </div>


                          <div class="col-md-2 col-sm-10">
                            <div class="form-group">
                           <select name="" class="form-control" id="">
                             <option value="">Agent In-Charge</option>
                           </select>
                            </div>
                          </div>

                          
                          <div class="col-md-2  col-sm-10">
                            <div class="form-group">
                           <select name="" class="form-control" id="">
                             <option value="">Status</option>
                            
                           </select>
                            </div>
                          </div>

                          <div class="col-md-1  col-sm-8">
                            <div class="form-group">
                          <button  class="form-control btn btn-primary"> <i class="fas fa-search"></i></button>
                            </div>
                          </div>
                       
                        </div>
                      </form>
                      </div>


                     <div class="col-12">

                       <div class="card">
                         <div class="card-header ">
                           <div class="card-tools">
                             <div class="input-group input-group-sm" style="width: 150px;">
                               <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
           
                               <div class="input-group-append">
                                 <button type="submit" class="btn btn-default">
                                   <i class="fas fa-search"></i>
                                 </button>
                               </div>
                             </div>
                           </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body table-responsive p-0">
                              <table class="table table-bordered ">
                                  <thead>
                                      <tr>
                                          <th>S/N</th>
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>Phone number</th>
                                          <th>Email</th>
                                          <th>Course</th>
                                          <th>Institution</th>
                                          <th>Student ID</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>Kolade</td>
                                          <td>Babarinde</td>
                                          <td>07063516699</td>
                                          <td>kollybright@gmail.com</td>
                                          <td>Computer Science</td>
                                          <td>OYSCATCH</td>
                                          <td>ND/180322</td>
                                      </tr>
                                  </tbody>
                              </table>
                         </div>
                         <!-- /.card-body --> 
                          <div class="card-footer clearfix">
             <ul class="pagination pagination-sm m-0 float-right">
                 <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
               </ul>
             </div>

                       </div>
                       <!-- /.card -->
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
