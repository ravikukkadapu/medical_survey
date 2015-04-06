<html>
<head>
<title>Medical survey</title>
<script>
function validate()
{
    var dname = document.getElementById('doctor_name').value;

    if(document.getElementById('doctor_name').value=="")
   {
       alert("Please Enter the Doctor-Name");
       document.getElementById('doctor_name').focus();
       return false
   }

    var email = document.getElementById('mail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value))
    {
        alert('Please provide a valid email address');
       document.getElementById('mail').focus();
        return false;
}

    if(document.getElementById('password').value=="")
   {
       alert("Please Enter password");
       document.getElementById('password').focus();
       return false
   }

   if(document.getElementById('doctor_mobile').value=="")
   {
       alert("Please Enter the mobile no")
       document.getElementById('doctor_mobile').focus();
       return false
   }
   else if(isNaN(document.getElementById('doctor_mobile').value))
   {
       alert("Please Enter only numbers for mobileno");
       document.getElementById('doctor_mobile').focus();
       return false
   }
       if(document.getElementById('confirm_password').value=="")
   {
       alert("Please Enter confirm password");
       document.getElementById('confirm_password').focus();
       return false
   }
    if(document.getElementById('specialization').value=="")
   {
       alert("Please Enter specialization");
       document.getElementById('specialization').focus();
       return false
   }
          if(document.getElementById('address').value=="")
   {
       alert("Please Enter address");
       document.getElementById('address').focus();
       return false
   }
   return true
}
</script>
</head>
<body style=' border :0; background:rgb(239,239,229)  '>
<center style=' background:rgb(12,96,112)'>
<br>
<h1><font color="white">MEDICAL SURVEY</font></h1>
<br>
</center>
<form action ="{{URL::route('doc_register')}}" method='post' onsubmit ="return validate()" style=' border :0;  '>
{{-- <form> --}}
<br>
<fieldset style=' border :0; '>

<legend ALIGN = 'CENTER'> DOCTOR REGISTRATION</legend>
<BR>
    <table align='center' >
    <tr>
        <td>DOCTOR NAME:</td>
        <td></td>
        <td><input type="text" name="doctor_name" id="doctor_name" placeholder=" Doctor Name"></td>
    </tr>
    <tr>
        <td>MAIL:</td>
        <td></td>
        <td><input type="text" name="mail" id="mail" placeholder=" Mail"></td>
    </tr>
    <tr>
        <td>PASSWORD:</td>
        <td></td>
        <td><input type="password" name="password" id="password" placeholder=" password"></td>
    </tr>
    <tr>
        <td>CONFIRM PASSWORD:</td>
        <td></td>
        <td><input type="password" name="confirm_password" id="confirm_password" placeholder=" Confrim password"></td>
    </tr>
    <tr>
        <td>MOBILE:</td>
        <td></td>
        <td><input type="text" name="doctor_mobile" id="doctor_mobile" maxlength = '10' placeholder=" Mobile No"></td>
    </tr>
    <tr>
        <td>SPECIALIZATION:</td>
        <td></td>
        <td><input type="text" name="specialization" id="specialization" placeholder=" Specialization of Doctor"></td>
    </tr>
    <tr>
        <td>ADDRESS:</td>
        <td></td>
        <td><input type="text" name="address" id="address" placeholder=" Address"></td>
    </tr>
    <tr>
        <td></td>
        <td><BR><button class="button postfix login-btn"> Register </button></td>
        <td></td>
    </tr>
</table>
</fieldset>
</form>
</body>
</html>
