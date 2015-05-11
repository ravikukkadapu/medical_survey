<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>
		<div>

	<b>To reset your password: <br> {{ URL::to('/medical/patient/reset/'. $token)  }} <br><br>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</b></div>
	</body>
</html>
