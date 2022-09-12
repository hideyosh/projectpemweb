<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

      <!-- Scripts -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">Login</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                  @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @csrf
                                <div class="mb-3">
                                  <input type="email" class="form-control" id="pmail" aria-describedby="emailHelp" name="email" placeholder="Email">
                                </div>
                                  <div class="mb-4">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                  </div>
                                <button type="submit" class="btn btn-warning w-100 mt-2">Sign In</button>
                                <div class="mt-2 text-center">
                                    <a class="btn btn-link"  style="color: #FFB200;" href="{{ route('register') }}">Doesn't have an account?</a>
                                </div><div class=" text-center">
                                    <a class="link-home" href="{{ route('welcome') }}">Back to home</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
