<html>
<head>
<title>Medical survey</title>
</head>
<body><center>
<h2>MEDICAL SURVEY</h2></center>

<form>
    <table align='center' border=1>
    <tr>
        <td align='center'>Patient-Code</td>
        <td align='center'>image</td>
    </tr>
@foreach($data as $dat)
    <tr>
        <td align='center'>{{$dat->code}}</td>
    </tr>
        <a href="{{$dat->image}}">
            <img src="{{$dat->image}}" >
        </a>
@endforeach
</table>

</form>
</body>
</html>
