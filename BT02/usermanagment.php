<?php
// if (isset($_GET['page'])) {
//     $page = $_GET['page'];
// }else{
//     $page = 1;
// }
// $conn = mysqli_connect(hostname:'localhost',username:'root', password:'phamquy03', database:'test_demo');
// if(!$conn) {
//     die('Error connecting ');
// }
// $n = 10 * ($page - 1);
// $sql = "SELECT * FROM users ORDER BY create_at  DESC LIMIT 10 OFFSET $n";
// $result = mysqli_query($conn,$sql);

// $user = mysqli_fetch_all($result);

// print_r($users);
// require_once'connect.php';

// $lietke = mysqli_query($conn, $lie) 
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<style>
    .logo img {
        width: 150px;
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

    i.fa-solid.fa-circle-up.text-danger {
        font-size: 25px;
        float: right;
    }

    .g-5,
    .gy-5 {
        --bs-gutter-y: 0rem;
    }

    button.btn.btn-danger.btn-md {
        width: 112px;
    }

    .btn-clear {
        background-color: #fff;

    }

    .content-filter.bg-white {
        border-radius: 5px;
        padding-bottom: 40px;
    }

    .btn-add_user {
        width: 130px !important;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "./layout/sidebar.php";
            ?>
            <div class="col-md-9 mt-1">
                <div class="header d-flex justify-content-between align-items-center">
                    <h3><i class="h1 bi bi-list"></i> User Management</h3>

                    <span class="h3" style="font-family: Poppins, sans-serif">Dashboard</span>
                    <form action="">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text"><i class="fa-solid fa-search"></i></span>
                            <input type="text" name="" id="" class="form-control" placeholder="Search here...">
                        </div>
                    </form>
                </div>
                <div class="main-content">
                    <div class="main-title text-center h3 text-primary">
                        USERMANAGEMENT
                    </div>
                    <button type="submit" class="btn btn-success btn-md"><a href="./user_add.php" target="_blank" class="text-decoration-none text-white"><i class="bi bi-person-add"></i> Add a New User</a></button>
                    <!-- <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Mã sinh viên</th>
                                    <th>Họ và tên</th>
                                    <th>Lớp</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // //ket noi
                                // require_once 'connect.php';
                                // //cau lenh
                                // $lietke_sql = "SELECT * FROM sinhvien2 order by lop, hoten";

                                // $result = mysqli_query($conn, $lietke_sql);

                                // while ($r = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td>1</td>
                                        <td><?php echo $r['masv']; ?></td>
                                        <td><?php echo $r['hoten']; ?></td>
                                        <td><?php echo $r['lop']; ?></td>
                                        <td>
                                            <a href="./user_detail.php?id=1">
                                                <i class="text-primary fa-solid fa-eye"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="./user_edit.php?id=1">
                                                <i class="text-primary fa-solid fa-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="./user_delete.php?id=1">
                                                <i class="text-primary fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                // }

                                ?>
                            </tbody>
                        </table>


                        </tbody>
                        </table>
                    </div> -->
                    <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">User</th>
                <th scope="col">Detail</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i = 0; $i < 10; $i++) {
                echo '<tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>
                    <a href="./user_detail.php?id=1">
                    <i class="text-primary fa-solid fa-eye"></i>
                    </a>
                  </td>
                  <td>
                    <a href="./user_edit.php?id=1">
                    <i class="text-primary fa-solid fa-pencil"></i>
                    </a>
                  </td>
                  <td>
                    <a href="./user_delete.php?id=1">
                    <i class="text-primary fa-solid fa-trash"></i>
                    </a>
                  </td>
                </tr>';
              }
              ?>
            </tbody>
          </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="col-md-1 bg-white mt-3 rounded-start"></div>

        </div>
    </div>
</body>

</html>