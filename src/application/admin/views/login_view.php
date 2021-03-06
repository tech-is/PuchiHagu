<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ぷちはぐ　管理画面ログイン</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/admin.css">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2>Puchihagu</h2><h5>管理者ログイン</h5>
        </div>

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">ログイン情報を入力してください。</p>
                <?php if (!empty($login_error_message)): ?>
                                <small class="login-error"><?= $login_error_message; ?></small>
                <?php endif; ?>
            
                <?php if (!empty($error_message['email'])): ?>
                                <small class="login-error"><?= $error_message['email']; ?></small>
                <?php endif; ?>

                <?= form_open('login/index'); ?>
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" value="<?php if(!empty($post_data["email"])){echo $post_data["email"];} ?><?php if(!empty($_COOKIE["sessionid2"])){echo $_COOKIE["sessionid2"];}?>" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($error_message['password'])): ?>
                                <small class="login-error"><?= $error_message['password']; ?></small>
                　　<?php endif; ?>

                    <div class="input-group mb-3">
                        <input type="password"id="password"name="password" value="<?php if(!empty($_COOKIE["sessionid1"])){echo $_COOKIE["sessionid1"];}?>" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">ログイン情報を保存する
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login_submit"  value="login" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>

                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> (未実装)Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">(未実装)パスワードを忘れた場合</a>
                </p>
                <p class="mb-0">
                    <a href="../register/index" class="text-center">新規ユーザー登録</a>
                </p>
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
    <script>
        var elem = document.getElementById('remember'); 
        var email = document.getElementById('email'); 
        var passwd = document.getElementById('password');
        elem.addEventListener('change',function(){ 
        if(!email.getAttribute("autocomplete")){
        email.setAttribute("autocomplete","on");
        passwd.setAttribute("autocomplete","on");
        }else{
        email.removeAttribute("autocomplete");
        passwd.removeAttribute("autocomplete");
        }
    });
    </script>
</body>

</html>