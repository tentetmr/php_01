<?php
  session_start();
  include_once("funcs.php");
  loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <header>
  <?php
    include("display/header.php");
    ?>
  <a href="logout.php" class="link">ログアウト</a>
  </header>
  <main>
<!-- 投稿エリア -->
    <form method="POST" action="insert.php" class="post">
      <p><input type="text" name="restaurantName" placeholder="店名" class="input height50"></p>
      <p><input type="number" name="restaurantCost" placeholder="予算" class="input height50"></p>
      <p><textarea name="contents" id="" cols="30" rows="10" placeholder="感想" class="input height200"></textarea></p>
      <input type="submit" value="投稿" class="inputButton">
    </form>

    

<!-- 投稿表示エリア -->
<div class="postContents">
<?php
include("select.php");
echo $view;
?>
</div>

</main>
<!-- フッターエリア -->
<footer>
  <?php
    include("display/footer.php");
  ?>
  
</footer>
</body>
</html>