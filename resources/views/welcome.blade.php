<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UcokzJaya</title>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">


     {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    {{-- Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-md">
        <div class="container">
          <a class="navbar-brand" href="{{ route('welcome') }}">UcokzJaya</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link btn btn-warning px-4"  href="{{ route('login') }}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="banner  py-5" style="background: url(img/bg-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <h1>UcokzJaya</h1>
                   <p>Tempat jual beli bahan bangunan terpercaya</p>
                </div>
            </div>
        </div>
      </section>
      <section class="about py-5 text-center" style="background: #ffb200;">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h1>About</h1>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita assumenda, perspiciatis ipsum voluptatum neque ut ipsa quo exercitationem illo, molestias, mollitia inventore quos libero voluptates dolores tempora necessitatibus aliquid excepturi.</p>
                </div>
            </div>
        </div>
      </section>
      <section class="review border py-5 ">
        <div class="container">
            <h1 class="text-center pb-5">Review</h1>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body  text-center">
                            <h2>User 1</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, voluptate iste, aut nihil quibusdam enim alias nobis, pariatur commodi soluta non quam quo sequi ipsum earum magnam? Consequatur, magni iure?</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body  text-center">
                            <h2>User 2</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, asperiores corrupti sint rem quisquam beatae soluta dolores itaque eum laudantium cupiditate adipisci iure nihil quidem magni omnis illo recusandae error?</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card   -body text-center">
                            <h2>User 3</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et ad aut, blanditiis, magni officiis, impedit molestiae laboriosam vitae deleniti consequatur rerum ipsa. Odit harum sit incidunt facere, necessitatibus rerum quibusdam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <footer class="footer mt-auto py-3">
        <div class="container text-center">
          <span class="text-muted">UcokzJaya v.1</span>
        </div>
      </footer>
</body>
</html>
