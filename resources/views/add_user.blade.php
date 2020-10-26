<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ trans('user.add') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ trans('user.add') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div>
                                <label>{{ trans('user.email') }}</label>
                                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                    <div class="alert-validation">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label>{{ trans('user.password') }}</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                @error('password')
                                    <div class="alert-validation">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label>{{ trans('user.confirm_password') }}</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>

                            <div class="mt-3">
                                <label>{{ trans('user.name') }}</label>
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                    <div class="alert-validation">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label>{{ trans('user.address') }}</label>
                                <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address">
                                @error('address')
                                    <div class="alert-validation">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <label>{{ trans('user.phone') }}</label>
                                <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                @error('phone')
                                    <div class="alert-validation">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mt-3">{{ trans('user.add') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>