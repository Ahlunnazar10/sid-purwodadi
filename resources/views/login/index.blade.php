@extends('tampilan.kerangka')

@section('container')
    <div class="container" id="text">
        <button type="button" class="btn" id="info"><i class="bi bi-megaphone-fill"></i> Info</button><marquee direction=”left” class="pt-1">Selamat datang di sistem informasi desa & e-aspirasi desa purwodadi</marquee>
    </div>

    <div class="container">
        <section class="jumbotron text-center mb-5" id="jumbotron">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5">

                    @if (session()->has('berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('berhasil') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>     
                    @endif

                    @if (session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show text-start" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>     
                    @endif

                    <main class="form-signin">
                        <form action="/login" method="post">
                            @csrf
                            <img class="mt-3" src="img/Malang.png" alt="Logo" width="180" height="130">
                            <h1 class="h3 mb-3 fw-normal">Login Disini</h1>
                        
                            <div class="form-floating">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="contoh@username" autofocus required value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback text-start">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                        
                            <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
                        </form>
                        <small class="d-block text-center mt-1 mb-5">Belum daftar? <a href="/register">Daftar disini!</a></small>
                    </main>
                </div>
            </div>
            
        </section>
    </div>    

@endsection