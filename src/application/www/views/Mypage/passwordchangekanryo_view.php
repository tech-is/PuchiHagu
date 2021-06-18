<!-- ************************************ -->
<!-- ****  パスワード変更完了ページ  **** -->
<!-- ************************************ -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>パスワード変更完了｜幼児無料プリントサイト ぷちはぐ</title>
    <!-- head共通 -->
    <?php $this->load->view('Layout/header_view'); ?>
</head>

<body>

    <div id="container">

        <!-- ロゴ --><!-- メインメニュー -->
        <?php $this->load->view('Layout/menu_view.php'); ?>

        <div id="contents">

            <section class="box1">

                <h1 class="contCaption">MY DATA　UPDATE</h1>
                <h2 class="contSubCaption">パスワードの変更完了</h2>
                <div class="message-user-kaiin">
                    <p>パスワードの変更が完了いたしました。 <br> ご登録いただきましたメールアドレス宛に変更完了メールを送信させていただいております。
                    </p>
                    <p>※10分ほど経過してもメールが届かない場合、以下の可能性があります。</p>
                    <ul>
                        <li>*迷惑メールなどの受信設定をされている</li>
                        <li>*メールサーバーが混み合っている </li>
                        <li>*登録されたメールアドレスに間違いがある</li>
                    </ul>
                </div>
                <div class="sectionInner2">

                    <form action="#" method="post">
                        <div class="tourokujouhou">

                            <div class="container">
                                <a href="<?php base_url(); ?>/mypage" class="reset-submit" id="">マイページへ</a><br>
                            </div><!-- sectionInner -->
                        </div>
                </div>
                </form>

            </section>
        </div><!--/#contents-->

    <!-- フッター --><!--ページの上部に戻る「↑」ボタン-->
    <?php $this->load->view('Layout/footer_view.php'); ?>  

</body>

</html>