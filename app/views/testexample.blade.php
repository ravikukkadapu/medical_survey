<html>
<head>
<title>medical survey</title>
</head>
<body>
{{-- <form> --}}
<form  action ="{{URL::route('sam')}}" method=post>

Veg: <INPUT TYPE="checkbox" name="veg1" id='veg1'>
<br>
Non-Veg:<INPUT TYPE="checkbox" name="nonveg1" id='nonveg1'>
<br>
<button  class="button postfix login-btn" id = "set">Set</button>

</form>
</body>
</html>
