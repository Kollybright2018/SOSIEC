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

})
