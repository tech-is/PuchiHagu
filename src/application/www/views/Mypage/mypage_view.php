<!-- ******************************** -->
<!-- ********   マイページ   ******** -->
<!-- ******************************** -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>マイページ｜幼児無料プリントサイト ぷちはぐ</title>
    <!-- head共通 -->
    <?php $this->load->view('Layout/header_view'); ?>
</head>

<body>

    <div id="container">
        <!-- ロゴ --><!-- メインメニュー -->
        <?php $this->load->view('Layout/menu_view.php'); ?>        

        <!-- メインコンテンツ -->
        <div id="contents">

            <section class="box1">

                <h2><span>マイページ</span></h2>
                <div class="message-user">
                    <p>こんにちは、<?= $users_parent_name; ?>さん</p>
                </div>
                <!-- タブ部分 -->
                <div class="tab-wrap">
                    <!-- こども１ -->
                    <input id="tab01" type="radio" name="tab" class="tab-switch" checked="checked"><label class="tab-label" for="tab01"><img src="<?php base_url(); ?>/topdist/images/mypage_pen_icon.png"> 子どもなまえ➀</label>
                    <div class="tab-content">
                        <div class="fancy-button">
                            <div class="left-frills frills"></div>
                            <div class="button">
                                <p>
                                    <a href="<?php base_url(); ?>/mypage/stamppage"><img src="<?php base_url(); ?>/topdist/images/mypage_note_icon.png"> すたんぷちょう</a>
                                </p>
                            </div>
                            <div class="right-frills frills"></div>
                        </div>
                        <h1 class="mypage-read">プリント</h1>
                        <table cellpadding="0" cellspacing="10" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/hiragana.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/hiragana" class="btn btn-malformation1">「ひらがな」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/suzi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/suzi" class="btn btn-malformation2">「すうじ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="30" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/unpitsu.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/unpitu" class="btn btn-malformation3">「運筆」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/tentunagi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/tentunagi" class="btn btn-malformation4">「点つなぎ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="20" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/programming.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/programming" class="btn btn-malformation5">「プログラミング」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- こども２ -->
                    <input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab02"><img src="<?php base_url(); ?>/topdist/images/mypage_pen_icon.png"> 子どもなまえ➁</label>
                    <div class="tab-content">
                        <div class="fancy-button">
                            <div class="left-frills frills"></div>
                            <div class="button">
                                <p>
                                    <a href="<?php base_url(); ?>/mypage/stamppage2"><img src="<?php base_url(); ?>/topdist/images/mypage_note_icon.png"> すたんぷちょう</a>
                                </p>
                            </div>
                            <div class="right-frills frills"></div>
                        </div>
                        <h1 class="mypage-read">プリント</h1>

                        <table cellpadding="0" cellspacing="10" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/hiragana.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/hiragana" class="btn btn-malformation1">「ひらがな」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/suzi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/suzi" class="btn btn-malformation2">「すうじ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="30" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/unpitsu.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/unpitu" class="btn btn-malformation3">「運筆」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/tentunagi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/tentunagi" class="btn btn-malformation4">「点つなぎ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="20" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php base_url(); ?>/topdist/images/programming.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="<?php base_url(); ?>/mypage/programming" class="btn btn-malformation5">「プログラミング」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <!-- 会員情報・ログアウト -->
                    <input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab03"><img src="<?php base_url(); ?>/topdist/images/mypage_settei_icon.png"> 会員情報 / ログアウト</label>
                    <div class="tab-content">
                        <section class="member">
                            <h1 class="mypage-read">会員情報</h1>
                            <ul>
                                <li>
                                    <a href="<?php base_url(); ?>/mypage/kaiinjouhou_update" class="btn btn--orange"><img src="<?php base_url(); ?>/topdist/images/mypage_touroku_icon.png">
                                        <br>
                                        <br>会員情報の変更</a>
                                </li>
                                <li>
                                    <a href="<?php base_url(); ?>/mypage/passwordchange" class="btn btn--orange"><img src="<?php base_url(); ?>/topdist/images/mypage_password_icon.png">
                                        <br>
                                        <br>パスワードの変更</a>
                                </li>
                                <li>
                                    <a href="<?php base_url(); ?>/mypage/taikai" class="btn btn--orange"><img src="<?php base_url(); ?>/topdist/images/mypage_taikai_icon.png">
                                        <br>
                                        <br>退会</a>
                                </li>
                                <li>
                                    <a href="index.html" class="btn btn--orange"><img src="<?php base_url(); ?>/topdist/images/mypage_logout_icon.png">
                                        <br>
                                        <br>ログアウト</a>
                                </li>
                            </ul>
                        </section>

                    </div>
                </div>
            </section>

        </div><!--/#contents-->

        <!-- フッター --><!--ページの上部に戻る「↑」ボタン-->
        <?php $this->load->view('Layout/footer_view.php'); ?>  

    <script src="<?php base_url(); ?>/topdist/js/fixmenu_pagetop.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>