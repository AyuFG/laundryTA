<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

    <!-- font awasom -->
    <script src="https://kit.fontawesome.com/2a99f4df77.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #AD48FA;">
    <section class="nav-section py-3 px-4 d-flex align-items-center gap-1" style="color: #E2DFEB; font-size: 20px;">
        <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
        <span class="font-weight-bolder px-2">Buat Akun</span>
    </section>
    <div class="d-flex justify-content-center mb-4 mt-0">
        <div class="d-flex justify-content-center align-items-center flex-column pt-5">
            <img src="../assets/img/main-logo.png" style="width: 20rem;" alt="">
    
            <form action="{{ route('register') }}" method="POST" class="d-flex flex-column gap-3 justify-content-center align-items-center w-100">
                @csrf
                <input class="border-0 rounded-3 py-2 px-3 w-75 @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required autocomplete="nama" autofocus type="text" name="nama" placeholder="Nama" required>
                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input class="border-0 rounded-3 py-2 px-3 w-75 @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <!-- Modal -->
                <div class="modal fade show" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-modal="false" role="dialog">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content" style="background-color: #AD48FA;">
                            <div class="d-flex px-3 pt-4">
                                <button type="button" class="border-0" data-bs-dismiss="modal" aria-label="Close" style="background-color: #AD48FA; color: #E2DFEB; font-size: 20px;">
                                    <i class="fa-solid fa-arrow-left font-weight-bolder"></i>
                                </button>
                                <span class="font-weight-bolder px-2" style="color: #E2DFEB; font-size: 20px;">Lengkapi Akun</span>
                            </div>
                        <div class="d-flex justify-content-center gap-3 align-items-center flex-column">
                            <img src="../assets/img/main-logo.png" style="width: 20rem;" alt="">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center w-100">
                                <input class="border-0 rounded-3 py-2 px-3 w-75  @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="border-0 rounded-3 py-2 px-3 w-75  @error('no_telepon') is-invalid @enderror" type="text" name="no_telepon" placeholder="Nomor Telepon" required>
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="border-0 rounded-3 py-2 px-3 w-75  @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat" placeholder="Alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="border-0 rounded-3 py-2 px-3 w-75" type="password" name="password_confirmation" id="password-confirm"  placeholder="Konfirmasi Password" required autocomplete="current-password">
                                
                                <button type="submit" class="btn w-25 mt-2" style="background-color: #D6C37E;">Daftar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
            <button data-bs-target="#exampleModalFullscreen" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn w-25 mt-3" style="background-color: #D6C37E;">Next</button>
            <div class="w-100  mt-4 pt-4"></div>
    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
