<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
    require_once "../config/main.php";
    require_once ENGINE_DIR . "db.php";
    require_once ENGINE_DIR . "category.php";
    require_once ENGINE_DIR . "comments.php";



    $id = $_GET['id'];
    $addcom = $_GET['addcom'];


    $info = queryOne("SELECT * FROM product WHERE id = {$id}");

    echo '<a style="text-decoration: none; color: blue;" href="index.php" role="button">На главную</a>';
    echo '<center><img src="./images/small/' . $info['image'] . '" alt="' . $info['name'] . '"><br><br>';
    echo '<a class="btn_cart" href="cart.php" role="button">Перейти в корзину</a>' . '<br><br>';
    // echo '<form action="/engine/addProduct.php" method="POST">
    //         <input data-id="${key}" type="submit" value="Добавить в корзину" />
    //         </form>' . '<br><br><hr>';
    echo '<a href="#" class="btn_view btn-primary buy" data-price="" data-product="">Купить</a>' . '<br><br>';
    echo '<b>Название:</b> ' . $info['name'] . '<br><br>';
    echo '<b>Краткое описание:</b> ' . $info['short_description'] . '<br><br>';
    echo '<b>Описание:</b> ' . $info['description'] . '<br><br>';
    echo '<b>Цена:</b> ' . $info['price'] . ' руб.<br><br>';
    echo '<b>Категория:</b> ' . nameCategory($info['category_id']) . '<br><br><hr>';



    if ($addcom == "form") {
        formComments($id);
    } else {
        if ($addcom) {
            addComments($id);
        }
        displayComments($id);
    }


    closeConnection();


    ?>

    <script src="./js/main.js"></script>
  </body>
</html>
