<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>プリント追加</title>

    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- adminLTE style -->
    <link href="../../dist/css/adminlte.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../css/admin.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        .custom-file {
            max-width: 20rem;
            overflow: hidden;
        }

        .custom-file-label {
            white-space: nowrap;
        }

        .form-group {
            margin-bottom: 2px;
            margin-top: 10px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- 上部ナビゲーション -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <div class="dropdown-menu-right">
                        <!-- <?php
                                print_r($this->session->all_userdata());
                                ?> -->
                        <a class="btn btn-primary btn-sm" href="<?= base_url('admin.php/Administrator/logout'); ?>" role="button">ログアウト</a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- トップメニュー -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- ロゴ -->
            <a href="admin_starter.html" class="brand-link">
                <img src="../../dist\img\logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">管理画面</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    機能一覧
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="admin_contents.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>コンテンツ管理</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin_user.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>利用者管理</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DM管理</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    管理者設定
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('admin.php/register/index'); ?>" class="nav-link">
                                        <i class="nav-icon far far fa-check-square"></i>
                                        <p>新規登録</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('admin.php/caretaker/index'); ?>" class="nav-link">
                                        <i class="nav-icon far far fa-check-square"></i>
                                        <p>登録情報一覧</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>プリント登録</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">ホーム</a></li>
                                <li class="breadcrumb-item active">プリント登録</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <?= form_open_multipart('contentslist/add'); ?>
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">新規登録内容</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>分類</label><span class=" badge badge-danger ">必須</span>
                                    <select name="category" class="form-control select2bs4" style="width: 100%;">
                                        <option disabled selected value="">選択してください</option>
                                        <?php foreach ($categoryidname as $value) : ?>
                                            <option value="<?= $value["categories_id"]; ?>"><?= $value["categories_category"]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <?php if (!empty($error_message["category"])) : ?>
                                    <small class="add-error"><?= $error_message["category"]; ?></small>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>タイトル</label><span class=" badge badge-danger ">必須</span>
                                    <div class="col-xs-2">
                                        <input type="text" id="contentstitle" name="contentstitle" class="form-control " placeholder="タイトルを入力してください " value="<?php if (!empty($post_data["contentstitle"])) {
                                                                                                                                                                    echo $post_data["contentstitle"];
                                                                                                                                                                } ?>">
                                    </div>
                                </div>
                                <?php if (!empty($error_message["contentstitle"])) : ?>
                                    <small class="add-error"><?= $error_message["contentstitle"]; ?></small>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>説明文</label>
                                    <div class="col-xs-2">
                                        <input type="text" id="contentsmemo" name="contentsmemo" class="form-control " placeholder="説明文を入力してください" value="<?php if (!empty($post_data["contentsmemo"])) {
                                                                                                                                                                echo $post_data["contentsmemo"];
                                                                                                                                                            } ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">ファイル※選択されたファイル名が登録されます</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputfile" name="inputfile">
                                            <label class="custom-file-label" for="exampleInputFile">ファイルを選択してください</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button type="button" name="inputreset" class="btn btn-outline-secondary reset">取消</button>
                                        </div>
                                    </div>
                                    <?php if (!empty($error_message["inputfile"])) : ?>
                                        <small class="add-error"><?= $error_message["inputfile"]; ?></small>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
                <div class="card-footer">
                    <div class="mt-3 text-left">
                        <button type="submit" name="confirmation_submit" value='add' class="btn btn-primary">入力内容を確認</button>
                        <a class="btn btn-secondary" href="<?= base_url('admin.php/contentslist/index'); ?>" role="button">キャンセル</a>
                    </div>
                </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 幼児向け学習サイト　ぷちはぐ</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $('.custom-file-input').on('change', handleFileSelect);

        function handleFileSelect(evt) {
            $('#preview').remove(); // 繰り返し実行時の処理
            $(this).parents('.input-group').after('<div id="preview"></div>');

            var files = evt.target.files;

            for (var i = 0, f; f = files[i]; i++) {

                var reader = new FileReader();

                reader.onload = (function(theFile) {
                    return function(e) {
                        if (theFile.type.match('image.*')) {
                            var $html = ['<div class="d-inline-block mr-1 mt-1"><img class="img-thumbnail" src="', e.target.result, '" title="', escape(theFile.name), '" style="height:100px;" /><div class="small text-muted text-center">', escape(theFile.name), '</div></div>'].join(''); // 画像では画像のプレビューとファイル名の表示
                        } else {
                            var $html = ['<div class="d-inline-block mr-1"><span class="small">', theFile.name, '</span></div>'].join(''); //画像以外はファイル名のみの表示
                        }
                        $('#preview').append($html);
                    };
                })(f);

                reader.readAsDataURL(f);
            }
            $(this).next('.custom-file-label').html(+files.length + '個のファイルを選択しました');
        }

        //ファイルの取消
        $('.reset').click(function() {
            $(this).parent().prev().children('.custom-file-label').html('ファイル選択...');
            $('#preview').remove();
            $('.custom-file-input').val('');
        })
    </script>

</body>

</html>