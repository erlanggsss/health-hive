<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-color shadow">
        <div class="container">
            <a class="navbar-brand text-heading fs-2" href="#">HealthHive.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="center">
        <div class="mt-4 daftar">
            <h3 class="text-heading p-4">Daftar Akun</h3>
            <div class="container">
                <form action="" class="p-3">
                    <div class="row">
                        <div class="col d-flex ">
                            <div class="mb-4 me-3">
                                <label for="exampleInputCaptha1" class="form-label text-heading">Nama Depan</label>
                                <input type="text" class="form-control nama" id="exampleInputcaptha">
                            </div>
                            <div class="ms-3">
                                <label for="exampleInputCaptha" class="form-label text-heading">Nama Belakang</label>
                                <input type="text" class="form-control input-nama" id="exampleInputcaptha">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-heading">Username / Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-heading">Password</label>
                                <input type="password" class="form-control pass" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
                        <button type="submit" class="btn btn-success px-4 mb-3">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="divider">
            <hr>
        </div>
        <div class="login-google text-center mt-3">
            <p class="sec-text">Atau login Menggunakan</p>
            <div class="form-group d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-primary"><i class='bx bxl-google me-2'></i>Google</a>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>