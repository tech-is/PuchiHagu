<!-- ******************************** -->
<!-- *******  会員情報の変更  ******* -->
<!-- ******************************** -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>会員情報の変更｜幼児無料プリントサイト ぷちはぐ</title>
    <!-- head共通 -->
    <?php $this->load->view('Layout/header_view'); ?>

    <script>
        //名前➁の登録ありの場合　ボタンの色と文字の表示を切り替えるjs

        function button_click1() {
            var kaiinjouhou_update_button1 = document.getElementById("kaiinjouhou_update_button1");
            if (kaiinjouhou_update_button1.value == "登録なしへ変更") {
                kaiinjouhou_update_button1.setAttribute('class', 'btn btn-success');
                kaiinjouhou_update_button1.setAttribute("value", "追加");
            } else if (kaiinjouhou_update_button1.value == "追加") {
                kaiinjouhou_update_button1.setAttribute('class', 'btn btn-secondary');
                kaiinjouhou_update_button1.setAttribute("value", "登録なしへ変更");

            }
        }

        //名前➁の登録ありの場合　 フォーム表・非表示切り替えjs
        function switching() {
            var kaiinjouhou_update_button1_value = document.getElementById("kaiinjouhou_update_button1").value;
            //※ここでのkaiinjouhou_update_button1のvalueは、function buton_clickの処理後に取得される

            if (kaiinjouhou_update_button1_value == "追加") {
                $('#kaiinjouhou_child2name_display').hide();
                $('#kaiinjouhou-child2add').hide();
                $('#child2birthday').hide();

                //登録無しの文言のみ表示させる
                $("#none-form1").show();
            } else if (kaiinjouhou_update_button1_value == "登録なしへ変更") {
                $('#none-form1').hide();
                $('#kaiinjouhou_child2name_display').hide();

                //お子さんの名前➁の入力フォームと誕生日のみ表示させる
                $("#kaiinjouhou-child2add").show();
                $("#child2birthday").show();
            }
        }
    </script>
</head>

<body>

    <div id="container">

       <!-- ロゴ --><!-- メインメニュー -->
       <?php $this->load->view('Layout/menu_view.php'); ?>      

        <div id="contents">

            <section class="box1">

                <h1 class="contCaption">MY DATA　UPDATE</h1>
                <h2 class="contSubCaption">会員情報の変更</h2>
                <div class="message-user-kaiin">
                    <p>会員情報の変更を行います。<br> 各項目の入力・変更が完了いたしましたら、「確認する」ボタンを押してください。
                    </p>
                </div>
                <div class="sectionHeader">
                    <h2>基本情報</h2>
                </div><!-- /.sectionHeader -->

                <form action="" method="post">

                    <div class="form-group row form-inline justify-content-center">
                        <label for="username" class="col-sm-2 col-form-label font-weight-bold">ユーザー名<br>(保護者の名前)</label>
                        <div class="col-xs-2">
                            <input type=" text " id="username " class="form-control " placeholder="現在の名前を表示させる ">
                        </div>
                    </div>
                    <div class="form-group row form-inline justify-content-center">
                        <label for="email " class="col-sm-2 col-form-label font-weight-bold">メールアドレス</label>
                        <div class="col-xs-2">
                            <input type="email " class="form-control " id="email " placeholder="アドレスを表示させる ">
                        </div>
                    </div>

                    <div class="form-group row form-inline justify-content-center">
                        <label for="childname1 " class="col-sm-2 col-form-label font-weight-bold">お子さま1人目の名前</label>
                        <div class="col-xs-2">
                            <input type="text " id="childname1 " class="form-control " placeholder="名前を表示させる ">
                        </div>
                    </div>
                    <div class="form-group row form-inline justify-content-center">
                        <label for="childname1 " class="col-sm-2 col-form-label font-weight-bold">誕生日</label>
                        <div class="form-group">
                            <select class="form-control" 　name="year">
                                <option value="">-</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" 　name="month">
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" 　name="day">
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row form-inline justify-content-center">
                        <label for="childname2" class="col-sm-2 col-form-label font-weight-bold">お子さま2人目の名前</label>
                        <div class="col-xs-2" 　id="kaiinjouhou_child2name_display">
                            <span id="kaiinjouhou_child2name_display">
                                <input type="text " id="child2name" class="form-control" placeholder="名前を表示させる">
                            </span>
                        </div>
                        <span id="none-form1">
                            <p class="kaiinjouhou_update_center">登録無し</p>
                        </span>
                        <div class="col-xs-2" id="kaiinjouhou-child2add">
                            <input type=" text " id="child2addname" class="form-control " placeholder="お子さんの名前➁を入力してください ">
                        </div>
                    </div>

                    <div class="form-group row form-inline justify-content-center" id="child2birthday">
                        <label for="child2birthday" class="col-sm-2 col-form-label font-weight-bold">誕生日</label>
                        <div class="form-group">
                            <select class="form-control" 　name="year">
                                <option value="">-</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" 　name="month">
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" 　name="day">
                                <option value="">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                        </div>

                    </div>
                    <div class="kaiinjouhou_update_button1">
                        <!-- onclickで、まずはbutton_click1のファンクションを実行。その後switchingのファンクションへnoneを引数として渡す -->
                        <input id="kaiinjouhou_update_button1" class="btn btn-secondary" type="button" value="登録なしへ変更" onclick="button_click1();switching()">
                    </div>

                    <div class="container ">
                        <a href="kaiinjouhou_update_C.html " class="add-submit " id=" ">確認する</a><br>
                    </div>
                    <div class="container ">
                        <a href="<?php base_url(); ?>/mypage" class="reset-submit " id=" ">キャンセル</a><br>
                    </div>
                </form>

            </section>
        </div>
    </div><!--/#contents-->

   <!-- フッター --><!--ページの上部に戻る「↑」ボタン-->
   <?php $this->load->view('Layout/footer_view.php'); ?>  

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            //初期表示を非表示にする
            $('#none-form1').hide();
            $('#kaiinjouhou-child2add').hide();
        });
    </script>


</body>

</html>