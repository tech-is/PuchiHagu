<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>幼児無料プリントサイト ぷちはぐ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="無料で利用できる幼児(3歳～6歳)向けの教育、プリントサービスです">
  <meta name="keywords" content="幼児教育,知育,無料プリント,子供プリント,ひらがな,印刷">
  <link rel="stylesheet" href="http://puchihagu.com/topdist/css/style.css">
  <link rel="stylesheet" href="http://puchihagu.com/topdist/css/slide.css">
  <script src="http://puchihagu.com/topdist/js/fixmenu_pagetop.js"></script>
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type = "text/javascript">

function disp(){
  if(window.confirm('メッセージを送信する')){
    location.href = "http://puchihagu.com/index.php/Top/send";
  }
  else{
    window.alert('キャンセルされました');
  }
}
</script>

</head>

<body>

  <div id="container">

    <header>
      <h1 id="logo"><a href="http://puchihagu.com/index.php/Top"><img src="http://puchihagu.com/topdist/images/logo1.png" alt="幼児無料プリントサイト　ぷちはぐ"></a></h1>
    </header>


    <nav id="menubar">
      <ul>
        <li class="current"><a href="http://puchihagu.com/index.php/Top">Home</a></li>
        <li><a href="signup.html">会員登録・ログイン</a></li>
        <li><a href="http://puchihagu.com/index.php/Top/print">プリントする</a></li>
        <li><a href="oshirase.html">お知らせ・コラム</a></li>
        <li><a href="aboutsite.html">このサイトについて・利用規約</a></li>
        <li><a href="http://puchihagu.com/index.php/Top/contact">お問い合わせ</a></li>
      </ul>
    </nav>  <div id="contents">

    <section>
    
    <h2><span>お問い合わせ</span></h2>
    <?php echo form_open('Top/send');?>
    <table class="ta1">
    <tr>
      <th>お名前※</th>
      <td><?php echo $_SESSION['contact_name']; ?></td>
    </tr>
    <tr>
      <th>メールアドレス※</th>
      <td><?php echo $_SESSION['contact_mail']; ?></td>
    <tr>
      <th>お問い合わせ詳細※</th>
      <td><?php echo $_SESSION['contact_contents']; ?></td>
    </tr>
    </table>
    
    <p class="c">
    <input type="submit" value="上記の内容で送信する" class="btn" name="btn_submit">
    </p>
    <p style="text-align:center">
    <a href="http://puchihagu.com/index.php/Top/contact">キャンセル</a>
    </p>
    </section>
    </div>
<!--/#contents-->

<footer>
<small>Copyright&copy; <a href="http://puchihagu.com/index.php/Top/index">幼児プリントサイト　ぷちはぐ</a> All Rights Reserved.</small>
<span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
</footer>

</div>
<!--/#container-->

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#"><img src="http://puchihagu.com/topdist/images/pagetop.png" alt="PAGE TOP"></a></p>

</body>
</html>