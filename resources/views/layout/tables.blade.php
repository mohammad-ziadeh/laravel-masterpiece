@extends('dashboard')

@section('content')
    <div class="main-panel" style="overflow: scroll; height: 100vh;">
        <div class="content-wrapper">
            <div class="row">
                <div class="col grid-margin stretch-card">
                    <div class="card" style="background-color: #ffffff">
                        <div class="card-body">
                            <h4 class="card-title">User Table</h4>
                            <p class="card-description">Add class <code>.table</code></p>

                            <div class="table-responsive">
                                <table class="table table-bordered border-primary">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Email Verification Date</th>
                                            <th>Creation Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->email_verified_at }}</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center align-items-center">
                                {{ $users->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
