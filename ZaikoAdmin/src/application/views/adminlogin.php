<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Control</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
          <img src="../img/giaicon.png" alt="ログインロゴ" style="width: 250px; height: 110px;">
      </div>
      <!-- /.login-logo -->
      <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">管理者サインイン</p>
            <p><a href="/form">戻る</a></p>
            <form action="admin_check" method="post">
                <!-- 管理者かの確認 -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="master id" name="user" required="required">
                  <div class="input-group-append">
                      <div class="input-group-text">
                          <i class="fas fa-user-cog"></i>
                      </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="pass" required="required">
                  <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                  </div>
                </div>
                <div class="row">
                <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block" name=btn_submit>Sign In</button>
                  </div>
                <!-- /.col -->
                </div>
            </form>
          </div>
          <!-- /.login-card-body -->
      </div>
    </div>
  <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
  </body>
</html>
