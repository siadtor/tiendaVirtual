


<?php
include 'template/cabecera.php';
?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">INICIO</a></li>
				  <li class="active">Carrito de Compra</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
						<!--<td class="image"></td>-->
							<td class="description">Articulo</td>
							<td class="price">Precio</td>
							<td class="quantity">Cantidad</td>
							<td class="quantity">ISV</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php $total=0; $subtotal=0; ?>
						<?php if (isset($_SESSION['CARRITO']) != "") {?>
						<?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
						<tr>
							<!--<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>-->
							<td class="cart_description">
								<h4><a href=""><?php echo $producto['NOMBRE']; ?></a></h4>
								<p>Web ID: <?php echo $producto['SKU']; ?></p>
							</td>
							<td class="cart_price">
								<p>L. <?php echo $producto['PRECIO']; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<script>

									var a = 1;
									function suma() {
									a = a + 1;
									document.getElementById("cantidad").setAttribute("value",a);
									}

									function resta() {

									if (a>1){
									a = a - 1;
									document.getElementById("cantidad").setAttribute("value",a);
									}
									}
									</script>
									<a><button type="button" class="btn btn-warning" onclick="suma()">+</button></a>
									<input class="cart_quantity_input" type="text" name="quantity" id="cantidad" value="<?php echo $producto['CANTIDAD']; ?>" autocomplete="off" size="2">
									<a><button type="button" class="btn btn-warning" onclick="resta()"> - </button></a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">L. <?php echo $producto['ISV']; ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format(($producto['CANTIDAD']*$producto['ISV']*$producto['PRECIO']) + ($producto['CANTIDAD']*$producto['PRECIO']) ,2); ?></p>
							</td>
							<td class="cart_delete">
								<form action="" method="post">
								<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
								<button
								class="btn btn-warning"
								type="submit"
								name="btnAccion"
								value="Eliminar">
								<i class="fa fa-times"></i>
								</button>
								</form>
							</td>
						</tr>
						<?php $total = $total + ($producto['CANTIDAD']*$producto['ISV']*$producto['PRECIO']) + ($producto['CANTIDAD']*$producto['PRECIO']); ?>
						<?php $subtotal = $subtotal + ($producto['CANTIDAD']*$producto['PRECIO']); ?>

						<?php } }?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>

							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>L. <?php echo number_format($subtotal,2);?></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>L. <?php echo number_format($total,2);?></span></li>
						</ul>
							<a class="btn btn-default update" href="">Comprar</a>
							<!--<a class="btn btn-default check_out" href="">Check Out</a>-->
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php include 'template/piepagina.php'; ?>
