<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail Email</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">User Detail</h1>
            <h3 class="card-text">Nama: {{$bodyN}}</h3>
            <h3 class="card-text">Jenis Kelamin: {{$bodyF}}</h3>
            <h3 class="card-text">Pekerjaan: {{$bodyS}}</h3>
            <h3 class="card-text">Tahu Alamat Web Dari: {{$bodyC}}</h3>
            <h3 class="card-text">Email Pengunjung: {{$bodyE}}</h3>
            <h3 class="card-text">No HP: {{$bodyNo}}</h3>
            <h3 class="card-text">Tanggal Kesedian untuk dihubungi: {{$bodyD}}</h3>
            <h3 class="card-text">Maksud Dan Tujuan: {{$bodyM}}</h3>

            <h2 class="card-text">Terima Kasih</h2>
        </div>
    </div>


</body>

</html>