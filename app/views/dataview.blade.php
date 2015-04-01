<html>
<head>
<title>DATA VIEW</title>
</head>
<body>
<form>
<table border =1 align ='center'>
<tr>
<td align = 'center'>Patient-code</td>
<td align = 'center'>Address</td>
<td align = 'center'>Hearbeat value</td>
<td align = 'center'>Bp-Systolic value</td>
<td align = 'center'>Bp-Diastolic value</td>
<td align = 'center'>Sugar-level (Fasting)</td>
<td align = 'center'>Sugar-level (Random)</td>
<td align = 'center'>Sugar-level (Postlunch)</td>
<td align = 'center'>Timestamp</td>
</tr>
@foreach($data as $id)
<tr>
<td align = 'center'>{{$id->patient_code}}</td>
<td align = 'center'>{{$id->address}}</td>
<td align = 'center'>{{$id->heartbeat_value}}</td>
<td align = 'center'>{{$id->bpsystolic_value}}</td>
<td align = 'center'>{{$id->bpdiastolic_value}}</td>
<td align = 'center'>{{$id->bloodsugar_fasting}}</td>
<td align = 'center'>{{$id->bloodsugar_random}}</td>
<td align = 'center'>{{$id->bloodsugar_postlunch}}</td>
<td align = 'center'>{{$id->created_at}}</td>

</tr>
@endforeach

</table>
</form>
</body>
</html>
