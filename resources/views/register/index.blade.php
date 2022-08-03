@extends('tampilan.kerangka')

@section('container')
    <div class="container">
        <section class="jumbotron text-center mb-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5">
                    @if (session()->has('berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('berhasil') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>     
                    @endif
                    <main class="form-registration" id="form-login">
                        <form action="/register" method="post">
                        @csrf
                            <img class="mt-3" src="img/Malang.png" alt="Logo" width="180" height="130">
                            <h1 class="h3 mb-3 fw-normal">Pendaftaran akun :</h1>
                        
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                                <label for="name">Nama</label>
                                @error('name')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="contoh@email.com" required value="{{ old('email') }}">
                                <label for="email">Email</label>
                                @error('email')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                <div class="invalid-feedback text-start">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        
                            <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Daftar</button>
                        </form>
                        <small class="d-block text-center mt-1 mb-5">Sudah daftar? <a href="/login">Login disini!</a></small>
                    </main>
                </div>
            </div>
            
        </section>
    </div>    

@endsection