@extends('tampilan.kerangka')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users List to Approve</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <table class="table">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Registered at</th>
                            <th></th>
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
</div>

@endsection