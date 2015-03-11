<html>
<head>
<title>Medical survey</title>
</head>
<body><center>
<h2>MEDICAL SURVEY</h2></center>
{{-- <form action ="{{URL::route('doregister')}}" method='post'> --}}
<form>
<fieldset>
<legend> Registration Page</legend>
<div class="row">
<div class="small-4 medium-centered columns">
    <table align='center'>
    <tr>
        <td>PATIENT CODE:*</td>
        <td></td>
        <td><input type="text" name="patient_code" id="patient_code" placeholder="Enter Patient code"></td>
    </tr>
    <tr>
        <td>PATIENT MAIL:*</td>
        <td></td>
        <td><input type="text" name="patient_mail" id="patient_mail" placeholder="Enter Mail"></td>
    </tr>
    <tr>
        <td>PATIENT MOBILE-NO:</td>
        <td></td>
        <td><input type="text" name="patient_mobile" id="patient_mobile" placeholder="Enter Mobile Number"></td>
    </tr>
    <tr>
        <td>PASSWORD:</td>
        <td></td>
        <td><input type="password" name="patient_password" id="patient_password" placeholder="Enter password"></td>
    </tr>
    <tr>
        <td>CONFIRM PASSWORD:</td>
        <td></td>
        <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter password"></td>
    </tr>
    <tr>
        <td>SURVEY TYPE:</td>
        <td></td>
        <td>{{Form::select('surveytype',[null=>'select']+ array('Daily'=>'Daily', 'Weekly'=>'Weekly','Monthly'=>'Monthly','Quarterly  '=>'Quarterly','Random'=>'Random'))}}
        </td>
    </tr>
    <tr>
        <td>ADDRESS:</td>
        <td></td>
        <td><input type="text" name="address" id="address" placeholder="Enter Address of Patient"></td>
    </tr>
    <tr>
        <td>ZIPCODE:*</td>
        <td></td>
        <td><input type="text" name="zipcode" id="zipcode"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="button postfix login-btn" >Register</button></td>
        <td></td>
    </tr>
</table>
</div>
</div>
</fieldset>
</form>
</body>
</html>
