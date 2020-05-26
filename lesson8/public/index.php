<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<div class="wrapper">
    <?php
    require_once "../config/main.php";
    require_once ENGINE_DIR . "render.php";

    displayGallery();
    closeConnection();
    ?>
</div>

    <div style="text-align: center">
    <a href="cart.php" class="btns">Перейти в корзину</a>
    <a href="login.php" class="btns">Личный кабинет</a>
    <a href="admin.php" class="btns">Панель администратора</a>
    </div>
  </body>
</html>
