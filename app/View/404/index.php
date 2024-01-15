<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $model["title"] ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="./h2i-favicon.ico">
    </head>

    <body class="d-flex flex-column h-100">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0a2647;">
                <div class="container-fluid">
                    <a href="/" class="navbar-brand fw-bold link-light p-2">Hex2Int</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <div class="navbar-nav">
                            <a class="nav-link link-light p-3" href="https://github.com/firzaaditiya" target="_blank">github</a>
                            <a class="nav-link link-light p-3" href="https://t.me/firzaaditiya" target="_blank">contact</a>
                            <a class="nav-link link-light p-3" href="https://github.com/firzaaditiya/hex2int" target="_blank">source</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="flex-grow-1">
            <div class="container d-flex justify-content-center mt-5">
                <div class="text-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>
                                    <h1 class="fw-bold">OOPS!</h1>
                                    <h2 class="fw-bold">Error : 404 Not Found</h2>
                                    <p>Sorry, an error has occured, Requested page not found!</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="btn btn-secondary" href="/" role="button">Back to Home</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <footer class="flex-shrink-0">
            <div class="container-fluid p-3" style="background-color: #0a2647;">
                <div class="row d-flex justify-content-around">
                    <div class="col-md-4 col-xl-6 mb-3">
                        <div class="card" style="background-color: #0a2647;">
                            <div class="card-body">
                                <h5 class="card-title text-white">Social Links</h5>
                                <p class="card-text text-white">You can follow my social media or others below. Lets be Friends !</p>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="https://www.facebook.com/yuzaonlyone" class="nav-link link-light" target="_blank">
                                            <i class="bi bi-facebook"></i>
                                            &nbsp;Facebook
                                        </a>
                                        <a href="https://github.com/firzaaditiya" class="nav-link link-light" target="_blank">
                                            <i class="bi bi-github"></i>
                                            &nbsp;Github
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-6">
                        <div class="card" style="background-color: #0a2647;">
                            <div class="card-body">
                                <h5 class="card-title text-white">Other Links</h5>
                                <p class="card-text text-white">Some links that I want to include, maybe you want to visit them.</p>

                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="https://github.com/firzaaditiya/hex2int" class="nav-link link-light" target="_blank">
                                            <i class="bi bi-folder-fill"></i>
                                            &nbsp;Source Code
                                        </a>
                                    </li>
                                    <li class="navbar-item">
                                        <a href="https://tujuanpelajar.blogspot.com/" class="nav-link link-light" target="_blank">
                                            <i class="bi bi-person-circle"></i>
                                            &nbsp;Blogspot
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
</html>