<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Login Page" />
    <meta name="author" content="Hayyu Pratama Dealer" />
    <title>Login - Hayyu Pratama Dealer</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <h3 class="font-weight-light my-4">Login</h3>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf

                                        <!-- Email -->
                                        <div class="form-floating mb-3">
                                            <input 
                                                class="form-control" 
                                                id="inputEmail" 
                                                type="email" 
                                                name="email" 
                                                placeholder="name@example.com" 
                                                value="{{ old('email') }}" 
                                                required 
                                                autofocus
                                            />
                                            <label for="inputEmail">Email address</label>
                                        </div>

                                        <!-- Password -->
                                        <div class="form-floating mb-3">
                                            <input 
                                                class="form-control" 
                                                id="inputPassword" 
                                                type="password" 
                                                name="password" 
                                                placeholder="Password" 
                                                required
                                            />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <!-- Remember -->
                                        <div class="form-check mb-3">
                                            <input 
                                                class="form-check-input" 
                                                id="inputRememberPassword" 
                                                type="checkbox" 
                                                name="remember"
                                            />
                                            <label class="form-check-label" for="inputRememberPassword">
                                                Remember Me
                                            </label>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary w-100">
                                                Login
                                            </button>
                                        </div>

                                        <!-- Error Messages -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-3">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Footer -->
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            &copy; Hayyu Pratama Dealer {{ date('Y') }}
                        </div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JS Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
