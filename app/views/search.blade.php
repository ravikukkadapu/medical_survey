<html>
<head>
<title>Medical survey</title>
</head>
<body><center>
<h2>MEDICAL SURVEY</h2></center>
<form action ="{{URL::route('post_search')}}" method='post'>


<div class="row">
<div class="small-4 medium-centered columns">
    <table align='center'>

    <tr>
        <td>hb val:</td>
        <td><input type="text" name="minhb" id="minhb"></td>
        <td><input type="text" name="maxhb" id="maxhb"></td>
    </tr>

    <tr>
        <td>systolic val:</td>
        <td><input type="text" name="minsystolic" id="minsystolic"></td>
        <td><input type="text" name="maxsystolic" id="maxsystolic"></td>
    </tr>
    <tr>
        <td>diastolic val:</td>
        <td><input type="text" name="mindiastolic" id="mindiastolic"></td>
        <td><input type="text" name="maxdiastolic" id="maxdiastolic"></td>
    </tr>

    <tr>
        <td>slf val:</td>
        <td><input type="text" name="minslf" id="minslf"></td>
        <td><input type="text" name="maxslf" id="maxslf"></td>
    </tr>
        <tr>
        <td>slp val:</td>
        <td><input type="text" name="minslp" id="minslp"></td>
        <td><input type="text" name="maxslp" id="maxslp"></td>
    </tr>
    <tr>
        <td>slr val:</td>
        <td><input type="text" name="minslr" id="minslr"></td>
        <td><input type="text" name="maxslr" id="maxslr"></td>
    </tr>
    <tr>
        <td>address:</td>
        <td><input type="text" name="address" id="address"></td>
    </tr>

    <tr>
        <td>Diet:</td>
        <td>Veg : <INPUT TYPE="checkbox" name="veg" id='veg'></td>
        <td>Non-Veg :<INPUT TYPE="checkbox" name="nonveg" id='nonveg'></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="button postfix login-btn">search</button></td>
        <td></td>
    </tr>
</table>
</div>
</div>
</fieldset>
</form>
</body>
</html>
