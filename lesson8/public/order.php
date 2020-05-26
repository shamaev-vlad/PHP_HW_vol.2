<?php
require_once '../payment/inc/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="order_wrapper center" id="app">
      <a href="index.php" class="on_main">На главную</a> <br>
      <a href="cart.php">Назад в корзину</a>
      <h1 class="order_header">Оформление заказа</h1>
      <div class="order_panel">
        <div class="order_bio">
            <label for="name">Ф.И.О</label>
            <input class="order_input" type="name" id="name" placeholder="Петров Петр Петрович" required>
        </div>
        <div class="order_email">
          <label for="email">E-mail</label>
          <input class="order_input" type="email" id="email" placeholder="example@gmail.com" required>
        </div>
        <div class="order_phone">
          <label for="phone">Телефон</label>
          <input class="order_input" type="tel" id="phone" placeholder="+7 (495) 999-99-99" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
        </div>
        <div class="order_address">
          <label for="address">Адрес</label>
          <input class="order_input" type="addres" id="address" placeholder="г. Москва, ул. Воздвиженка, д. 1" required>
        </div>

        <span class="alert alert-success" v-if="status">Заказ оформлен</span>

    	<input class="btn btn-warning" @click="makeOrder()" value="Оформить заказ" type="submit">

      </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/reqwest/2.0.5/reqwest.js"></script>

    <script>
      const app = new Vue({
        el: '#app',
        data: {

          status: false,

        },

        methods: {

          makeOrder() {

            this.status = !this.status;
            document.getElementsByClassName('btn')[0].style= "display: none";

          },

        },

      });
    </script>


  </body>
</html>
