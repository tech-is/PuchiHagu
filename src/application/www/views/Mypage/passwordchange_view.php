<!-- ********************************** -->
<!-- *******  パスワードの変更  ******* -->
<!-- ********************************** -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>パスワードの変更｜幼児無料プリントサイト ぷちはぐ</title>
    <!-- head共通 -->
    <?php $this->load->view('Layout/header_view'); ?>
</head>

<body>

    <div id="container">

        <!-- ロゴ -->
        <!-- メインメニュー -->
        <?php $this->load->view('Layout/menu_view.php'); ?>

        <div id="contents">

            <section class="box1">

                <h1 class="contCaption">PASSWORD</h1>
                <h2 class="contSubCaption">パスワードの変更</h2>
                <div class="message-user-kaiin">
                    <p>パスワードの変更を行います。<br>各項目の入力がおすみになりましたら「変更する」ボタンを押して完了ページへお進みください。</p>
                </div>

                <!-- パスワード変更フォーム -->
                <form action="" class="">
                    <div class="form-group row form-inline justify-content-center">
                        <label for="OldPassword" class="col-sm-2 col-form-label">現在のパスワード</label>
                        <div class="col-xs-2">
                            <input type="password" class="form-control" id="OldPassword" placeholder="Password">
                            <small id="passwordHelp" class="form-text text-muted">半角英数字のみ6文字以上で入力ください</small>
                        </div>
                    </div>

                    <div class="form-group row form-inline justify-content-center">
                        <label for="NewPassword" class="col-sm-2 col-form-label">新しいパスワード</label>
                        <div class="col-xs-3">
                            <input type="password" class="form-control" id="NewPassword" placeholder="Password">
                            <small id="passwordHelp" class="form-text text-muted">半角英数字のみ6文字以上で入力ください</small>
                        </div>
                    </div>
                    <div class="form-group row form-inline justify-content-center">
                        <label for="NewPassword-C" class="col-sm-2 col-form-label">新しいパスワード(確認用)</label>
                        <div class="col-xs-3">
                            <input type="password" class="form-control" id="NewPassword-C" placeholder="Password">
                            <small id="passwordHelp" class="form-text text-muted">半角英数字のみ6文字以上で入力ください</small>
                        </div>
                    </div>
                </form>

                <div class="container ">
                    <a href="passwordchangekanryo.html " class="add-submit " id=" ">変更する</a><br>
                </div>
                <div class="container ">
                    <a href="<?php base_url(); ?>/mypage" class="reset-submit " id=" ">戻る</a><br>
                </div>

            </section>

        </div><!--/#contents-->

        <!-- フッター --><!--ページの上部に戻る「↑」ボタン-->
        <?php $this->load->view('Layout/footer_view.php'); ?>

</body>

</html>