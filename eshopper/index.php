<?php
 include 'template/cabecera.php';


?>

<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
                  <h1><span>TIENDA RIOS BENDICION</h1>
									<h2>!LO MEJOR EN PRENDAS!</h2>
									<p></p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
                  <h1><span>TIENDA RIOS BENDICION</h1>
									<h2>!LO MEJOR EN PRENDAS!</h2>
									<p></p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>TIENDA RIOS BENDICION</h1>
									<h2>!LO MEJOR EN PRENDAS!</h2>
									<p></p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->
	<?php if ($mensaje!=""){ ?>
		<div class="container">
		<div class="alert alert-success">
		<?php
		 echo ($mensaje);
		?>
		<a href="cart.php" class="badge badge-success">Ver Carrito</a>
		</div>
		</div>
	<?php }?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											CAMISAS DEPORTIVAS
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
										</ul>
									</div>
								</div>
							</div>
              <!--
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>-->
						</div><!--/category-products-->


						<div class="brands_products">
            <!--brands_products--
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
-->
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range--
							<h2>Rango de Precio</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">L 0</b> <b class="pull-right">L 1000</b>
							</div>-->
						</div><!--/price-range-->
<!--
						<div class="shipping text-center"><!--shipping-
							<img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping -->


					</div>
				</div>

        <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Articulos</h2>
        <?php

          $conexion = new mysqli("localhost:3306", "root", "", "tiendarb" );
          $consulta = "SELECT * FROM producto where ProductoID <= 3";
          $resultado = $conexion -> query($consulta);




          while ($filas = $resultado -> fetch_assoc()){


                    ?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">


										<div class="productinfo text-center">
											<img src="images/home/<?php echo $filas['SKU'] ?>.jpg" alt="" onclick="productodetalle(\'' . %filas['ProductoID'] '\')" href="product-details.php" />
											<!--<h2>L. <?php echo $filas['Precio'] ?></h2>-->
											<h3><?php echo $filas['Nombre'] ?></h3>
											<!--<button href="carrito.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart" ></i>Añadir al carrito</button>-->
										</div>


										<div class="product-overlay">
											<div class="overlay-content">
											<h2>L. <?php echo $filas['Precio'] ?></h2>
											<h3><?php echo $filas['Nombre'] ?></h3>
												<form action="" method="post">
												<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($filas['ProductoID'],COD,KEY); ?>">
												<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($filas['Nombre'],COD,KEY); ?>">
												<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($filas['Precio'],COD,KEY); ?>">
												<input type="hidden" name="isv" id="isv" value="<?php echo openssl_encrypt($filas['ISV'],COD,KEY); ?>">
												<input type="hidden" name="sku" id="sku" value="<?php echo openssl_encrypt($filas['SKU'],COD,KEY); ?>">
												<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                        <a href="product-details.php?id=<?php echo $filas['ProductoID'] ?>" class="button">Ver Detalles</a> <br/>
												<button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                      
                        </form>

											</div>
										</div>
								</div>




								</div>

						</div>



          <?php } ?>








	</section>

<?php include 'template/piepagina.php'?>
