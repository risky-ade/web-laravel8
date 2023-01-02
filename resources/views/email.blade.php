<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hallo Admin</title>
</head>
<body>
    <h3>Email received from: {{ $name }}</h3>
    <h2>Hello Admin,</h2>
    <p>User information:</p>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Phone: {{ $phone }}</p>
    <h3>Message: {{ $form_message }}</h3>

    Terima kasih
    
</body>
</html>
