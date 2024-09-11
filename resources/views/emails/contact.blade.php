<!DOCTYPE html>
<html>
<head>
    <title>Pesan dari Kontak</title>
</head>
<body>
    <h1>Pesan dari {{ $data['name'] }}</h1>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
