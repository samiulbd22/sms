<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Congratulation Mr/Mrs. {{$data['name']}},Your registration successfully completed</h1>
    <h3>You Login Credential is given Bellow:</h3>
    <p>User Id:{{$data['user_id']}}</p>
    <p>User Password:{{$data['password']}}</p>

    <p>Thank you.</p>
</body>
</html>
