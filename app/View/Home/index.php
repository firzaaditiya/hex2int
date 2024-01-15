<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $model["title"] ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="./h2i-favicon.ico">
    </head>

    <body class="d-flex flex-column">
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
            <div class="container mb-4">
                <div class="mt-5 text-center">
                    <h3>Hexadecimal to Integer32</h3>
                    <p>You can convert the hexadecimal code to integer 32, with different results converted.</p>
                </div>
                <div class="mb-3">
                    <form action="/" method="post">
                        <div class="mb-3 text-center">
                            <label for="inputHexcode" class="form-label">Hexadecimal String</label>
                            <input type="text" name="hexstring" class="form-control text-center" id="inputHexcode" aria-describedby="hexHelp">
                            <div id="hexHelp" class="form-text mb-3">
                                make sure you enter a valid hexadecimal code. Max 0x7FFFFFFF
                            </div>
                            <button type="submit" class="btn btn-secondary">analyze</button>
                        </div>
                    </form>
                </div>
                <div class="mb-3 text-center">
                    <?php if (isset($model["error"])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $model["error"] ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <caption class="text-center">List of Result</caption>
                            <thead>
                                <tr>
                                    <th class="table-secondary">Type</th>
                                    <th class="table-secondary">Big Endian</th>
                                    <th class="table-secondary">Little Endian</th>
                                    <th class="table-secondary">Mid Big Endian</th>
                                    <th class="table-secondary">Mid Little Endian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Singed</td>
                                    <td><?= $model["INT32"]["BIG_ENDIAN"] ?? "" ?></td>
                                    <td><?= $model["INT32"]["LITTLE_ENDIAN"] ?? "" ?></td>
                                    <td><?= $model["INT32"]["MID_BIG_ENDIAN"] ?? "" ?></td>
                                    <td><?= $model["INT32"]["MID_LITTLE_ENDIAN"] ?? "" ?></td>
                                </tr>
                                <tr>
                                    <td>Unsigned</td>
                                    <td><?= $model["UINT32"]["BIG_ENDIAN"] ?? "" ?></td>
                                    <td><?= $model["UINT32"]["LITTLE_ENDIAN"] ?? "" ?></td>
                                    <td><?= $model["UINT32"]["MID_BIG_ENDIAN"] ?? "" ?></td>
                                    <td><?= $model["UINT32"]["MID_LITTLE_ENDIAN"] ?? "" ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <p>this is a simple website that is useful for converting a hexadecimal code to integer32 with varying results, if you are interested in seeing the source code you can check directly on github. the github link is at the bottom</p>
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