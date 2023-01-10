<?php  
include ('models/conn.php');

if (isset($_POST['register'])){ //menangkap post yang berisi register
    $fullname=$_POST['fullname'];
    $nis=$_POST['nis'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    if ($fullname&&$nis&&$username&&$password&&$confirm) {
        if ($password == $confirm) { //untuk melakukan cek password
            
            $sql_get = mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE username='username'");
            $num_row = mysqli_num_rows($sql_get);

            if ($num_row > 0){
                $password = md5($password);
                $sql_insert = mysqli_query($conn, "INSERT INTO tbl_siswa VALUES ('','fullname','nis','username','password')");
                echo "<script>alert('Pendaftaran Berhasil!');</script>";

            } else {
                echo "<script>alert('Maaf, Username Sudah Terdaftar!');</script>";
            }

        } else{
            echo "<script>alert('Maaf, Password Yang Anda Masukan Tidak Sama!');</script>";
        }

    }else{
        echo "<script>alert('Maaf, Form Tidak Boleh Kosong!');</script>";
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="text" name="fullname" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="nis" class="form-control" placeholder="nis">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirm" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          <a href="login.php" class="text-center">I already have a membership</a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="=plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="=plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="=dist/js/adminlte.min.js"></script>
</body>
</html>
