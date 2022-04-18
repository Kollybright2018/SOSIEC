<!DOCTYPE html>
<html lang="en">

<head>

    <?php require('inc/head_.php'); ?>

    <title>Register</title>
</head>

<body>
    <div class="container-fluid bg-primary">
        <div class="container p-3 mt-5">
            <div class="row my-5 justify-content-center border form-row ">

                <div class="col-md-6 col-sm-10 my-5">
                    <img src="images/signup.png" class="img-fluid" alt="">
                </div>

                <div class="col-md-5 col-sm-10 my-4 justify-content-center">
                    <div class="form-text my-5">
                        <h1 class="text-center">SOSIBC</h1>
                        <p class="text-center">Student Managent Software </p>
                    </div>

                    <form action="" method="POST" id="regform" class="form mt-5">
                        <p class="text-center">Creat Account</p>

                        <div id="alert" class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong id="alert_text" class="alert-text">Success!</strong>
                        </div>

                        <b> <span class="text-danger" id="fname_e"></span></b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> Full Name</i></span>
                            </div>
                            <input type="text" name="fname" class="form-control form-control-lg" placeholder="Enter Your Full name">
                        </div>
                        <b><span class="text-danger" id="phone_no_e"></span></b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> Phone No:</i></span>
                            </div>
                            <input type="text" name="phone_no" class="form-control form-control-lg" placeholder="Enter Your Phone Number">
                        </div>

                        <b><span class="text-danger" id="email_e"></span></b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> Email :</i></span>
                            </div>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Your Email">
                        </div>

                        <b><span id="password_e" class="text-danger"></span></b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Password</span>
                            </div>
                            <input type="password" name="password" class="form-control form-control-lg" placeholder="password">
                        </div>

                        <b><span id="con_password_e" class="text-danger"></span></b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Confirm Password </span>
                            </div>
                            <input type="password" name="con_password" class="form-control form-control-lg" placeholder="Confirm Password">
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-md-5 col-sm-10">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg rounded-pill" value="Register">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-10">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-light btn-lg rounded-pill" value="Log in">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/script_.php') ?>
<script>
     let alert = document.getElementById('alert')
let alert_style = alert.style.visibility='hidden';
let alert_text= document.getElementById("alert_text");
let errors = {};
// console.log(Object.keys(errors).length);
// form and input variable
let  regform= document.getElementById('regform')
let fname = regform['fname'];
let email = regform['email'];
let phone_no = regform['phone_no'];
let password = regform['password'];
let con_password = regform['con_password'];

// error Variable
let fname_e = document.getElementById('fname_e');
let email_e = document.getElementById('email_e');
let phone_no_e = document.getElementById('phone_no_e');
let password_e = document.getElementById('password_e');
let con_password_e = document.getElementById('con_password_e');


// name validation function
function validate_name(fname){
    // regexp for full name patter two name are required
    let pattern = /(\w)\s(\w)/;
    if (fname.value.trim()==''){
          errors.fname="Full name cannot be empty";
          fname_e.innerHTML=errors.fname;
         return false
}
if (!(pattern.test(fname.value))) {
    errors.fname="Please Enter Your Full Name";
          fname_e.innerHTML=errors.fname;
   return false
}
}   //name validation

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


// validate Phone Number
function validate_phone_no(phone_no){
    let phone_no_pattern = /(070|090|081|080|091)(\d{8})/ 
    if (phone_no.value.trim()=='') {
        errors.phone_no="Phone no cannot be empty";
        phone_no_e.innerHTML=errors.phone_no;
   return false
}

if (phone_no.value.length > 11) {
    errors.phone_no="Please Enter Valid Phone Number";
        phone_no_e.innerHTML=errors.phone_no;
   return false
}

if (!(phone_no_pattern.test(phone_no.value)) ) {
    errors.phone_no="Please Enter Valid Phone Number";
        phone_no_e.innerHTML=errors.phone_no;
   return false
}
return true
} //phone no

function validate_password(password, con_password){
    if (password.value.trim()=='') {
        errors.password="Password  cannot be empty";
        password_e.innerHTML=errors.password;
   return false
}
if (con_password.value.trim()=='') {
    errors.con_password="Confirm Password  cannot be empty";
        con_password_e.innerHTML=errors.con_password;
   return false
}

if (password.value.lenth < 6) {
        errors.password="Password  Must be equal or Greater than Six character";
        password_e.innerHTML=errors.password;
   return false
}
if (con_password.value.length <6) {
    errors.con_password="Password  Must be equal or Greater than Six character";
        con_password_e.innerHTML=errors.con_password;
   return false
}


if (con_password.value != password.value) {
    errors.con_password="Password did not match";
    errors.password="Password did not match";
            con_password_e.innerHTML=errors.con_password;
        con_password_e.innerHTML=errors.password;

   return false
}
return true
} //password

        function validate(){
  validate_name(fname) ; 
  validate_email(email);
  validate_phone_no(phone_no);
  validate_password(password, con_password)
  return true
}
// Event listener
regform.addEventListener('submit', function (e){
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