<!DOCTYPE html>
<html lang="en">
<head>

  <?php require ('inc/head.php'); ?>
  <title>Welcome To SOSIEC</title>
</head>

<body>
<div class="container-fluid  bg-primary">
<div class="container p-3 mt-5">
    <div class="row my-5 justify-content-center border form-row ">

        <div class="col-md-6 col-sm-10 my-5">
            <img src="images/profile-login-style-vector-removebg-preview.png" class="img-fluid" alt="">
        </div>

        <div class="col-md-5 col-sm-10 my-5 justify-content-center">
                <div class="form-text my-5">   
                     <h1 class="text-center">SOSIEC</h1>
            <p class="text-center">Student Managent Software </p>
                </div>
           
            <form action="" class="form mt-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="enter Your email">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i> </span>
                    </div>
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="enter Your email">
                </div>
                     <a class="text-center" href="#">Forgot Password ?</a>
               <div class="row justify-content-center mt-4">
                   <div class="col-md-5 col-sm-10">
                       <div class="form-group">
                           <input type="submit" class="btn btn-primary btn-lg rounded-pill" value="Log In" >
                       </div>
                   </div>
                   <div class="col-md-5 col-sm-10">
                    <div class="form-group">
                        <input type="submit" class="btn btn-light btn-lg rounded-pill" value="Register" >
                    </div>
                </div>
               </div>
                
            </form>
        </div>
    </div>
</div>
</div>


</body>
</html>
