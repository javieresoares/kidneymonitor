<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.png') }}" />
    <style>
        .form-group .input-group {
            position: relative;
        }

        .form-group .input-group .form-control {
            padding-right: 40px;
            /* Ruang untuk ikon */
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
            font-size: 18px;
        }

        .eye-icon:hover {
            color: #495057;
            /* Warna lebih gelap saat dihover */
        }

        .form-control::placeholder {
            color: #ccc;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Sign Up</h3>

                            <!-- Menampilkan pesan kesalahan jika ada -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ url('/register') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label>Username *</label>
                                    <input type="text" name="username" class="form-control p_input"
                                        value="{{ old('username') }}" placeholder="Enter your username" required>
                                </div>

                                <div class="form-group">
                                    <label>Nama Lengkap *</label>
                                    <input type="text" name="nama_lengkap" class="form-control p_input"
                                        value="{{ old('nama_lengkap') }}" placeholder="Enter your full name" required>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir *</label>
                                    <input type="date" name="tanggal_lahir" class="form-control p_input"
                                        value="{{ old('tanggal_lahir') }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" name="email" class="form-control p_input"
                                        value="{{ old('email') }}" placeholder="Enter your email" required>
                                </div>

                                <div class="form-group position-relative">
                                    <label>Password *</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password"
                                            class="form-control p_input" placeholder="Enter your password" required>
                                        <span class="eye-icon mdi mdi-eye" id="togglePassword"></span>
                                    </div>
                                </div>

                                <div class="form-group position-relative">
                                    <label>Confirm Password *</label>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" id="confirmPassword"
                                            class="form-control p_input" placeholder="Confirm your password" required>
                                        <span class="eye-icon mdi mdi-eye" id="toggleConfirmPassword"></span>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                                </div>

                                <p class="sign-up">Already have an Account? <a href="{{ route('login') }}">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('template/assets/js/misc.js') }}"></script>
    <script src="{{ asset('template/assets/js/settings.js') }}"></script>
    <script src="{{ asset('template/assets/js/todolist.js') }}"></script>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.classList.toggle('mdi-eye-off');
        });

        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            const confirmPasswordField = document.getElementById('confirmPassword');
            const type = confirmPasswordField.type === 'password' ? 'text' : 'password';
            confirmPasswordField.type = type;
            this.classList.toggle('mdi-eye-off');
        });
    </script>
</body>

</html>
