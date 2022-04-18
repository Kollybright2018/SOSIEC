<!DOCTYPE html>
<html lang="en">
<head>

  <?php require ('inc/head_.php'); ?>
  <title>Wellcome To SOSIEC</title>
</head>

<body>
<div class="container-fluid  bg-primary">
<div class="container p-3 mt-5">
    <div class="row my-5 justify-content-center border form-row ">

        <div class="col-md-6 col-sm-10 my-5">
            <img src="images/profile-login-style-vector-removebg-preview.png" class="img-fluid" alt="">
        </div>

        <div class="col-md-5 col-sm-10 my-5 justify-content-center">
                <div class="form-text mt-5 mb-2">   
                     <h1 class="text-center">SOSIEC</h1>
            <p class="text-center">Student Managent Software </p>
                </div>
                <div id="alert" class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong id="alert_text" class="alert-text">Success!</strong>
                        </div>
           
            <form action="" class="form mt-5" id="logform">
            <b><span class="text-danger" id="email_e"></span></b>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="enter Your email">
                </div>

                <b><span class="text-danger" id="password_e"></span></b>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i> </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="enter Your Password">
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

<script>
     let alert = document.getElementById('alert')
let alert_style = alert.style.visibility='hidden';
let alert_text= document.getElementById("alert_text");
let errors = {};

let  logform= document.getElementById('logform')
let email = logform['email'];
let password = logform['password'];
// error Variable
let email_e = document.getElementById('email_e');
let password_e = document.getElementById('password_e');



function validate_email(email){
    let email_p = /([a-zA-Z0-9-_\.]+)@([a-zA-Z]+)\.([a-z])+/

    if (email.value.trim()=='') {
        errors.email="Email no cannot be empty";
        email_e.innerHTML=errors.email;
   return false
}
if (!(email_p.test(email.value))) {
        errors.email="Please Enter Valid Email Address";
        email_e.innerHTML=errors.email;
   return false
}
return true
} // email validation


function validate_password(password){
    if (password.value.trim()=='') {
        errors.password="Password  cannot be empty";
        password_e.innerHTML=errors.password;
   return false
}
return true
} //password

        function validate(){ 
  validate_email(email);
  validate_password(password,)
  return true
}
// Event listener
logform.addEventListener('submit', function (e){
    e.preventDefault();
    validate()
if (Object.keys(errors).length === 0) {
    alert.className= "alert alert-success alert-dismissible"
     alert_style = alert.style.visibility='visible';
     alert_text.innerHTML= "Congratulation Form Submited";
} else{
    alert.className= "alert alert-danger alert-dismissible"
     alert_style = alert.style.visibility='visible';
     alert_text.innerHTML= "Form not Submitted Check The error Below";
}

}) // eventlisterner

</script>
</body>
</html>
