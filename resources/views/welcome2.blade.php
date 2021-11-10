<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Welcome</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>

<h1>Halo Selamat Datang <i> {{ $request->nama_depan }} {{ $request->nama_belakang }}</i></h1>
<h3>Klik Disini Untuk <a href="/"> Kembali </a> </h3>


</body>
</html>
