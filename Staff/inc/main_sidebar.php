<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Staff Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
                <a href="staff_home.php" class="nav-link">
                  <i class="nav-icon fas fa-desktop"></i>
                  <p>Dashborad</p>
                </a>
              </li>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                My Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pending.php" class="nav-link">
                  <i class="far text-warning fa-circle nav-icon"></i>
                  <p>Pending Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="success.php" class="nav-link">
                  <i class="far text-success fa-circle nav-icon"></i>
                  <p>Success Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="all_Students.php" class="nav-link">
                  <i class="far text-success fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="add_student.php" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>Add Student</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>
                  
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="password.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Change Password</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Log Out</p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>