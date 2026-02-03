<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
</head>

<body>
    <p>First Name: {{ $email['first_name'] }}</p>
    <p>Last Name: {{ $email['last_name'] }}</p>
    <p>Email: {{ $email['email'] }}</p>
    <p>Message: {{ $email['message'] }}</p>
    <p>Privacy: {{ $email['privacy'] }}</p>
    <p>IP: {{ $ip }}</p>
</body>

</html>
