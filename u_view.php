<?php
  session_start();
  include("funcs.php");
  loginCheck();

$id = $_GET["id"];
$pdo =  db_connect();

$sql = "SELECT * FROM sns_contents WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view="";
if($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
} else {
  $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <?php include("display/header.php"); ?>
</header>
<main>
  <form method="post" action="update.php" class="post">
      <p class="heading">Edit</p>
      
      <p><input type="text" name="restaurantName" value="<?=$row["restaurantName"]?>" placeholder="店名" class="input height50"></p>
      <p><input type="number" name="restaurantCost" value="<?=$row["restaurantCost"]?>" placeholder="予算" class="input height50"></p>
      <p><textarea name="contents" id="" cols="30" rows="10" class="input height200"><?=$row["contents"]?></textarea></p>
      <input type="hidden" name="updatedSysdate" value="<?=$row["updatedSysdate"]?>">
      <input type="hidden" name="id" value="<?=$row["id"]?>">
      <input type="submit" value="修正" class="inputButton"><br>
  </form>
  <a class="link" href="member.php">戻る</a>
</main>
<footer>
  <?php
    include("display/footer.php");
  ?>

</footer>
</body>
</html>
