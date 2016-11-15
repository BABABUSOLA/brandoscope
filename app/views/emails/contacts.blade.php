<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	 <?php
	$name = Input::get('name');
	$email=Input::get('email');
	$mobile_phone = Input::get('mobile_phone');
	$message = Input::get('message');
	// $date_time = date("F j, Y, g:i a");
	// $userIpAddress = Request::getClientIp()	;

	?>

	<h1> We have been contacted by ....</h1>
	<p>
		
	First name:{{$name}};
	Email:{{$email}};
	Phone Number:{{$mobile_phone}};
	Message:{{$message}};
	{{-- Date:{{$date}};
	User IP Address:{{$userIpAddress}}; --}}

	</p>
	
</body>
</html>