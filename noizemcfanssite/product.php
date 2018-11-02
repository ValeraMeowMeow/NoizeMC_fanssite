<!-- УВЕЛИЧЕННЫЙ ПРОДУКТ -->
<div class="big_product">

	<!-- Закрыть окошко -->
	<span class="close_product right">
		<a href="shop.php">
			<img src="Магазин/Крестик.png">
		</a>
	</span>
	
	<div class="big_product_name">
		<?php echo $product['name']; ?>
	</div>

	<form action="product_bs.php">
	<!-- ПРОДУКТ -->
	<div class="search pr">
		<input type="text" name="product_s" placeholder="Название продукта" required="required">
	</div>
	<!-- ИМЯ -->
	<div class="search pr">
		<input type="text" name="name_s" placeholder="Ваше имя" required="required">
	</div>

	<!-- EMAIL -->
	<div class="search pr">
		<input type="email" name="email_s" placeholder="Email" required="required">
	</div>

	<!-- ТЕЛЕФОН -->
	<div class="search pr">
		<input type="text" name="phone_s" placeholder="Номер телефона" required="required">
	</div>

	<!-- КОЛИЧЕСТВО -->
	<div class="search pr">
		<input type="text" name="count_s" placeholder="Количество" required="required">
	</div>

	<!-- ЗАКАЗАТЬ -->
	<div >
		<input type="submit" value="Заказать">
	</div>

	<p>Оператор свяжется с Вами в течение 24ч.</p>
	</form>
</div>