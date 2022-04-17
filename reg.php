<!DOCTYPE html>
<html lang="en">
<head>

<?php require ('inc/head_.php'); ?>
  
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
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Enter Your Email">
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
                           <input type="submit" class="btn btn-primary btn-lg rounded-pill" value="Register" >
                       </div>
                   </div>
                   <div class="col-md-5 col-sm-10">
                    <div class="form-group">
                        <input type="submit" class="btn btn-light btn-lg rounded-pill" value="Log in" >
                    </div>
                </div>
               </div>
                
            </form>
        </div>
    </div>
</div>
</div>


<script> 
let email1 = "kollybright2018@gmail.com";
let mp = " /([a-zA-Z0-9-_\.]+)@([a-zA-Z])\.\S([a-zA-Z])$/";
let emp = /([a-zA-Z0-9_\.-]+)@([a-zA-Z])+\.([a-z]+)$/
let email_p = /([a-zA-Z0-9-_\.]+)@([a-zA-Z]+)\.([a-z])+/
let fullname= "Babarinde kolade";
let pattern = /(\w)\s(\w)/;
let result = emp.test(email1);
const myno= '07063519933';
console.log(email_p.test(email1));
// let phone_no_pattern = /\d{11}$/
let phone_no_pattern = /(070|090|081|080|091)(\d{8})/

// console.log(phone_no_pattern.test(myno));
// console.log(myno)
// console.log(result);
let   regform= document.getElementById('regform')
let fname = regform['fname'];
let email = regform['email'];
let phone_no = regform['phone_no'];
let password = regform['password'];
let con_password = regform['con_password'];

// error tags
let fname_e = document.getElementById('fname_e');
let email_e = document.getElementById('email_e');
let phone_no_e = document.getElementById('phone_no_e');
let password_e = document.getElementById('password_e');
let con_password_e = document.getElementById('con_password_e');


// function inp(){
//     if (fname.value.trim()==''){
//    fname_e.innerHTML="Full name cannot be empty";
//    return false
// }
// if (pattern.test( fname.value)) {
//     fname_e.innerHTML="Two name are required";
//    return false
// }
// }


function validate(){
    if (fname.value.trim()==''){
   fname_e.innerHTML="Full name cannot be empty";
   return false
}
if (!(pattern.test(fname.value))) {
    fname_e.innerHTML="Please Enter Your Full Name";
   return false
}
if (phone_no.value.trim()=='') {
    phone_no_e.innerHTML="Phone no cannot be empty";
   return false
}
// if (phone_no.value.lenth != 11) {
//     phone_no_e.innerHTML="Invalid Phone Number";
//    return false
// }

if (!(phone_no_pattern.test(phone_no.value)) ) {
    phone_no_e.innerHTML="Please Enter Valid Phone Number";
   return false
}
if (email.value.trim()=='') {
    email_e.innerHTML="Email no cannot be empty";
   return false
}
if (!(email_p.test(email.value))) {
  email_e.innerHTML="Please Enter Valid Email Address";
  console.log(email.value);
   return false
}
if (password.value.trim()=='') {
    password_e.innerHTML="Password  cannot be empty";
   return false
}
if (con_password.value.trim()=='') {
    con_password_e.innerHTML="Confirm password cannot be empty";
   return false
}

return true
}


regform.addEventListener('submit', function (e){
e.preventDefault();

validate();

})
</script>

</body>
</html>
