<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>新規追加</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition management_page">
<div class="wrapper">
<div class="card-body">
<!--戻る-->
  <div class="row">
  <a href="/Management/index?category_id=<?= $_POST['category_id']; ?>">戻る</a>
  </div>
<!--追加-->  
　<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">新規登録</h3>
    </div>
    
    <form action="/Management/db_add" method="post">
      <div class="card-body">
      <input type="hidden" name="category_id" value="<?= $_POST['category_id']; ?>">
        <div class="form-group">
          <label for="">名前</label>
          <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
          <label for="">数量</label>
          <input type="number" class="form-control" name="num" required>
        </div>
        <div class="form-group">
          <label for="">保存場所</label>
          <input type="text" class="form-control" name="place">
        </div>
        <div class="form-group">
          <label for="">購入日</label>
          <input type="date" class="form-control" name="pc">
        </div>
        <div class="form-group pb-3">
          <label for="Textarea">備考</label>
          <textarea class="form-control" id="Textarea" rows="5" name="etc"></textarea>
          <div class="invalid-feedback"></div>
        </div> 
      <div class="text-center">
      <div class="index">
        <button type="submit" class="btn btn-primary" name="btn_submit">新規登録</button>
      </div>
    </form>
  </div>
</div>
</div>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
