<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi</title>

    <!-- bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/ikon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/ikon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/ikon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/ikon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/ikon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/ikon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/ikon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/ikon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/ikon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/ikon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/ikon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/ikon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/ikon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/ikon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2a99f4df77.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #24A384;">
    <div class="vh-100 d-flex justify-content-center">
        <div class="d-flex justify-content-center align-items-center flex-column w-100">
            <img src="{{asset('assets/img/main-logo.png')}}" style="width: 20rem;" alt="">
            <span class="text-white text-lg fw-medium text-center px-2">Akun anda berhasil dibuat, hubungi admin SOC Lampung untuk verifikasi</span>
            <div class="d-flex flex-row gap-3 pt-4">
                <a href="https://wa.me/+6281397575460?text=Verifikasi akun dengan email {{auth()->user()->email}}, nama {{auth()->user()->nama}}" class="d-flex text-decoration-none btn align-items-center" style="background-color: #D6C37E;">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span class="mx-2">Minta verifikasi admin</span>
                </a>
                <a href="/login" class="d-flex text-decoration-none">
                    <button class="btn" style="background-color: #D6C37E;">Login</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
