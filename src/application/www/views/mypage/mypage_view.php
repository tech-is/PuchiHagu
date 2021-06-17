<!-- **************************** -->
<!-- *****    マイページ    ***** -->
<!-- **************************** -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>マイページ | 幼児無料プリントサイト ぷちはぐ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="無料で利用できる幼児(3歳～6歳)向けの教育、プリントサービスです">
    <meta name="keywords" content="幼児教育,知育,無料プリント,子供プリント,ひらがな,印刷">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/topdist/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/topdist/css/slide.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>
    
    <div id="container">
        <!-- ヘッダー -->
        <header>
            <h1 id="logo">
                <a href="index.html"><img src="<?= base_url(); ?>/topdist/images/logo1.png" alt="幼児無料プリントサイト　ぷちはぐ"></a>
            </h1>
        </header>

        <!-- メニューバー -->
        <nav id="menubar">
            <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li><a href="signup.html">会員登録・ログイン</a></li>
                <li><a href="print.html">プリントする</a></li>
                <li><a href="oshirase.html">お知らせ・コラム</a></li>
                <li><a href="aboutsite.html">このサイトについて・利用規約</a></li>
                <li><a href="contact.html">お問い合わせ</a></li>
            </ul>
        </nav>

        <div id="contents">

            <section class="box1">

                <h2><span>マイページ</span></h2>
                <div class="message-user">
                    <p>こんにちは、<?= $users_parent_name; ?>さん</p>
                </div>
                <!-- タブ部分 -->
                <div class="tab-wrap">
                    <!-- こどものなまえ１ -->
                    <input id="tab01" type="radio" name="tab" class="tab-switch" checked="checked"><label class="tab-label" for="tab01"><img src="<?= base_url(); ?>/topdist/images/mypage_pen_icon.png"> 子どもなまえ➀</label>
                    <div class="tab-content">
                        <div class="fancy-button">
                            <div class="left-frills frills"></div>
                            <div class="button">
                                <p>
                                    <a href="stamppage.html"><img src="<?= base_url(); ?>/topdist/images/mypage_note_icon.png"> すたんぷちょう</a>
                                </p>
                            </div>
                            <div class="right-frills frills"></div>
                        </div>
                        <h1 class="mypage-read">プリント</h1>
                        <table cellpadding="0" cellspacing="10" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/hiragana.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="hiragana.html" class="btn btn-malformation1">「ひらがな」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/suzi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="suzi.html" class="btn btn-malformation2">「すうじ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="30" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/unpitsu.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="unpitu.html" class="btn btn-malformation3">「運筆」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/tentunagi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="tentunagi.html" class="btn btn-malformation4">「点つなぎ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="20" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/programming.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="programming.html" class="btn btn-malformation5">「プログラミング」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- こどものなまえ２ -->
                    <input id="tab02" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab02"><img src="<?= base_url(); ?>/topdist/images/mypage_pen_icon.png"> 子どもなまえ➁</label>
                    <div class="tab-content">
                        <div class="fancy-button">
                            <div class="left-frills frills"></div>
                            <div class="button">
                                <p>
                                    <a href="stamppage2.html"><img src="<?= base_url(); ?>/topdist/images/mypage_note_icon.png"> すたんぷちょう</a>
                                </p>
                            </div>
                            <div class="right-frills frills"></div>
                        </div>
                        <h1 class="mypage-read">プリント</h1>

                        <table cellpadding="0" cellspacing="10" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/hiragana.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="hiragana.html" class="btn btn-malformation1">「ひらがな」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/suzi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="suzi.html" class="btn btn-malformation2">「すうじ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="30" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/unpitsu.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="unpitu.html" class="btn btn-malformation3">「運筆」を印刷</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/tentunagi.png" alt="すうじプリント" width="300" height=""></p>
                                    </td>
                                    <td>
                                        <a href="tentunagi.html" class="btn btn-malformation4">「点つなぎ」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table cellpadding="0" cellspacing="20" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="<?= base_url(); ?>/topdist/images/programming.png" alt="ひらがなプリント" width="300" height="">
                                    </td>
                                    <td>
                                        <a href="programming.html" class="btn btn-malformation5">「プログラミング」を印刷</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- 会員情報/ログアウト -->
                    <input id="tab03" type="radio" name="tab" class="tab-switch"><label class="tab-label" for="tab03"><img src="<?= base_url(); ?>/topdist/images/mypage_settei_icon.png"> 会員情報 / ログアウト</label>
                    <div class="tab-content">
                        <section class="member">
                            <h1 class="mypage-read">会員情報</h1>
                            <ul>
                                <li>
                                    <a href="<?php base_url(); ?>/mypage/usersdata_update" class="btn btn--orange"><img src="<?= base_url(); ?>/topdist/images/mypage_touroku_icon.png">
                                        <br>
                                        <br>会員情報の変更</a>
                                </li>
                                <li>
                                    <a href="passwordchange.html" class="btn btn--orange"><img src="<?= base_url(); ?>/topdist/images/mypage_password_icon.png">
                                        <br>
                                        <br>パスワードの変更</a>
                                </li>
                                <li>
                                    <a href="taikai.html" class="btn btn--orange"><img src="<?= base_url(); ?>/topdist/images/mypage_taikai_icon.png">
                                        <br>
                                        <br>退会</a>
                                </li>
                                <li>
                                    <a href="index.html" class="btn btn--orange"><img src="<?= base_url(); ?>/topdist/images/mypage_logout_icon.png">
                                        <br>
                                        <br>ログアウト</a>
                                </li>
                            </ul>
                        </section>


                    </div>

                </div>

            </section>



        </div>
        <!--/#contents-->

        <!-- フッター -->
        <footer>
            <small>Copyright&copy; <a href="index.html">幼児無料プリントサイト　ぷちはぐ</a> All Rights Reserved.</small>
            <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </footer>

    </div>
    <!--/#container-->

    <!--ページの上部に戻る「↑」ボタン-->
    <p class="nav-fix-pos-pagetop">
        <a href="#"><img src="<?= base_url(); ?>/topdist/images/pagetop.png" alt="PAGE TOP"></a>
    </p>

    <script src="<?= base_url(); ?>/topdist/js/fixmenu_pagetop.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>