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
echo '<a style="border: 1px solid #d1d1d1; text-decoration: none; color: #525252; padding: 3px" href="cart.php" role="button">Перейти в корзину</a>' . '<br><br>';
// echo '<button>Добавить в корзину</button>' . '<br><br><hr>';
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
