<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <?php include("component/header.php"); ?>

    <section class="vh-100" style="background-color: #fff;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class=" mb-4">Register</h1>

                    <form action="..\backend\api\process_form.php" method="post" enctype="multipart/form-data">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" name="Full_name" 
                                        placeholder="Masukan Full Name" />
                                    </div>
                                </div>

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="text" class="form-control form-control-lg" name="Username" 
                                        placeholder="Masukan Username" />
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input type="email" class="form-control form-control-lg" name="Password"
                                            placeholder="Masukan Password" />
                                    </div>
                                </div>
                                <div class="px-5 py-4">
                                <button type="submit" class="btn btn-primary btn-lg">Regist</button>
                            </div>

                            </div>
                        </div>
                        <!-- Pastikan tag form ditutup dengan benar -->
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
