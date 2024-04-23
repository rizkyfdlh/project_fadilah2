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
            <td>{{ $a }}</td>
        </tr>

        <tr>
            <td>umur</td>
            <td>:</td>
            <td>{{ $b }}</td>
        </tr>

        <tr>
            <h2>BIODATA</h2>
        </tr>
        <tr>
            <td>tanggal_lahir</td>
            <td>:</td>
            <td>{{ $c }}</td>
        </tr>
        <tr>
            <td>kesibukan</td>
            <td>:</td>
            <td>{{ $d}}</td>
        </tr>
        <tr>
            <td>cita_cita</td>
            <td>:</td>
            <td>{{ $e}}</td>
        </tr>
        <tr>
            <td>hobi</td>
            <td>:</td>
            <td>{{ $f }}</td>
        </tr>
    </table>
    </center>
</body>
</html>