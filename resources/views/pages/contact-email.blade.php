<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hello Admin,</h2>
    You received an email from : {{ $data['name'] }}
    Here are the details:
    <b>Name:</b> {{ $data['name'] }}
    <b>Email:</b> {{ $data['email'] }}
    <b>Phone Number:</b> {{ $data['phone'] }}
    <b>Subject:</b> {{ $data['subject'] }}
    <b>Message:</b> {{ $data['message'] }}
    Thank You
</body>
</html>