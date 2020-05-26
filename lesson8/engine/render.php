<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";

function displayGallery()
{
    $dir = PUBLIC_DIR . "images/small/";
    $products = queryAll("SELECT * FROM product");
    foreach ($products as $info) {
        if (file_exists($dir . $info['path'])) {
            /*Вывод фото*/
            echo "<div class='items'><a class='item_link' href='view.php?id={$info["id"]}'>
            <img class='item_img' src = '{$dir}{$info["image"]}' title='Подробнее'><br>{$info["name"]}</a></div>";
        }
    }
}
