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
<center>
<div style=' border :2; border-style: solid; border-color: rgb(12,96,112); background:rgb(16,165,192) ;align='center';'>

<TABLE  CELLPADDING=4>
  <TR>
    <TH ROWSPAN=3 >
      <img src='/images/logo.png' alt="logo" height="72" width="72">
    </TH>
    <TD></TD>
  </TR>

  <TR>
<td>
<FONT COLOR=white face="verdana" SIZE=8 >MEDICAL SURVEY</FONT>
</td>
</TR>
<TR>
<TD></TD>
</TR>
</TABLE>

</div>
</center>
<form action ="{{URL::route('doc_register')}}" method='post' onsubmit ="return validate()">
{{-- <form> --}}
<br>
<fieldset style=' border :0; '>

<legend ALIGN = 'CENTER'><h2> DOCTOR REGISTRATION</h2></legend>
<BR>
    <table align='center' >
    <tr>
        <td><b>DOCTOR NAME:</b></td>
        <td></td>
        <td><input type="text" name="doctor_name" id="doctor_name" placeholder=" Doctor Name"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>MAIL:</b></td>
        <td></td>
        <td><input type="text" name="mail" id="mail" placeholder=" Mail"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>PASSWORD:</b></td>
        <td></td>
        <td><input type="password" name="password" id="password" placeholder=" Password"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>CONFIRM PASSWORD:</b></td>
        <td></td>
        <td><input type="password" name="confirm_password" id="confirm_password" placeholder=" Confrim password"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>MOBILE:</b></td>
        <td></td>
        <td><input type="text" name="doctor_mobile" id="doctor_mobile" maxlength = '10' placeholder=" Mobile No"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>SPECIALIZATION:</b></td>
        <td></td>
        <td><input type="text" name="specialization" id="specialization" placeholder=" Specialization of Doctor"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>ADDRESS:</b></td>
        <td></td>
        <td><input type="text" name="address" id="address" placeholder=" Address"></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td></td>
        <td><BR><input type ='submit' value ='REGISTER' name='submit' style="background-color:black; font-weight:bold; font-family:verdana; font-size:100%; color:white; width :110px ; height:30px border :2; border-style: solid; border-color: black;">
        {{-- <button class="button postfix login-btn"> Register </button></td> --}}
        <td></td>
    </tr>

</table>
</fieldset>
</form>
</body>
</html>
