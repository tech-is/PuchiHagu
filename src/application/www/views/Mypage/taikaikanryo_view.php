<!-- ******************************** -->
<!-- ********    退会完了    ******** -->
<!-- ******************************** -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>幼児無料プリントサイト ぷちはぐ</title>
    <!-- head共通 -->
    <?php $this->load->view('Layout/header_view'); ?>
</head>

<body>

    <div id="container">

        <!-- ロゴ --><!-- メインメニュー -->
        <?php $this->load->view('Layout/menu_view.php'); ?>        

        <div id="contents">

            <section class="box1">

                <h1 class="contCaption">THAK YOU</h1>
                <h2 class="contSubCaption">退会完了</h2>
                <p class="message-user-kaiin">ご利用ありがとうございました。</p>

                <div class="container">
                    <a href="<?php base_url(); ?>/top" class="reset-submit" id="">HOMEへ</a><br>
                </div>

            </section>

        </div><!--/#contents-->

    <!-- フッター --><!--ページの上部に戻る「↑」ボタン-->
    <?php $this->load->view('Layout/footer_view.php'); ?>  
</body>

</html>