<html>
<head>
<title>Medical survey</title>
</head>
<body><center>
<h2>MEDICAL SURVEY</h2></center>
<form action ="{{URL::route('doc_register')}}" method='post'>
{{-- <form> --}}
<fieldset>
<legend> Doctor Registration</legend>
    <table align='center'>
    <tr>
        <td>DOCTOR NAME:</td>
        <td></td>
        <td><input type="text" name="doctor_name" id="doctor_name" placeholder="Enter Doctor Name"></td>
    </tr>
    <tr>
        <td>MAIL:</td>
        <td></td>
        <td><input type="text" name="mail" id="mail" placeholder="Enter Mail"></td>
    </tr>
    <tr>
        <td>PASSWORD:</td>
        <td></td>
        <td><input type="password" name="password" id="password" placeholder="Enter password"></td>
    </tr>
    <tr>
        <td>CONFIRM PASSWORD:</td>
        <td></td>
        <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter password"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="button postfix login-btn">Register</button></td>
        <td></td>
    </tr>
</table>
</fieldset>
</form>
</body>
</html>
