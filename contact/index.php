<?php
 
session_start();  //セッションを使う
 
//入力チェック
$message = '';
if(isset($_POST['confirm'])){ //確認ボタンを押してポストしたものなら
    $error_flg = false;
    //名前の必須入力チェック
    if ($_POST['formName'] === ''){
        $message .= "お名前が入力されていません。<br>";
        $error_flg = true;
    }
    //メールアドレスの必須入力チェック
    if ($_POST['formEmail1'] === ''){
        $message .= "メールアドレスが入力されていません。<br>";
        $error_flg = true;
    }
    //タイトルの必須入力チェック
    if ($_POST['formSubject'] === ''){
      $message .= "タイトルが入力されていません。<br>";
      $error_flg = true;
    }
    //電話番号の必須入力チェック
    if ($_POST['formTel'] === ''){
      $message .= "電話番号が入力されていません。<br>";
      $error_flg = true;
    }
    //内容の必須入力チェック
    if ($_POST['formContent'] === ''){
        $message .= "お問い合わせ内容が入力されていません。<br>";
        $error_flg = true;
    }
 
    //エラーが無ければ入力内容をセッションに保存して確認画面へ
    if (!$error_flg){
        $_SESSION['inquiry'] = $_POST;
        header('Location: confirm_contact.php');
        exit();
    }
}
 
if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'rewrite'){
  $_POST = $_SESSION['inquiry'];
}
?>

<!doctype html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<title>ページ名 | サイト名</title>
<meta name="description" content="サイトの説明文">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- OGP設定 -->
<meta property="og:type" content="website">
<meta property="og:url" content="あなたのサイトURL">
<meta property="og:image" content="SNSで表示させたい画像のパス">
<meta property="og:site_name" content="サイト名">
<meta property="og:description" content="サイトの説明文">
<!-- Facebook用設定 -->
<meta property="fb:app_id" content="facebookのApp ID">
<meta property="article:publisher" content="FacebookページのURL">
<!-- Twitter用設定 -->
<meta name="twitter:card" content="Twitterカードの種類">
<meta name="twitter:site" content="@ユーザー名">
<link rel="canonical" href="あなたのサイトURL">
<link rel="icon" type="image/png" href="ファビコンのパス">
<!-- スタイルシートはここから -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>

<body id="page">
<!----------------------------------------------->
<header>
  <nav id="nav01">
    <div class="container navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand mr-auto" href="../index.html"><img src="../img/logo.png" alt="サイト名" height="50"></a>
      <ul class="nav mr-3 align-self-lg-end justify-content-lg-end d-none d-lg-flex">
        <li class="nav-item"><a href="#" class="nav-link p-2"><i class="fa fa-chevron-right mr-1 small"></i>LINK01</a></li>
        <li class="nav-item"><a href="#" class="nav-link p-2"><i class="fa fa-chevron-right mr-1 small"></i>LINK02</a></li>
      </ul>
      <form class="form-inline mr-3 d-none d-lg-flex align-self-lg-end">
        <input class="form-control" type="text" placeholder="サイト内を検索" aria-label="Search">
      </form>
      <a href="./index.html" class="btn btn-warning mr-1 d-none d-lg-inline-block text-white">無料体験<br>レッスン</a>
      <a href="./index.html" class="btn btn-primary d-none d-lg-inline-block">資料請求<br>はこちら</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav><!-- /# nav01 -->
  <nav class="navbar navbar-expand-lg navbar-light p-0" id="nav02">
    <div class="container">
      <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarNav">
        <ul class="navbar-nav nav-fill py-lg-3">
          <li class="nav-item d-block d-lg-none">
            <form class="px-4 pb-3">
              <input class="form-control" type="text" placeholder="サイト内を検索" aria-label="Search">
            </form>
          </li>
          <li class="nav-item"><a href="../sample/index.html" class="nav-link p-3 p-lg-0">MENU</a></li>
          <li class="nav-item"><a href="../sample/index.html" class="nav-link p-3 p-lg-0">MENU</a></li>
          <li class="nav-item"><a href="../sample/index.html" class="nav-link p-3 p-lg-0">MENU</a></li>
          <li class="nav-item"><a href="../sample/index.html" class="nav-link p-3 p-lg-0">MENU</a></li>
          <li class="nav-item last-list-md"><a href="../sample/index.html" class="nav-link p-3 p-lg-0">MENU</a></li>
          <li class="nav-item d-block d-lg-none link-secondary"><a href="#" class="nav-link p-3 p-lg-0"><i class="fa fa-chevron-right mr-2"></i>LINK01</a></li>
          <li class="nav-item d-block d-lg-none link-secondary"><a href="#" class="nav-link p-3 p-lg-0"><i class="fa fa-chevron-right mr-2"></i>LINK02</a></li>
        </ul>
      </div>
    </div>
  </nav><!-- /# nav02 -->
  <nav aria-label="パンくずリスト" class="bg-primary w-100">
    <ol class="breadcrumb mb-0 rounded-0 text-white container bg-primary">
      <li class="breadcrumb-item"><a href="#" class="text-white">HOME</a></li>
      <li class="breadcrumb-item active text-white" aria-current="page">CONTACT</li>
    </ol>
  </nav>

</header>
<!----------------------------------------------->

<main>
  <!----------------------------------------------->
  <div class="jumbotron mb-0">
    <div class="container text-center">
      <h1 class="display-4 font-weight-bold text-white text-shadow">CONTACT</h1>
      <p class="lead font-weight-bold text-white text-shadow">Lorem ipsum dolor sit amet, </p>
    </div>
  </div>
  <!----------------------------------------------->
  <article class="py-5">
    <section class="py-5">
      <div class="container">
        <h2 class="sample-subtitle">お問い合わせフォーム</h2>
        
        <p style="color: red"><?php echo $message ?></p>  <!-- エラーメッセージ表示 -->
        <form class="col-lg-6 mr-lg-auto px-0" method="post" action="index.php">
          <div class="form-group">
            <label for="formName">お名前 <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="formName" name="formName" 
            value="<?php if(isset($_POST['formName'])) echo htmlspecialchars($_POST['formName']); ?>">
          </div>
          <div class="form-group">
            <label for="formEmail1">メールアドレス <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="formEmail1" name="formEmail1"
            value="<?php if(isset($_POST['formEmail1'])) echo htmlspecialchars($_POST['formEmail1']); ?>">
          </div>
          <div class="form-group">
            <label for="formSubject">タイトル <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="formSubject" name="formSubject"
            value="<?php if(isset($_POST['formSubject'])) echo htmlspecialchars($_POST['formSubject']); ?>">
          </div>
          <div class="form-group">
            <label for="formTel">電話番号 <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="formTel" name="formTel"
            value="<?php if(isset($_POST['formTel'])) echo htmlspecialchars($_POST['formTel']); ?>">
          </div>
          <div class="form-group">
            <label for="formContent">お問い合わせ内容 <span class="text-danger">*</span></label>
            <textarea class="form-control" id="formContent" name="formContent" rows="5"
            value="<?php if(isset($_POST['formContent'])) echo htmlspecialchars($_POST['formContent']); ?>"></textarea>
          </div>
          
          <input type="submit" class="btn btn-primary" name="confirm" value="確認">
          

        </form>
      </div><!-- /.container -->
    </section>
  </article>
  <!----------------------------------------------->
  <section class="bg-maincolor py-5">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-4">
          <img src="../img/contact-bg.png" alt="" class="w-100">
        </div>
        <div class="col-md-8 d-flex flex-column justify-content-between">
          <p class="text-md-center h5 mb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.<br>Lorem ipsum dolor sit amet, sed do eiusmod.
          </p>
          <div class="text-center">
            <a href="./index.html" class="btn btn-warning btn-lg p-3 mb-3 mr-lg-3 text-white font-weight-bold"><i class="fas fa-arrow-right mr-3"></i>無料体験レッスンのお申込み</a>
            <a href="./index.html" class="btn btn-primary btn-lg p-3 mb-3 font-weight-bold"><i class="fas fa-arrow-right mr-3"></i>資料請求のお申込み</a>
          </div>
          <div class="border border-dark text-center p-3">
            <p class="h5">お問合せ：<strong class="h5 tel text-danger mr-lg-3">0120-000-000</strong><br class="d-block d-lg-none">受付時間：平日&ensp;7:00-21:00&ensp;<br class="d-block d-md-none">/&ensp;土日祝&ensp;8:00-21:00</p>
          </div>
          <p class="text-center h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>
  <!----------------------------------------------->
</main>

<footer id="footer" class="bg-light py-5">
  <div class="container py-4 py-md-5">
    <div id="footer-sns" class="row align-items-center border-bottom">
      <div class="col-6 col-lg-3 pb-4">
        <a href="./" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="../img/sns.svg" alt="Official Facebook Page"><span>Official Facebook Page</span></a>
      </div>
      <div class="col-6 col-lg-3 pb-4">
        <a href="./" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="../img/sns.svg" alt="Official Twitter"><span>Official Twitter</span></a>
      </div>
      <div class="col-6 col-lg-3 pb-4">
        <a href="./" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="../img/sns.svg" alt="Official LINE"><span>Official LINE Account</span></a>
      </div>
      <div class="col-6 col-lg-3 pb-4">
        <a href="./" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="../img/sns.svg" alt="Official Instagram"><span>Official Instagram</span></a>
      </div>
    </div><!-- .footer-sns -->

    <div id="footer-index" class="row pt-4">
      <ul class="col list-unstyled">
        <li><a href="#">MENU</a></li>
        <li>
          <ul class="list-unstyled">
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
          </ul>
        </li>
      </ul>
      <ul class="col list-unstyled">
        <li><a href="#">MENU</a></li>
        <li>
          <ul class="list-unstyled">
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
          </ul>
        </li>
      </ul>
      <ul class="col list-unstyled">
        <li><a href="#">MENU</a></li>
        <li>
          <ul class="list-unstyled">
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
          </ul>
        </li>
      </ul>
      <ul class="col list-unstyled">
        <li><a href="#">MENU</a></li>
        <li>
          <ul class="list-unstyled">
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
          </ul>
        </li>
      </ul>
      <ul class="col list-unstyled">
        <li><a href="#">MENU</a></li>
        <li>
          <ul class="list-unstyled">
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
            <li><a href="#">SUBMENU</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.footer-index -->

    <div id="footer-logo" class="mt-2 mt-sm-4">
      <div class="text-center d-sm-flex align-items-sm-center">
        <a class="mr-4" href="../index.html"><img src="../img/logo.png" alt="サイト名" height="50"></a>
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>
    </div><!-- .row -->
  </div><!-- .container -->
</footer>

<div class="text-white bg-primary">
  <p class="text-center mb-0 py-2"><small>Copyright (C) サイト名. All Rights Reserved.</small></p>
</div>
<!----------------------------------------------->
<!-- javascript はここから -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!----------------------------------------------->
</body>

</html>
