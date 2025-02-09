<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kirish</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary d-flex align-items-center justify-content-center vh-100">
    <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Kirish</h1>
                </div>
                <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf 
                    <div class="form-group mb-3">
                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email Address..." required autocomplete="email" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror" required placeholder="Password" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 form-check small">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Eslab qolish</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Kirish</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

