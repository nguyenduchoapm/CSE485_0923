<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title>Document</title>

</head>
<style>
    .logo img {
        width: 70%;
        height: 100%;
        object-fit: cover;
    }

    .fa-caret-right {
        float: right;
        padding-top: 7px;
        color: #ccc;
    }

    span {
        color: grey;
        padding-left: 15px;
    }

    .sidebar-list {
        padding: 10px 0 10px 0;
    }

    .main-content {
        padding-bottom: 30px;
    }
</style>

<body style="background-color:#ccc;">

    <body>
        <div class="container-fluid">
            <div class="row">
                <?php
                include "./layout/sidebar.php";
                ?>
                <div class="col-md-9 mt-1">
                    <div class="header d-flex justify-content-between align-items-center">
                        <h2 class="px-2"><i class="h1 bi bi-list"></i>Add User</h2>

                        <form action="">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text"><i class="fa-solid fa-search"></i></span>
                                <input type="text" name="" id="" class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </div>
                    <hr class="text-white">
                    <div class="main-content bg-white rounded-top m">
                        <div class="title-sub text-danger pt-3">
                            <span class="fw-semibold text-danger" style="font-family: Poppins, sans-serif">New User Form</span>
                        </div>
                        <hr>

                        <form action="add.php" method="post">
                            <div class="row px-5">
                                <div class="col-md-6 pt-5">
                                    <img src="./img/avatar-trang-y-nghia.jpeg" width="30%" class="rounded-circle mx-auto d-block" alt="...">
                                    <div class="form-check py-5">
                                        <input class="form-check-input" type="checkbox" value="" id="is_active">
                                        <label class="form-check-label" for="is_active">
                                            is active
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Fisrt Name</label>
                                                <input type="text" class="form-control fname" placeholder="Fisrt Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control lname" placeholder="Last Name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username*</label>
                                        <input type="text" class="form-control uname" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email*</label>
                                        <input type="text" class="form-control email" placeholder="Email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Phone Number* </label>
                                        <input type="text" class="form-control phone" placeholder="Phone Number">
                                    </div>
                                </div>

                            </div>
                            <div class="row px-5">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Role </label>
                                        <input type="text" class="form-control role" placeholder="Select The Role">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Gender </label>
                                        <input type="text" class="form-control gender" placeholder="Chose Gender">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Date Of Birth* </label>
                                        <input type="text" class="form-control date" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row px-5">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Facebook URL </label>
                                        <input type="text" class="form-control fbURL" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Twitter URL</label>
                                        <input type="text" class="form-control twURL" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Linkedin URl</label>
                                        <input type="text" class="form-control liURL">
                                    </div>
                                </div>
                            </div>
                            <div class="px-5">
                                <label for="" class="form-label">About</label>
                                <textarea class="form-control content" id="" rows="5" placeholder="Write About Yourseft ..."></textarea>
                            </div>
                            <div class="row px-5">
                                <div class="col-md-6 mb-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password*</label>
                                        <input type="email" class="form-control pw" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Confirm Password*</label>
                                        <input type="email" class="form-control cfpass" id="cfpass" placeholder="Confirm Password">
                                    </div>
                                </div>

                            </div>
                            <div class="btn-CRUD px-5">
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>




                    </div>

                </div>
                <div class="col-md-1 bg-white mt-3 rounded-start"></div>

            </div>
        </div>
        <!-- <div class="container-fluid">
        <div class="row">
            <?php
            // include './layout/sidebar.php';
            ?>
            <div class="col-md-9 ">
                <?php
                // include './layout/menu.php';
                ?>
                <div class="main-content">
                    <h1>Form thêm sinh viên</h1>
                    <form action="add.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="uname" class="form-label">HỌ VÀ TÊN:</label>
                            <input type="text" class="form-control" id="hoten" name="hoten">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="msv" class="form-label">MÃ SINH VIÊN:</label>
                            <input type="text" class="form-control" id="msv" name="masv">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="lop" class="form-label">LỚP:</label>
                            <input type="text" class="form-control" id="lop" name="lop">
                        </div>
                        <button type="submit" class="btn btn-primary">Them Sinh Vien</button>
                    </form>
                </div>
            </div>

        </div> -->
    </body>

</html>