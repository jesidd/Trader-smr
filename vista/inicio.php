<?php

    session_start();

    if(!isset($_SESSION['NOMBRE_USUARIO'])){
        echo 'debes iniciar seccion';
        session_destroy();
		header("Location: ../../vista/register.html");
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keyword" content="compras,tecnologia,vehiculos,ofertas,calzado,calidad">
		<link href="../vista/css/inicio.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/categorias.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/carruself.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/carrusel2.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/info.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<script src="../vista/js/loading.js"></script>
		<script src="../vista/js/inicio.js"></script>
		<link rel="icon" type="favicon" href="../vista/img/favicon.ico">
		<title>TraderSMR - Compras e intercambios</title>
	</head>

	<body>				
		<header>
			<div class="container">
				<div class="logo">
					<a href="inicio.html"><img src="../vista/img/logo.png"  alt="TradeSRM">
				</div>
				<nav class="menu">
					<div class="menuopcion">
						<ul>
				          <li><a class="active" href="#">INICIO</a></li>
				          <li><a href="#">OFERTAS</a></li>
				          <li><a href="#">VENDER</a></li>
				          <li><a href="#">CATEGORIAS</a></li>
				          <li><a href="#">TODO</a></li>
						</ul>
					</div>
					<div class="search-bar">
						<input type="text" placeholder="Buscar productos...">
						 <div class="btn">
	        				<i class="fa fa-search"></i>
	      				 </div>
					</div>
					<div class="icons">
						<a href="#"><i class="fa fa-heart"></i></a>
						<a href="#"><i class="fa fa-shopping-cart"></i></a>
					</div>
					</div>
					<div class="navbar">
						<div class="nav_right">
							<li class="nr_li dd_main">
								<img src="img/profile_pic.png" alt="profile_img">
								<div class="dd_menu">
									<div class="dd_left">
										<ul>
											<li><i class="fa fa-user"></i></li>
											<li><i class="fa fa-th-large"></i></li>
											<li><i class="fa fa-pen"></i></li>
											<li><i class="fas fa-envelope-open-text"></i></li>
											<li><i class="fa fa-question"></i></li>
											<li><i class="fas fa-cog"></i></li>
											<li><i class="fas fa-sign-out-alt"></i></li>
										</ul>
									</div>
									<div class="dd_right">
										<ul>
											<li>Username</li>
											<li><a href="">Plataforma</a></li>
											<li><a href="./pages/modificar.php">Editar datos</a></li>
											<li><a href="">Mis mensajes</a></li>
											<li><a href="">Ayuda</a></li>
											<li><a href="">Configuración</a></li>
											<li><a href="../controlador/action/act_logout.php">Cerrar sesión</a></li>
										</ul>
									</div>
								</div>
							</li>
						</div>
					</div>	
				</nav>
			</div>
		</header>

		<!--Contenido de landing-->	

		<section class="informacion">	
			<div class="contenedorcover">
				<div class="text">
					<h1> TRADER <span>SMR</span></h1>
					<p> Llegamos para quedarnos y revolucionar el mercado, del comercio <span> electronico </span> en la perla del <span> CARIBE!. </span> </p>
					<input type="button" value="Leer más">
					<div class="socialmedia">
						<a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
						<a href="#" style="--i:7;"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#" style="--i:8;"><i class='bx bxl-twitter' ></i></a>
						<a href="#" style="--i:9;"><i class='bx bxl-tiktok' ></i></a>
						<a href="#" style="--i:10;"><i class='bx bxl-whatsapp' ></i></a>
					</div>
				</div>
				<div class="svg">
					<img src="../vista/img/cartsvg.png"  alt="cart">
				</div>
			</div>
		</section>

		<!--Contenido de categorias-->

		<section class="categorias">
			<div id="tituloz">
				<h1>CATEGORIAS</h1>
			</div>
			<div class="container2">
					<div class="card">
						<div class="contenido2">
							<h3>BIKINIS</h3>
						</div>
						<figure>
							<img src="../vista/producto/bikinii.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>ZAPATOS</h3>
						</div>	
						<figure>
							<img src="../vista/producto/zapatoi.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>DAMAS</h3>
						</div>	
						<figure>
							<img src="../vista/producto/femalei.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>JOYAS</h3>
						</div>	
						<figure>
							<img src="../vista/producto/joyai.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>CABALLEROS</h3>
						</div>	
						<figure>
							<img src="../vista/producto/malei.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
				</div>
				<div class="container2">
					<div class="card">
						<div class="contenido2">
							<h3>TECNOLOGIA</h3>
						</div>
						<figure>
							<img src="../vista/producto/pci.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>HOGAR</h3>
						</div>	
						<figure>
							<img src="../vista/producto/hogari.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>ASEO</h3>
						</div>	
						<figure>
							<img src="../vista/producto/aseoi.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>VEHICULOS</h3>
						</div>	
						<figure>
							<img src="../vista/producto/cari.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
					<div class="card">
						<div class="contenido2">
							<h3>OTROS</h3>
						</div>	
						<figure>
							<img src="../vista/producto/otroi.png" alt="vestidos" class="imgi">
						</figure>
						<a class="contenido2" href="#">Ver más </a>
					</div>
				</div>
			</div>
		</section>

		<!--Contenido de destacados-->

		<section class="recomendados">
			<div class="contedorr">
				<div class="titulor">
					<h1>Productos destacados!</h1>
				</div>					
			</div>	
		</section>

		<section class="carruselslider">
			<button class="pre-btn"><img src="../vista/img/arrow.png" alt=""></button>
        	<button class="nxt-btn"><img src="../vista/img/arrow.png" alt=""></button>
			<div class="product-container">
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img10.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">fotografia</h2>
	                   <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img13.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">decoración</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img11.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">PODCATS </h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img14.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">aseo</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img12.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">Instrumentos</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img7.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">moviles</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img8.jpg" class="product-thumb" alt="">
	                   <button class="card-btn">Añadir a carrito</button> 
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">computadores</h2>
	                   <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/img9.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">calzado</h2>
	                   <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/bikini.png" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">Bikini</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="../vista/img/vestido.png" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">vestido</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
        	</div>
		</section>

		<!--Contenido de ofertas-->

		<section class="losmascomprados">
			<div class="contedorl">
				<div class="titulol">
					<h1>Ofertas de verano!</h1>
				</div>
			</div>
		</section>

		<section class="carruselslider2">
			<button class="pre-btn"><img src="../vista/img/arrow.png" alt=""></button>
        	<button class="nxt-btn"><img src="../vista/img/arrow.png" alt=""></button>
			<div class="product-container">
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img2.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">Drones</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img3.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">conjuntos</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img4.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">vestidos </h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img5.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">conjuntos</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img6.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">accesorios</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img7.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">moviles </h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img8.jpg" class="product-thumb" alt="">
	                   <button class="card-btn">Añadir a carrito</button> 
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">computadores</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img9.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">calzado</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img16.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">moda</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">50% off</span>
	                    <img src="../vista/img/img15.jpg" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">accesorios</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
        	</div>
		</section>
		
		<section id="separador">
			
		</section>

		<!--Contenido de pie de pagina-->

		<section class="info">
			<div class="containerinfo">
				<div class="box">
					<h2 class="box__titulo">Calidad y buen precio</h2>
					<div class="sub-box">
						<div class="calidad__img"></div>
						<p class="box__texto"> Contamos con la mejor calidad del mercado en nuestros productos, con precios <span>competitivos y asequibles.</span> </p>
					</div>
				</div>
				<div class="box">
					<h2 class="box__titulo">Paga seguro</h2>
					<div class="sub-box">
						<div class="seguridad__img"></div>
						<p class="box__texto">Paga seguro con algunos de nuestros patricinadores, <span>VISA, MASTERCARD, EFECTY.</span> </p>	
					</div>
				</div>
				<div class="box">
					<h2 class="box__titulo">Envios gratis</h2>
					<div class="sub-box">
						<div class="envios__img"></div>
						<p class="box__texto"><span>Envios totalmente gratis</span>  en las compras que realices en nuestra plataforma, pagando por medio de algunos de nuestros <span>patrocinadores.</span></p>	
					</div>
				</div>
			</div>
		</section>


		<section class="pqr">
			<div class="containerpqr">
				<li class="lista">
					<h2 class="lista__titulo">Te ayudamos</h2>
					<ul><a href="#" class="lista__enlace">Mi cuenta</a></ul>
					<ul><a href="#" class="lista__enlace">Seguimiento de mi orden</a></ul>
					<ul><a href="#" class="lista__enlace">Medios de pagos</a></ul>
					<ul><a href="#" class="lista__enlace">Métodos de entrega</a></ul>
				</li>
				<li class="lista">
					<h2 class="lista__titulo">Atencion al cliente</h2>
					<ul><a href="#" class="lista__enlace">Atencion 24/7</a></ul>
					<ul><a href="#" class="lista__enlace">Términos y condiciones</a></ul>
					<ul><a href="#" class="lista__enlace">Transacciones</a></ul>
					<ul><a href="#" class="lista__enlace">Encuestas</a></ul>
				</li>
				<li class="lista">
					<h2 class="lista__titulo">Quienes somos</h2>
					<ul><a href="#" class="lista__enlace">Mision y vision</a></ul>
					<ul><a href="#" class="lista__enlace">Preguntas frecuentes</a></ul>
					<ul><a href="#" class="lista__enlace">Conocenos</a></ul>
					<ul><a href="#" class="lista__enlace">Social</a></ul>
				</li>
				<li class="lista">
					<h2 class="lista__titulo">PQR</h2>
					<ul><a href="#" class="lista__enlace">Cambios y devoluciones</a></ul>
					<ul><a href="#" class="lista__enlace">Reversion del pago</a></ul>
				</li>
			</div>
		</section>
		

		<!--Scripts no tocar-->
		<script>
			var dd_main = document.querySelector(".dd_main");

			dd_main.addEventListener("click", function(){
				this.classList.toggle("active");
			})
		</script>
		<script src="../vista/js/carrusel2.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="../vista/js/carruself.js"></script>
	</body>

	<footer>
		<div class="container__redes">
			<div class="iconos__redes">
				<a href="https://www.facebook.com"><i class='bx bxl-facebook icons'></i>
				<a href="https://www.twitter.com"><i class='bx bxl-twitter icons'></i>
				<a href="https://www.instagram.com"><i class='bx bxl-instagram icons'></i>
			</div>
			<a href="#" class="redes__enlace">Suscríbete y entérate de nuestras ofertas y productos</a>
		</div>

		<div class="container__derechos">
			<span class="texto__derecho"><i class='bx bx-copyright copy'></i> TODOS LOS DERECHOS RESERVADOS</span>
			<span class="texto__derechos">TraderSMR de
				Colombia S.A. Calle 99 11A-32 Santa Marta Colombia  Teléfono: Santa Marta 00000 Mail: servicioalcliente@tradersmr.com.co
			</span>
			<span class="texto__derechoss"><img src="../vista/img/norton.svg" alt="Logo de norton empresa de cyberseguridad" class="img-norton">COMPRA 100% SEGURA</span>
		</div> 
	</footer>

</html>