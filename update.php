<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Bootstrap 5 Login Page</title>
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- datetimepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- font awensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquey -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <style>
    h1 {
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname = "myweb";
        $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");
    ?>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Edit GuestBook</h1>
                            <?php 
                            $id = $_GET['id'];
                            $data = mysqli_query($conn,"select * from guestbook where id ='$id'");
                            while($tampil = mysqli_fetch_array($data)){
                        ?>
                            <form method="POST" action="proses_update.php">
                                <div class="mb-3">
                                    <label for="posted" class="form-label">Posted</label>
                                    <input type="hidden" name="id" value="<?php echo $tampil['id'] ?>">
                                    <input type="date" class="form-control" name="posted"
                                        value="<?php echo $tampil['posted'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Nama</label>
                                    <input id="email" type="text" class="form-control"
                                        value="<?php echo $tampil['name'] ?>" required autofocus name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Email</label>
                                    <input id="email" type="text" class="form-control"
                                        value="<?php echo $tampil['email'] ?>" required autofocus name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Address</label>
                                    <input id="email" type="text" class="form-control"
                                        value="<?php echo $tampil['address'] ?>" required autofocus name="address">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">City</label>
                                    <input id="email" type="text" class="form-control"
                                        value="<?php echo $tampil['city'] ?>" required autofocus name="city">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">Message</label>
                                    <textarea type="text" class="form-control"
                                        name="message"><?php echo $tampil['message']; ?> </textarea>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2022 &mdash; Haleluyah
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
    $(function() {
        $('#datepicker1').datepicker();
    });
    </script>
</body>

</html>