<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Sign Up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-12">
                    <div class="text-center my-5">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4" style="text-align: center;">Sign Up</h1>
                            <form method="POST" action="input_signUp.php" novalidate="" autocomplete="off">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="text-muted">Nama</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukkan nama anda" name="nama">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="text-muted">Alamat</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukkan alamat anda"
                                            name="address">
                                        <br>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="email">E-Mail</label>
                                        <input placeholder="Masukan email anda" id="email" type="email"
                                            class="form-control" name="email" value="" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="text-muted">Homepage</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukkan homepage anda"
                                            name="homepage">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="text-muted">Username</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukkan username anda"
                                            name="username">
                                        <br>
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-2 w-100">
                                            <label class="text-muted" for="password">Password</label>
                                        </div>
                                        <input id="password" placeholder="Password..." type="password"
                                            class="form-control" name="password" required>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 350px;">
                                        Sign Up
                                    </button>
                                </form>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2022 &mdash; Haleluyah
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>