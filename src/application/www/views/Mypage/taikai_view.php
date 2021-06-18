<!-- ******************************** -->
<!-- ********      退会      ******** -->
<!-- ******************************** -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>退会｜幼児無料プリントサイト ぷちはぐ</title>
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

                <!-- <form action="#" method="post"> -->
                <h1 class="contCaption">WITHDRAWAL</h1>
                <h2 class="contSubCaption">退会</h2>
                <p class="message-user-kaiin">退会されますと、お預かりしているご登録情報を全て消去いたします。<br>「退会する」ボタンを押して退会ページへお進みください。</p>

                <div class="container">
                    <a href="taikaikanryo.html" class="add-submit " id=" ">退会する</a><br>
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