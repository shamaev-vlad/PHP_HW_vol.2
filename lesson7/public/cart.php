<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Корзина</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container cart" id="app">
		<a href="index.php" class="on_main">На главную</a>
		<div class="row">
			<div class="col-md-8">
				<h1>Корзина</h1>
				<table class="table">
					<thead>
						<th>#</th>
						<th>Название</th>
						<th>Цена</th>
						<th>Количество</th>
						<th>Действия</th>
					</thead>

					<tbody>

						<tr v-for="(product, index) in products">

							<td>{{++index}}</td>
							<td>{{product.title}}</td>
							<td>{{product.price}}$</td>
							<td>{{product.quantity}}</td>
							<td>

								<input type="number" class="form-control quantity" v-model.quantity = "product.quantity">

								<button class="btn btn-danger" @click="deleteProduct(product)">Удалить</button>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4">
				<h1>Новый товар</h1>

				<div class="form-group">

					<label for="">Название</label>

					<input type="text" class="form-control" v-model="product.title">
				</div>

				<div class="form-group">

					<label for="">Цена</label>

					<input type="text" class="form-control" v-model.product.number="product.price">
				</div>

				<div class="form-group">

					<button class="btn btn-success" @click="addProduct()">Добавить товар</button>
				</div>
			</div>
		</div>

		<h2>Количество товаров: {{totalQuantity}}</h2>

		<h2>Общая стоимость: {{totalPrice}} $</h2>


		<span class="alert alert-success" v-if="status">Заказ оформлен</span>

		<button class="btn btn-warning" @click="makeOrder()">Оформить заказ</button>

    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/reqwest/2.0.5/reqwest.js"></script>


	<script>
		const app = new Vue({
			el: '#app',
			data: {

					products: [

				],

				status: false,
				product: {
					title: null,
					price: null,
					quantity: null
				}
			},

			methods: {


				addProduct() {

					var newProduct = {
						title: this.product.title,
						price: this.product.price,
						quantity: 1
						,
						imei: this.product.imei,
						mac: this.product.mac,
						sn: this.product.sn
					};

					this.products.push(newProduct);

					this.product.title = null;
					this.product.price = null;

					this.product.imei = null;
					this.product.mac = null;
					this.product.sn = null;

					reqwest({
					    url: '/addProduct.php'

					  , method: 'post'
					  , data: { product: newProduct }
					  , success: function (resp) {

					    }
					})
				},

				makeOrder() {

					this.status = !this.status;


				},
				deleteProduct(product) {

					this.products.splice(this.products.indexOf(product),1);

					console.log(product); return;


				}
			},


			mounted() {

				const vm = this;

				reqwest('/engine/products.php', function (resp) {

				return vm.products = JSON.parse(resp) ;

				});
			},

			computed: {
				totalQuantity() {
					var total = 0;

					this.products.forEach((product) => {total = total + parseInt(product.quantity);} );
					return total;
				},

				totalPrice() {
					return this.products.reduce((sum, product) => {
						//проверка на типы
						return sum + product.price * product.quantity;
					}, 0);
				},
			}
		});
	</script>

</body>
</html>
