<!DOCTYPE html>
<html>
<head>
    <title>DonateToMakeChanges.com</title>
</head>
<body>
    <img src="http://127.0.0.1:8000/Riders/{{ $details['image'] }}" alt="rider">
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['name'] }}</p>
    <p>{{ $details['email'] }}</p>
    <p>{{ $details['phone'] }}</p>
    <p>{{ $details['vehicle'] }}</p>
    <p>{{ $details['vehicle_no'] }}</p>
    <p>{{ $details['body'] }}</p>
    <p>Thank you</p>
</body>
</html>