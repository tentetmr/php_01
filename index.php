<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=”icon” href=“/img/favicon.ico”>
  <link rel="stylesheet" href="css/style.css">
  <title>Fête gourmande</title>
</head>

<body>
  <header>
    <div class="headerLogin">
    <?php
    include("display/header.php");
    ?>
    </div>
  </header>

  <main>
    <div class='intro'>
      Fête gourmande（グルマンの集い）は会員制のグルメ情報共有サイトです。皆には教えたくない、でも誰かに共有したい…そんな素敵なお店の情報を集めた、グルマンによるグルマンのための憩いの場です
    </div>
  

    <div class="heading">Login</div>
      <div class="loginForm">
        <form method="post" action="login_act.php" class="post">
          <p><input type="text" name="lid" placeholder="ログインID" class="input height50"></p>
          <p><input type="text" name="lpw" placeholder="パスワード" class="input height50"></p>
          <input type="submit" value="ログイン" class="inputButton height50">
        </form>
      </div>

      <p><button class="registrationButton">会員登録がまだの方</button></p> 

      <div class="registrationForm">
        <p class="heading">Register</p>

        <form method="post" action="register.php" class="post">
          <p><input type="text" name="u_name" placeholder="ユーザ名" class="input height50"></p>
          <p><input type="text" name="lid" placeholder="ログインID" class="input height50"></p>
          <p><input type="text" name="lpw" placeholder="パスワード" class="input height50"></p>
          <input type="submit" value="会員登録" class="inputButton height50">
        </form>
      </div>
  </main>

  <footer>
    <?php
      include("display/footer.php");
    ?>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(".registrationButton").on("click",function(){
      $(".registrationForm").slideDown(500);
    });
  </script>

</body>
</html>