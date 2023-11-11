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
<?php
include("component/header.php");
?>

<section class="vh-100" style="background-color: #fff;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">

                <h1 class=" mb-4">Apply for a job</h1>

                <form action="..\backend\api\process_form.php" method="post" enctype="multipart/form-data">

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">

                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Full name</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="text" class="form-control form-control-lg" name="full_name" />

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Email address</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="email" class="form-control form-control-lg" name="email"
                                        placeholder="example@example.com" />

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Linkedin Account</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="text" class="form-control form-control-lg" name="linkedin"
                                        placeholder="www.linkedin.com/in/username" />

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Upload CV</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input class="form-control form-control-lg" id="cv_file" type="file"
                                        name="cv_file" />
                                    <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file.
                                        Max
                                        file
                                        size 2 MB</div>

                                </div>
                            </div>

                            <hr class="mx-n3">


                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Upload Foto</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input class="form-control form-control-lg" id="photo_file" type="file"
                                        name="photo_file" />
                                    <div class="small text-muted mt-2">Upload your photo. Max
                                        file
                                        size 2 MB</div>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Upload surat referensi</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input class="form-control form-control-lg" id="reference_file" type="file"
                                        name="reference_file" />
                                    <div class="small text-muted mt-2">Upload your surat referensi. Max
                                        file
                                        size 2 MB</div>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Upload ktp</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input class="form-control form-control-lg" id="ktp_file" type="file"
                                        name="ktp_file" />
                                    <div class="small text-muted mt-2">Upload your ktp. Max
                                        file
                                        size 2 MB</div>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="px-5 py-4">
                                <button type="submit" class="btn btn-primary btn-lg">Send application</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>