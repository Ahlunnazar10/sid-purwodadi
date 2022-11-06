@extends('dashboard.tampilan.kerangka')

@section('container')

<style>
    #konten {
        color: #055160;
    }
</style>

<main id="konten">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Verifikasi User</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Berikut merupakan data user yang membutuhkan verifikasi dari Administrator Sistem :</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>Username :</th>
                            <th>Email :</th>
                            <th>Terdaftar Pada :</th>
                            <th>Action :</th>
                        </tr>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="/dashboard-manajemen-user/{{ $user->id }}/verify" class="btn btn-primary btn-sm">Verify</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No users found.</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection