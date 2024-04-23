<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>SELAMAT DATANG DI HALAMAN DATA DIRI</h1>
    
    <table>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <h2>biodata</h2>
        </tr>
        <tr>
            <td>jenis_kelamin</td>
            <td>:</td>
            <td>{{ $jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>pendidikan terakhir</td>
            <td>:</td>
            <td>{{ $}}</td>
        </tr>
        <tr>
            <td>pekerjaan</td>
            <td>:</td>
            <td>{{ $pekerjaan }}</td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
    </table>
</center>
</body>
</html>