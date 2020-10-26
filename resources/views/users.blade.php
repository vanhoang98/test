<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ trans('user.list') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        @include('flash::message')
        <div class="card">
            <div class="card-header">
                {{ trans('user.list') }}
                <a href="{{ route('users.create') }}">
                    <button class="btn btn-success float-right">{{ trans('user.add') }}</button>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">{{ trans('user.id') }}</th>
                        <th scope="col">{{ trans('user.email') }}</th>
                        <th scope="col">{{ trans('user.name') }}</th>
                        <th scope="col">{{ trans('user.address') }}</th>
                        <th scope="col">{{ trans('user.phone') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</body>
</html>