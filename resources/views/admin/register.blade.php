<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tropisianimal | Registrasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">
        <form action="{{ url('login') }}" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                    id="name" placeholder="name">
                <label for="name">Name</label>

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"
                    id="username" placeholder="Username">
                <label for="username">username</label>

                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com">
                <label for="email">email</label>

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" name="pass"
                    class="form-control @error('pass') is-invalid @enderror rounded-bottom" id="pass"
                    placeholder="Password">
                <label for="Password">Password</label>

                @error('pass')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-success" type="submit">
                Register
                <span data-feather="log-in"></span>
            </button>
        </form>

        <small class="d-block mt-3">Sudah punya akun? <a href="/admin" style="text-decoration: none">Masuk</a></small>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
