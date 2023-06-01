<?php

    session_start();

    if(!isset($_SESSION['NOMBRE_USUARIO'])){
        echo 'debes iniciar seccion';
        session_destroy();
		header("Location: ./register.php");
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keyword" content="compras,tecnologia,vehiculos,ofertas,calzado,calidad">
		<link href="./css/inicio.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/categorias.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/carruself.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/carrusel2.css" rel="stylesheet" type="text/css">
		<link href="../vista/css/info.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="favicon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="../vista/js/loading.js"></script>
		<script src="../vista/js/inicio.js"></script>
		<script src="./js/getfoto.js"></script>
		<link rel="icon" type="favicon" href="../vista/img/favicon.ico">
		<title>TraderSMR - Compras e intercambios</title>
	</head>

	<body>				
		<header>
			<div class="wrapper">
			<div class="navbar">
			<div class="logo">
				<a href="#"> <img src="img/logo.png"></a>
			</div>
			<div class="nav_right">
				<ul>
					<ul class="opcionmenu">
					<li><a class="active" href="#">INICIO</a></li>
					<li><a href="#">OFERTAS</a></li>
					<li><a href="./pages/admin.php">VENDER</a></li>
					<li><a href="./pages/categorias.php">CATEGORIAS</a></li>
					<li><a href="#">TODO</a></li>
					</ul>
					
					<li class="nr_li">
						<i class="fa fa-search"></i>
					</li>
					
					<li class="nr_li dd_main">
						<img src="img/profileimg.png" id="profile-img" alt="profile_img">
						
						<div class="dd_menu">
							<div class="dd_left">
								<ul>
									<li><i class="fa fa-user"></i></li>
									<li><i class="fa fa-th-large"></i></li>
									<li><i  class="fa fa-pen"></i></li>
									<li><i class="fa fa-heart"></i></li>
									<li><i class="fa fa-store"></i></li>
									<li><i class="fas fa-envelope-open-text"></i></li>
									<li><i class="fa fa-question"></i></li>
									<li><i class="fas fa-cog"></i></li>
									<li><i class="fas fa-sign-out-alt"></i></li>
								</ul>
							</div>
							<div class="dd_right">
								<ul>
									<li><?php echo $_SESSION['NOMBRE_USUARIO']?></li>
									<li><a href="./pages/admin.php">Plataforma</a></li>
									<li><a href="./pages/modificar.php">Ver perfil</a></li>
									<li><a href="">Mis favoritos</a></li>
									<li><a href="">Mis compras</a></li>
									<li><a href="">Mis mensajes</a></li>
									<li><a href="">Ayuda</a></li>
									<li><a href="">Configuración</a></li>
									<li><a href="../controlador/action/act_logout.php">Cerrar sesión</a></li>
								</ul>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
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
					<img src="./img/cartsvg.png"  alt="cart">
				</div>
			</div>
		</section>

		<!--Contenido de categorias-->

		<section class="categorias2">
			<div class="container">

    		<h1 class="heading">CATEGORIAS MÁS BUSCADAS</h1>

		    <div class="box-container">

		        <div class="box">
			    <img src="https://img.icons8.com/ios-filled/100/000000/jewelry.png"/>
		            <h3>JOYAS</h3>
		            <a href="./pages/categorias/joyas.html" class="btn">Ver más</a>
		        </div>

		        <div class="box">
		            <img src="https://img.icons8.com/ios-filled/100/null/sneakers.png"/>
		            <h3>ZAPATOS</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>

		        <div class="box">
		            <img src="https://img.icons8.com/glyph-neue/100/null/user-female.png"/>
		            <h3>DAMAS</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>

		        <div class="box">
		            <img src="https://img.icons8.com/ios-filled/100/null/user-male--v1.png"/>
		            <h3>CABALLEROS</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>

		        <div class="box">
		            <img src="https://img.icons8.com/ios-filled/100/null/baby-feet.png"/>
		            <h3>BEBÉS</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>

		        <div class="box">
		            <img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/100/null/external-bikini-summer-vitaliy-gorbachev-fill-vitaly-gorbachev.png"/>
		            <h3>BIKINIS</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>
			    <div class="box">
		            <img src="https://img.icons8.com/ios-filled/100/null/imac.png"/>
		            <h3>TECNOLOGIA</h3>
		            <a href="./pages/categorias/tecnologia.html" class="btn">Ver más</a>
		        </div>
			    <div class="box">
		            <img src="https://img.icons8.com/ios-filled/100/null/bed.png"/>
		            <h3>HOGAR</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>
			    <div class="box">
		            <img src="https://img.icons8.com/ios-filled/100/null/clean-hands.png"/>
		            <h3>ASEO</h3>
		            <a href="#" class="btn">Ver más</a>
		        </div>
			   <div class="box">
		            <img src="https://img.icons8.com/glyph-neue/64/null/car.png"/>
		            <h3>VEHICULOS</h3>
		            <a href="#" class="btn">Ver más</a>
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
			<button class="pre-btn"><img src="./img/arrow.png" alt=""></button>
        	<button class="nxt-btn"><img src="./img/arrow.png" alt=""></button>
			<div class="product-container">
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="https://lh3.googleusercontent.com/IUAjCLzEKyqetjJtjHZAPQbPN1hzk91HRrn36X2LzIfBFBrhR3jWxIc0UOWi2CN2TbKy_AQft4ryZflL_UmTkwiYMXLE6SVMrs_2GAeU5RSDHKKp-0uYRIaakmwSkGD21dY-b7OTSMTSKiFpJF1-IiC2D3ReBKHdcxopCwVwhY8_immlFksr6Y8f8l61-6APnoA5YRdV2W47Ctie73Ba79_BAWb5Zw0W8TioPH1UAHGHbvgmuKOy5yf4QT6pmhw7l-nsgMKDRf6SS0fIg7HlhB7F2sM8JLdoQl8KqbPqWvU8C9FUCJGHxz3cqQFsKEJJr9Xsr5Ml8vFfG1bGVlygU0zV29zoR-RMdkgFNgKUgkNjUJmZjBaheS5UPnRo_OzMuQ4XFy7qnnB25BSqYr5c8V7cVB3F8DAQ0aruCvgKfdn0g4KF9VJbUDZSK5IKjfB2KO8jHdgVROzx4YLGhO0vlTGguUpg2LF04FQIrtltZtYfrkXhwtetsb4ybhkes2EzJNiKGCq7lssWwDXzOQE-3kUkqK4Rkq3N8CP2FeAuEhCiVgnV6ZSeHG6kisRdbvQyjSInN3HOl09RmnEx2VcV3f30EDof0U2asjGdDmr301W3hR_bh3lZ2_AR6mzZ_MwM7d59vhb2-147SDWTci9LKkjRcc4KlH-1ZweoKiEBEzTgtIIbl9LU2hi0v2t_ImTrqvbjwy77h5tEMIkBCgFfQizlB2nkMu6LAw0AuQYSbZpRkJjGAZb6MFocxhCkD7FqB_htIIhd9VnPyHSWbE_-7C6VhIkYLd5vzILHi1XRDYmkfGd0H-Stast_8JoMMkNEFjdDP-bYUDCsBYR1NW1zhydWHFtVpmWHCNEI6fQjgQ7XOJYEoa5wI9QlWRT2p6ULxTllnsco5LBb0gTbtlXI_q0ksCVhKrNQsD4nj22AVYhoaQZ0NFNeSxf0Xbt3bXXq-IE9jcqia1BHovcXoKRyK8ii-5db_D86_k_8ev_Ik5I3_Q-VZ4ZR7P51kyUkQDyCc_jLOWdE4nkE-NeBS1kzPvyfxEj7PBR0W19202kG3ixERuhOzciLZdhJl-0kvHx3lA=w524-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/JzmJyZjn8mABd71kdf9fu8ODzkSWCFmH8RtGEGg6dk6Tw6qgDboz18F9pGlTplpHtBD9KAilvfpbT8n3Di930yMqpKXjGeP13DUw2K4VqQGr5csfwg71tHvq7HDTqWFfydCWbmmPstghnyPxN7FajDHrWqU-IRJ3McjTl_vA5Y4HQ48_-qNQp5VjKoyXuv9aSzKM7GrZnUafp-bhQK-swZSRKRuBPFYHS4Vkj1ddePux3k-6hpXt3jO53dIs8CfBeM0m38MCl4DUPQfPMh7lOWyJOLhauS2ZZ9B89nUwaQc8PDLSOCWeN5Du8pMDlTEggQxAj-MzfL_AXyB4HJHfiBPgEeUmtA6dVrO6yVMaoz6yhjrj6kbFCyiamn-ndoJio-YOSnoEbTdvwtl8V83bCp8pw-bXUqKMqK1SVDlDacQ6CJLJ3Pv2L0olfl6Ec5V1UhwKAGrRltJghyt2SDwnm_ubgzOgneACjSZD7CmDmLdQ6Dgyn7Ujtyc6UOpAkhrv7oZy8xf8lVTybhouove6sQeYXpVR0_5J2_KYt9ksllDobieJ_CQrVaaHZE00uXnVcJC9nziLE_g5o9GO4Lw10VNO62wtMCaenIr9AvI4SDazlxQp2pbAM6S4BnAxQMBylNO8yHgi0NuuNTN5fYMuisKYHEUyB2DguOEMF4zU082zUISLils3pnYfeqcHySirV3CPj8DvS1-Or__cQqY3CPJn3lT2iiUQENMM4TItCVD85h3i36j6jl6Aj29s8tUTICAQwWN0sdnKVldwc_3sibw0anvXmB9gv40gcSGj-9yTJsVWmySwsXUA90j5RaTMrKZ1jTueLf2xMRjBNe4oiu1PrwfvYpXu8VwO5yKQfI6RH2ZE_nXcghg7DZi1_Vt930vNGaABGotbCeKPwxd12RXCoKmfX_IVQacUongnHfCVSGkZWzy9BF0ltfja4ixOlhd83LzQfI82xgyBs3W_YcQG5BesnKc-qoLweHnWp6n4Dwq4mQhMai26b4Sofz814NUCp0e_t4xAi24IjLp8apcgJ8krtRX8M2YQnAvc3VLZ5Ba6LiyZ-5ycKEeZ2gtDvw=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/NtzQTZFlx_p-3m9ht7gAHznTV6oM49QMf5FUKGViVZdzg_Uch7GFThNWKXJULzxM5vj8ghh4AAL3HqAcj3wmxgm8mPYO71WHhkp8UeIFu5BcZRcQlElIoXWNmALWNLWSy62ly_7z1JflssHafA8VEIUc3CGTJowze4J_X6-YZTFhVzLG2GC8gb5aT3M0g0plYYayC2o_j_4-Q3q2aFsqXApSe8fXKq_OdaIjM-V2yVPZ7deQppJjtsTzDqW-8Ui2HWgwAHvCtl3Bppwsxrk6Y-731wwhG-1gYaYHLzDHmuhR75zcdyp2EP0MSyi-YXE0CYQOmY1XjcbWhRp042-dfpEUNcJVUpgeneS-bg2rjgK4Gagvgee9ObjddawRiykKq-am7bSOB3V5ckbBQkphwah5hI1cGa2pGCZpW_aeNT0-r-yn5o1aOvZQVQwtzhqXWHv0kjrfPgitoiohA2QH9uCHzmNi1Hd30au0OPqxi7z78TNHnXYGh9ks_5o_ckgEvg7OqCftmxL8yKwc-pB7HufQcn915Bm6N3cIbxSoege8jVWC_qgjlCKLd1rXSLF6WaZIB2zO4QHMhL4hc8SIX3BDHGqNxzSSjkm-9a-3KpTC_c6_423hqX1XIjbOjOufhAXX6v1hvc-oFbbrio2uhUb7Q9J5rsGhDy_XwyjfxMoP4iqhOkV1AaxkJELrwfL5JjM_zRv4ti1e4PsC_6YqQAlA263yjifZqHwOWR_d9C6zyhvF4YoUUAfGIPBzJqfjOgItkFU36_vXc1sQgEBZ-0MtEWJLNuN0osPuekQ3XvAGWL5TUQke6mSu2C2iPEwBMIIU7jOvuk55na1-edgZ1kUb8kSTI4P22Jt37meQQyJFLthor5ARa4ml9UDLZey35X_ipcSrKZAGkFOuskeQBVzPtdlKhylY9n_em63lxdJi-Uwz3-8CtbOH03BD-h-hYN4GT0irhilWHdrvoMSEt5VGBVA0wtlp50DpDDzpoCG8bkrm1PCUI8rL8uTjND0RxkVUzbF7E-oAOrSOlmFOK0DhVyf0RUqQZxP9LEKQtSy0PUi7yRHezrcQYrG94ss9nQ=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/p5CeLCM2Zz6eN2pG3xfKldTjDwyG3llz3UAzN_e1n2uwGQEKhyn_I1bu-0EuI8AHjl1SDwys02doYB0-RB_Z1Us59AaUYePKJss8tgtIUkpy29MhKJxgI5kdkOsG7RQJW3PcPq55X-d4ATVd11XphyLhyKURz5Lv-Qxam3MmIKTwO3AD4IKjcpkPLT_p-QUAK60WwlLGsO9wjPqdh0q-Q3zka2pyrp4oiuj3MXiJpAAQcDYbTA8e2UaralpVElMunSACRkcvGm6eZ-qxY1_HEXQNQY2UnDpkg-88SkR4sp_IRc27Jb7YJ1bteopfb2OT9LlcknjIsEb-Ybdro8Xyd1LZYvszzY1RaslHFBqymoTS0eOBa8ix61uQNtpXExpu9ac2PsdfcjsnziFBeacsfWsc5zYDVWKTMI1Y-mZXdFTw9_iuGI7DQAiUISpF9qKx4TwtwyqwvDZuwJjjizJk1FU8PcxJtZ-5hjoQXPzYK9LSLtfn4_5RDyoQxY1jLV-y5GhXJ_gf0jA8yY57JQyzIx10Ji9W6iyMckrtbSESZfkbw5TnutRlRsKhvsZdIFyh55thK0B48QOt8jpfb5_t6LyOwG1NLvJPoXGO6E53-C0ZHZG-Ymo6MjPpuo31awO1LAUlYOrP2yCTk63eYJl7Sl7glj02jiTIV6qAZXTz0qByrGBTw9ZeINS_OilFHXpvEpxKeJNsUXtxXotV-9P-Pb8y_3zKoMnw0dmaidULj314Nt-_4lS_5cGVkcChSv6W2SrXp2E2BZ5DiIXHfcEFUUmtRHWvteD8_oeUKeygihZzpE_VwRLRNU5ZOYq3prA3yFBXanB-g2hiTAkMHuTTzVajTf2PkGOllbv1jd0odlKqgs0tTRclvPGxoyv0oOrdR86ceo44u9fP1sDVJvdqbkLKLR5uZCkIvpjMtFvmAPzAkGOE-tyvPMC6AwiQ6dLC8JlSZAJar92D3OBa-dlgWFgW-7kd_074f8v7zelectoNKXh8764FlGlnQ_e_tqP64nOy6AN9isUJWnkF0SYUxv7Lra3xXMw8xDr2IuUtwfkUNge8Z1DxkqBcEpFEZSVyxA=w529-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/gfGWpK0sszMIzHkPX2fnQKk2Y7pfEZwDnwGmTap-EJR1gnBt4ze6zMS3_-LyZ9Fio1VYMahGYzou_2YNxZ3la0ioznjnD1dwrMY4o8JUG9zXuFAguW20nfDcFWxZhzQsWPIf2lhBfEumJjHeOsGXpRqeRQhJS3YYAZC0p14RfXK28BSzJ4MKQPLJQYeVWVFH1LZxtufqS_a17D5lhnggK7q4QK-R4WDGPlFAokzMnOe3lNbz918pVqsya6jM4cPS0LN18UpJKizTQ7E83VEHDDePOrMr6ZwyMwWWzUMxcWNM52JJ5U7fLoKtZccqkTVmVrQRp499JjbWvChWA_w0scmBWSY3uCrLgMcWTFDGc4x62yo6Ggalcy5_sH4ZqB1ke72NqoA2n3nCr3EXHUkAvn-Zxz9LI4yX8PxuOtt7bH4FDfbSGJFb_VI9xOw8umT3yYuPKmg6YaEM6K4t_wHZEoMik_ihAHGF1KTwmXa8GQBEuCZ_AgMhSaKoEq9YuDQrb8iqxKmxakZS4WXPSy9CpIWResxnDbrmpkIbpWoiiB3fKozMd3Y58hs-1KnJ_Y_U1H6TfeSlyZWDtHAPoz1Nyz_88bUzRzjArZmn_tVmqUxPQ5SoasNDa-ZWtkWmHc2as_3vD1xpumsynMpmJkHJqhw_3BPurF9W908uxJYilUwRNqCvM7-6TyIhc5-HG2puEIYrgofIAsh3wjL8yQoljhJh2vJw7KNHRSCybv6DxagGhA7ASSMoGsKV5ojwIUDSfcJ7-l58ETWvYKfpYJnGVggF_66cP1nKERB47pzn0rsuVJogDdhqWcJ6mRIL-K7NeA7wpAVpVjT437HSXLiNQkhy4yx2z79eDiB6TIXToQVM7nM_RVyFvlZtaR1QadUy-xZmXqSh0w4Fm7g2TtveKk-d1DKZOLmZKKR-l9vlaDdtceNhaoiBNSVAZ4sLEMsw7pbXfovYbeBLhIH2l8l4UUsHMEVu8D3SQroRnWXhNQid4pxSu3I3PqxaaXZ5nO0d_V4BCG0trijvO36f1XSLmujtdwv_FPw18YVUSoWt9C2qlqmj6xbEuIp_zKrMpWsFDg=w558-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/kjpAzZJMGNPKV8Frv10KrIkCnCydZ_7wYH_2jIMk5MQeXNKktoF7yTPm6nY51TyAeSL4VubwAVFChpryhjNIaRfvhWx0o_25DB8mpSyp22slbvMDaZXINaCxkpeCj7_FvcGEMR0RzfT4c_5svZ0Io82vG1CNyrydQZ4Kv9lbWEWgDNxHuVYq0Pju2TBeqo1xDaqldNbIcxSMUhQ3nQEiIkALPVxMLWVqhWPjwswu9KyQEJmUxk9k7Cu4Zmxx7d-XfGAaF68TKbJWJKjVNiUJIhOqHu7-4foymxz5_3ZirKh1WSJngeAI3wQjd62mQbP0IsVhdbEhsNQO3CS7vzTmO_EoieWlct8nOhdq7GerH80V0RnhMiEOT3zIFwlfpGgd2ufgBcwYF7PwIMwr_LnOQiGvxtx27y5iSQXexjth97wl-xeXxYjPviTIPgp6yszsrYk3rlowALSz0rrDkqbLd0op_aB3Xa3fBWmiHWj48Dv7-hHYyIaVsZj6n4gvwLWMX2vQxAmcnEKdHW1Up3Hr9LUz2qQpkA82CcApl5h15tVIX6LfVAX71A-TRwFTTCtKVev5fJCfPCzw4C8_B-MSZjW1SvTn27syW8gujoRyTDpqxb2LkZwd4Lkx9I7AMgvqUB1Ld2-QcH5dMUFn1coxyL6HkQV2kiDg4dUMrABwFPgA5wgMlp914ZarmYhO4V9bCDxPySMmeFERHPBTYaH7YD9AIhz3bleNp-c9ZPs1OejWqkNbxBL7zAfbFcv46GQLaUOvrCcijF7UCx2j4msQNXEANirhfWjVzYyVVz8d5MPSFqlXwlxx_2Y3pUUmp94sDcwNcwzjj8bVDOdhVJUR52vtAJ0URlJ-8_8Slmk0zv3PWvq44lhNmKAC_zDNePTpu8zGfH0rwWxbo4hFBKzOdvZwPq_evnYWymJHB9pNfnG4-8lT5ctuikhF-_TIJD8SDiFk0W-Np1rpL2wMqOVrUuagpPLibZNDdZN0KsJlnYh-OP5IDRfxcqa-TJroZqU9rFYUk22V7XUJRB0T0lUh9Ow82Q08xLoqW22YAnXHYNIZ00n5KqFpDOxikdEluJ4aSg=w462-h698-s-no?authuser=0" class="product-thumb" alt="">
	                    <button class="card-btn">Añadir a carrito</button>
	                </div>
	                <div class="product-info">
	                    <h2 class="product-brand">radio</h2>
	                    <p class="product-short-description"> PRECIO </p>
	                    <span class="price">$20</span><span class="actual-price">$40</span>
	                </div>
	            </div>
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag"><ion-icon name="star"></ion-icon></span>
	                    <img src="https://lh3.googleusercontent.com/k0ANewhMjTzSBg0V2JqFzIOnAqMulSVcqSrjnN8cIDC31tobrrOKEGPXrhSlBXWwoe02MM22XxhLX80So0InRIgqxegpvjYiDR_eP02EXQs-cFgkvsUFJ4LByxH_TmlUdWXu-qQYrIX4Zbi_piGexvmEukEEN7wzW-ygWg_ow5FujEzGt6yDyJyyBQ7yDEXhBDXBrC_6YlNIbX9sOHFyL5I0PCDmMp7aakdKkyE5n7r25qKBUdFXISiKLOiwV2BLRRqjA5Xzj6U35qf4XlEqEN-iuAlPgXFoVgOrQhQcCc5868SQrCsHaHYvzDi7JYfvYFg4aL26v8I1L_C6K0hBI8aiDKqTb5PQqHMC8QQ_sNGoGlI8RLip_ZJuvbRlZf_DqFFpxq3u2e6Ir7G4AuoHAbW29C_cCQ-r_nqcIO_9l2uYhnb8fquF8Tzb4l2Wa_wZjzIGTizG-xMbERPcRdPDraFa0VKHr4GOMJ0ehCPUS0eswBJcGMax5hchGwDFy002KpqOfAGc07uiPT36ktL3mQjXs1L2SSbqoSVqJyo2z-rGfoVgOQP_8H6ruYI_gY-OHqNpZGkWAxvxnIxqio6fw8Zrt1lrXEi8pbner2XsE2NnqlkrpK2egyrvkXgNFp0PRNorfX-ab59evJhGGMDCiyMA45GsbbU7yNkAzk8JhAeRG1N8ZvHi3dpMJjCJYP5tGkvQN49SK3EigGFI3VDrlq8XmdhWZJlKEmepGH92cpLFDXCfXYQ6XfoclGoq0cfy87oHSlIDq_iRHQCQekLGKKTlaVF6vRP1ZxmOjJUOA2-LKbSaU6JocS0G7JF38lCZRcQJIjhcGqnz8iZ3hkc7PdOCB1sFXPdVoBk4m0z2MmUgsAFerxJITF4tLy6RUQWpaXT8gSZmT-WIZ7IAzjFbnmk0LuSNJAgdlwQaYVP8GR3nA5PHfzq9uv-C4X7Ds2yMur6LXtiy3yblxZPgwN5eACe27sErO74XD2nmQbCMnDpt_VsrJVlD0S4enwDrD-RBzwudEpAg6GMdIhZLb1IqZqISkSVJ1ELmD_vOAy-LYlnP6ixMht4OGCvQicUlxTIV4A=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/AqzoEPmj3aUop4qNwsmybwvOiNqLL5ksX0H4QBujCbVxdtBnAJZBGDKYg8aIRI7ZBbSFiWvoL1spB-1qPSOvx4Z11VkTLdUjGedec-2LomEazI1nlDLrI1sL3qMDteUW95CGsO6d0V1LRFFyfBUiP7258-FdOBgycQYKjbF3RfFZ4V0FRv5tvogg7pQy_ekh13lAWxJHswTaLsiJiJ-yz8ki-wDXWEA887S0UAF_9g9IUCD8xdBR0eig4hxHU0WoDuWK0_aDKMp9al2ix8kQsqiY2f-P67taN7oxZuBqr0mLWfbf3tfAnA-nz1by_CNGF9MRIp1zR72d5o47TNyYxYJXVXM6H2xRq5d02Hztjxbk3In04LtHQpF18AfhuwRN4QZ2GUEGhHKD5glcnbeRhA8JqGiaPe_CL9ybtpm_JNv9StTVAmkI4bN67XDPq3CVQb5rLP2gfZXpGnwDpFno5XYQDgEAMGwaYgp_NuwSv5nRmpYOczzIqdmdRN_jJGTP67EQ9wH0mKkZUHo9d9FnNSHbP5UBKBBGjDyeezulHPjFGwQt6oiJMSSjklnh5FuYM02lt32QVxP2VZpulu4VqUobXP1FqDpejOrr8MtbiteFgcPFZvdUN5MTSsrKx1J2o_6Pq1OnWAT-rrvYkmYgEfwBFcGjf-g9Ex1lCm_MO4UovU52cNtpYxLs2xmxrSrTPUSc7NOWlr0a82DylIxVM_gsGpsxW3DkQaL1xe7vwtCCage2y78xK2XEagSekL9FFkA76rkuNtto-6rrOSMlTAOOjDEhvH3S7SiIwIvVXQxRUxTpiecP7fz-VH_nmdV91OKs4v4PT81MOoXje2LgmRlEk0iOZ8qDhdcovtQ4flX6vtqQV1_8xtbk6RkV5S6vSmRg88xjgT55yY9E7W3n33NUzOEkMeuJ7l_y4fWuHwP2u6ZlGSMDeHb0pIKktoTgHUuQPbD-DV8I6SmzQArHZ9HvZFlODD13xl1zilzcNhJmdfMgMXxTAQfrVvPKUGtre2maz6fYu8dmgtNHqtrlnwONUP_NKji3zPpkzJJCzr8e5pGlrDrD8z3lJzBoPBiZJg=w558-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/z5yF8g7rMMpnV03foVvDcUJ0aeX9PTHoFsckYeNRscx0FPHBih17xEWNgIOEHrhhyL0d-KPYd8rqpx8fZ2rRp0hISVcJ4oFdGMCAZ93yGmugDSVzeZvNsHVPcUij65gsOY0rYC6ICqL1VkfS_MQG0rCH0pVrKq3zVI3VdId36IhCZPvM-WZknrU9QbVRrj-BILhUxQbRyTUHa4O_BH7q2yl0YyWa1CnwTCCxRaHLaOsEu2VMnaG-7UhlNcAO6X88c0NebviHy25MBRkPIEtSuzA_PfE_uHoPLaxSEtimEbth_sqDEETDlAT37kwiX77bHeyulweGjFC-K8b91uUSRCPofqSvxhY34X3CxDkW7TCE7jWQ-VAHKvSIn9Fq_usILi75A2OQ63-HOmwNt4A998C4wnJLG-oR3v7lA3boIpD9Mk138ANsrdbUvSRsVMPBGVtDA2HUYJNww9undPC4DYcXQZIsAvxXIHFSXyec_ZfWUGHhMxllpeg6mp9KAGvn5m3qkE3GKy9PbdqeseIs_GIqfYdANW4p5AzbJECLx34BggMtmBE9pMOtsYqZDVNjmJ7OBqOnSG3uT6yNhdP3RcynUuhf99WwBYOiPBPyk5AWJWchknIRjaKisRIIH8KEBxTfYi_fuAmD7sIVbwHKv26QsOJv7ztVph73JKmllHfjzh39pWOqW6ZJp60nFZkXHVHoz4OE74rGbChwcQ6sY3nyB6ouZJWbMqrZCdL-bLPWTQ7zU1SAh77ZOvfEY4Z8DwhVoBCh1XrKbiCr8gE-BDhgNhAcieXrj4qmE8w9sG5cImSYwaYFSSfDD1QJxfu7brN1-5PulZoqzAjVBwYwnnfYW2RPL0JnvOd8Lcx5aYeXhqT6gPQe6lwIcFA0_-yReQOiZVmTQqhrDd6OJNsnA4JGDrjlpmf_5D4-lOxIhhNEM_gByZif9yTRwUFr4RTfyJ0bXUAlHZyJ7Nc611-dUApiMhc94BYwJMAMfZFiWbLT0tfbejqEcSXvMtqcRci7Kr5Seb3OJOU6_i1TYHNdJQBH4iwVfBgL8I5eFEWyNMTdZw_dD3F-gYWDR7nT2qHdwg=w524-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/BY2fjb848t20uSzFD1omdeHU-OvUA2cFb8TZtfdrluigu7_q0HW-hVOL0V787MvQ41fZ4bWerljvOQCQvi6NKFpsr0gEobrfL2U_dQTMyAh_kltdjavkV-giF2Mt-KRcM2gP9-jaFYJmRMOLcy_Ya5WIYjhEOKUj22DcY4lg0-7iPK11dN7xx5J8vqcdZmFwsXivo-eZqG4guryV8AEZKYqafbzEc6gtGHs7yO3-Oe3R9q4z-KC1hpgMZh1Z4XY1Bvbbf1ZzNL3JhRYgVormlvLPQLKoPjnAXawjpjm_PkLTd9N9GOzGtxVFY3SfBmBLm5QWUGzuK3U9EQ89NC3tUqV8J7kRlvrVEVzN-F-VOvDLWebIZ2C9vX59DrFruxfeoQ0NLUUKXbT5lOsBCJC0zAABYnyaLAR_5BVxUBuKNqaaSfg9a9x9KEr2zq3ZrWiVu1oM6l1qRyltvNsPuUMkj9eia0pG29YulMjfapELfZ_dXprzhfly4Qy1eGcV4jg4TEBcbm-Oi3vjWBklnrUJy9KKsr9yjoAwGTPhjqHzgFqxPMSNNrez0IvvIZtrYddcfG_xx2nSWK-W7gNlWvuOI4a5MnhuEnLSx3bUtgHrE2Is3yOf5vgU1t6lFnyqaLXTQf6VGRTQMaWxF9ft1KQfeH80CnLl4GCbYFmyhPElq63vvkHR7fHrJkXsGnimSGswG8S3hZm_CI__BxBF2R7uzddFUCkPy9jv4PYw2GYboaRAjQa1gZGc-UX3AntPxDYn-K84YnOADs1IeL2-17OQ6C9PNbJ5NloYFGKuLAsXLMX2pUqwYU6pe6XGSEC8dNA3jJXMha0rqRvZ16Rem_N-qJ9ON6G8aWHMnoIn2yeDtaaMSurIat7RR2Xg_8DJu6SiXAopUpRWCkp_Jr7Z82Gqm08CLB3lzAxd6e0IsNwSbm9M_D99yUzJm1GNdvQfiSUpPIA6KOGLVdqz-8iNoQesXFtgQmjCeie5wpkROsWPNSscL53Aij7geZzCogX6fegKIVVlNHARBCRU37064qK-vdvJb7rORAR3tfbZNG4ZTKNBinOJ4fQ1_iD65xEtFTrppA=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
			<div class="contedorr">
				<div class="titulor">
					<h1>Ofertas de verano!</h1>
				</div>
			</div>
		</section>

		<section class="carruselslider2">
			<button class="pre-btn"><img src="./img/arrow.png" alt=""></button>
        	<button class="nxt-btn"><img src="./img/arrow.png" alt=""></button>
			<div class="product-container">
	            <div class="product-card">
	                <div class="product-image">
	                    <span class="discount-tag">30% off</span>
	                    <img src="https://lh3.googleusercontent.com/Tg2dyLOLwEzCMUkWnnJXLx8s-N1ldLzK_XKo-oRa6jPEnDqD9HqwupLKkHmzJ2d8iwDtNlUd33EY__vBlKZPq6zTBqrn34pOEhn4jBPR8Imb1l-ysyAlA7Lf7JjnTZ8m3VCS803LxSR9wZPGk7IX7Lo6G1NNgKpgxICBv5VG2CBZg0TZ23U92sr6sRcKaWhd1KTrvAvXGJ9ZrAIVC5dlEXbDFDwmi14hQahCbeN6eCvUn4k7LiqAxtheCOmcGnzFF0EN99TPsHA53KEmQSBQ4tX6UTj35t4otueXBb0GvPjylOMoRCldgSs5mZbFsm2wpElWrNDcKgum7yPfHmgWzePDglSh3LuHMFfe-PzAaknlXJF3IqRO1ThVvrGwTJ5nzgOEuFxNKNvGjhm5XeRmcbjcnZ2xILHW6Odnh3O8_bbZZO2EnUodLXZI0ME3393IbWvBb1NlVnsjtK0MRu6Ki0XsCrawj-u4PkNHb_vSiiV5FqkKqwwUCfL559E5irgC9ef9XzBeHi7HvVMHT-fIK7oTSJBjbwpzoY_u37KHgoR_lHxfsC6A0diHhRpTLzC1ouNedcAsKL1oEgzvv4ulZPg1u6i0RLlMjREmRYRXarHD2Y20ljcE9Lm_5FjC-VKjlly80e6dHMp9YiIuIdN22u6v2yu7qn0mHCJKXqUITqHNBQaJZY5rXfaGMWLeNL0GqSUgoZG2wSmglkpHr3tc5YI9y9VhNtR3JGO2Dl5lBwSZ3t592Z7l5kkaSpuroc6Iz2o-xDemm2tsnA16E6dwTEq4YtNydI8vbVLV9UumCr1yYJyUHSCYUq0x0Zfdftglv2SeW6U5HEx3ELJ7SYXGsEFL-41u_-JGALDnBH713C4GUt5EGtzJpUTAjlpucqIy3zkiUrX3zgMwbiaZJycioVIFC3pPNNpNMEkVw5W85t2OLBgetfd_L-S0QFC3q-Gy1wxxTlOzih9OHZRe1jdOodEAfDnnLiH4fwF00y9r2mrujQPNQL_FdGnzVGywfw2cup-V5V2BwcOBLRyziiVkm2PyPXaz87aC7iP3_W4BXImRMLETy7kYFmQIS_UP7M7I5Q=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <span class="discount-tag">25% off</span>
	                    <img src="https://lh3.googleusercontent.com/3WAT4ScSwQBuPgau9x1fPFfM-jeOMNrOsjlAX1MputEVAxX35evucd-bnak3RAbFkTG-frRKA4YAZMtgSpBXDtgGxujrnh1RJPMbjy0h2Oj_YgX0lumXJ3kboDC9eCRXuPx_mWilQG-bnwUQQCOvLlmNH1YsaMdXuxbY6V6k2xFlcn_hg0Cp6cvW7IhD67HbHulLpHzLwRuooFykfeNN3EmOgWWqOyJPlmZYdEcY7NJLjA2PXCnJZFk14jNr77kRJswhGyfvsfyYv5uE36WNGhTg3OuOEYaJbPAAfs-xaJCqcyuANAkoT1tbTPWkxSKRf6k4vrnKPaGdWATMX0b9Vh66CLUKMohgn-gXqazO0x6BpIkBY4R73WawvvhvsSXZEhaM71z-xK80kC_yjI4Bmy3Zur0qoGdfFlO7lIjGITt6rzx__0Apnz9aodxDWXTwTNDKodpCzFRWd2GygGt1sbNKkGBGggqgPrC5HQdmoJ997H8zcxZhN3HTLjVwTBNuweFId_YM7r2qWNWcV2wo2sSm2izBH6mwRDlCxD0XaxHxN-mHhdjgyWnMl-bk4VEFQtolAb2XK6Zf_1TqTsbrtRWgCrQooMRt3pF54uP-Sr_l7zV1CTbdH-flex8KxPELNjoD1DVCN4VdHx1YS8OMxpj-6-ZFLtZGmgYuEkpnZfu4Jjq5aDdKqaWkE7AJTJJCf63EJEw2SV7u7PYE9XeALKa1SCqWM6nnvV9S4Q8eIcDzOb-609gY8vaPq-tE-mFhLD6V1Zfs-lEmCttjgsKOSoLSaMw-OtQWyNFLu9UDLGDQhuspaHzOuMKOoXeers_F46gdBbR6NCiOHOTj6NZJb8fLJ6R7iDX8ror9HSXKXDbudFe6g6oekb-SdANP4K5iN6nQ2wpaWmLC0dtCf-_D1G74oskUI2hpPhmmFzooKnrTCpTNu2mrbn01esDB2rJyFDCbFcoMVrF0dCcH-ikto3xNL49LVZL5rlHTs_X6D8qNc5BMXIc9Qy2tI0zhXovSFqCv6qyb-vhA2gWf9I3jENP4Dpa-y36gZE3S8JB78vqEYcpQLNbQJGcBN5JIyzHZXQ=w524-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <span class="discount-tag">35% off</span>
	                    <img src="https://lh3.googleusercontent.com/DRvlB7YQQzMU7Eo9j6cJuWvsUrQ-P4eRcITdjbjeU6uKtQURhB5TVsRvGV7kFIRcNL9m-PKgzG5cgpe57jIXetSFmd-9oyFbgFpr53grhZsd7s74kwnCxqS0bd2d95gOGp0zuDmF0getKBqL74MZVF5Ds20Kjo0cgvfOAZSoPv2FR9ywR4PCENNXWlrOahLXiLN1lWUzIsiZF4VgYTWwmKXWWFElutTIM5wczFWt00MXrjFlOrsrYUZ0iJzZcV3P8W3U3wJBB_hUjHIOb5C9KA16TDOIfNee3ehedc1GfjgLRh5rb2lABnKW1MU8nk253_RgECkH6ZXK3VHOAHK9TQ7uPZSM8zPFgYBsz1IURlq1YJNKxyZb6DkRmTufkt-rDPQs6qK0NhOUrF_0Sk3oeZebROviOzs1aSK2AWUlfhxa0qTBjF9DxTjRZrU3MB7iC-CJF7mRenl8Oidb5LIcZuN2OPiR6cg-0TdzVxMXOL0P_88zuw2jdS_RuSZcr-lIQPKnWrpMva-1r41QHVar0g9VWvLtHcyGaEAcXukhAQHMR3Nkv92ICi7oB7VEwHJBHLGhoFxgCClojSF3-SdDgZ_vl0Nf4j9QaJ0ERC7ntdh2MA2Ej9GFSfmxiBLnDFhhPGZP22kg2pLeZIPFchhsN_pjaMKkT7vJOnE5IpGHNlcL-GRBmMot6NGqZaQq7mTrsYSGcb5JjdwaFthljjcCeIiaYD8jtOALNmuDvfYZNFH5Law15HyiikLbII-_qUD02cHE8bfAxWMS8hdafCAMNwaYWgLsYMMgzB_NP4oilQ67sRXqfd-FgsErLukAg6oOwNlqyIBGGBTmOtcFXM6VQJs-yDX4n6HcZCsNfEzw3aH5kjdXgAZcdQrOB4cM4oE15UNr6n1E4y8wPTud4JpP4kWm4MYujvDWj_V6N7MaWZlGr6ATP94_duugObf2akgSI5u-MKb6ltJfDIBQo8IBH20mZcyVTJ0u8FgOa9zYVzWgk1xKDBMepliKdjOHp-BlhZARz-wSv2RNt79VGYofDFWu63GcDRoLAVU5id37Bul-4bxOk5k1-iZ8GpOZPsCsMw=w524-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <span class="discount-tag">10% off</span>
	                    <img src="https://lh3.googleusercontent.com/QgN1wKeRXXvK4pefIZrW-Y4sqG8uNfWvp6Dw41PVM77m4nJqY_t8S47k6bHvfTD3nCraO--m3EiTozZiASINsE7Sbz5WwWL_ppNZrl_KooYYKPbMjRfRnsnM3-mDL7zVQ95U1IP6tgbsBrd-5JuP_oSlD1MZlsYS7hfRivusH0GMwdCJ7-HjKd_Ypdm9LmXftPeEaZVhYO4NeeNnc6PeGSyR5Fw295hhHYvs4R1PakWPXEMyhVU6tV4fJ78go9LTHLNxst9yFazjvfxyAkAACyEA-2DFEByWl3XFfB5grF8NOrqPd9QpJkqakX9KTKN4iVkNqGAbbYalJ6Mazy_wrfE5uLDNGl64_vlYELDR_egwbsVJ8ulpZhG5zImd0x3mk5a8Jw0APl-vLKc5YnhLHDE_vUmWGZWzPDb1nZgLOr3fDGfsHq93xMZ3eEkg4QAp1sNd9fRqATBzKNN3J0rq9rwqBYDpLOTy9BMzqbZCRLO6_kSgK6moBwjHphxXKddBRYd7GKvzvcaV2ydkYO88SFXXE8bEGsk3sloqDd39h7P4cUxV5Iofy2F8PhStl9Bsau47brfWNlhx5x5_sr793LsfjAFj5JddyVaSL8t6tTrwREGXpMvgvHPe2Ln6crMLndWd9oaKyCdZG9vIU5NSDxqR2mIB-Xsf5H42lBfcE5dsJRO9UwDMqIt3GPi_kqfTHOEThbcBeFgcXGqeE1VbFlGKNuUkBtKaPDxMVylQ7Szx7Ko0z7ToZ3IeXKTlWc8LzYxMeiGA7fwxPyeqr0GgpI0mkh9yCx_S9KFKArQPc8a2naBj4tu1DU92F4Y61Etvwxr_aPUVLjCUIAt5-oLP_9mVBf_llsYzqWqtZ_HKFbyjJDiXQ3p6kolp9FCsqLnp7MNGQ_50ZwyYQjjiykvpDhivcMpDExc-reYgCvtVkp5NXqdbu5CR5HimplpRiwLq8CG7rmZsutcTZTMvmNh1yBeUE5ZKKKIyZq0oTziL0wxNVJ6mFQpUOWdYHtvT4ScRKNuM-XpUTA6LXhlkyyQ4L1R7Gize8HXhjfhmhzMoYKnY3_XxTfseuvOw2su_jtG0UA=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <span class="discount-tag">40% off</span>
	                    <img src="https://lh3.googleusercontent.com/KL4l_WE4bXTPDqHC1t9Cb_hArCPyAl82vxaJAiB2PqB1q5-83uD6ZGz5JrqHads4HMLQ2_Yq1K-5RyBQiRy1K-N64RTlWvzNyaLzzJy2Q2kiqj0kWGODz2WqgYnaBp4iUHZBIByLLD5WqWGX59lADQOu1V1vsgxbdhR5DORu1aKqUPT4TX1zHwdtR4-NpS2Oh4pWWfdAIDQkbSev9ZM-UFVmPGN8OoqAqTS11R6xRMVjPIrOlR-X1PSe0huePrvDl7EobdW36HPRPa_mx8ctw206CF5lw_-IcHkaai55yUrJayh1UoAydYKEeGNS2U_iPTvge0uF-ux34qVDijOJ7DUantBHlE8il31Ep2DGbGyAINgvZ_fcG376ChSI5-iue2oNteMs3ZbGCAo3wIXjEq1bCYyWAJaaQC31q8Tuvh62my9o1raoskJLbcmUOOQHkh2tu5D-oewJ6xDpgFk3vjX_mHHEBwQTYxX1laW0-olKgEHEdng_K11ONWa6UERHyVrxScVpnxNXu9CzU55OkxS1tzY25lM2Qco1L2ZGZceo-hLWOwEPcvQV3QO8aEhGTkmlolu8efNlRF7xJTLToNJcC-bpqhmjd7p0fJKK9HZl7L-QYheU8qTj18G8RhBibGWyxq5nC1RQ6v4QZTk0yGD9v8C5dioET3tKuFPZb1WmwdT3kWlu3C59pqg4fHkx2PY0ED-_DfzJ0dogV1wY6kVSAnJOzvHDId1zGYwU8HixM3t7Vp5P4Euit0WrqOG1MDDfchNzp2IyVSb2Qkt10rv0OAUYY_siz27kT5td2LP-ZLBobqMoOs_1-LliY90Nwa7sjHHMDl2EWq62xrxr2gmheCakK0zS6GWDi9tBtcn4qKuWccnQLI19O8DlorRO1X9GCnWNYKefRVXypmhGS_G_JFdTb6btnfkLgdehZ0lMAuJfwBsvbMLTSexKPAevZBIucc16GdqT4_gS4zkW8vi8je44S6RIDOVN7rGDoYqFxdDC7D2tY9MpSELsR2c_ZaECqWDWZyhaRA5djl_VSwgHje9cu3MhiGAc25jaDe70tYrc5dymReLnNyblL8wj1g=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <span class="discount-tag">20% off</span>
	                    <img src="https://lh3.googleusercontent.com/yCxQInhrGV8B9RUWV_2Nts6S3MhyMjc017OG5eBERK2di5lHSgFeBwRkW1IouCckyBxvKuREo3qbpy7a6RC8CS0LB3ok_jckyZ_PiU1VrtkHujQ0hmQwG2LMDYT2t5Y_8SUhUTZZ813Ebsh4hVFElyrjpRjrMnHIzVo4nXQ_iFjBFga_fZDZ0UwiRm9AzWRG7_Eg1HT08soQKPs6aQQVyctBRPdAFR9hc-gUCUnMxvbiJOC4q1ITDILeMEYoxHI5tUbVNr7-43Qnb8YBbCjenCGt7rFGgX6PvJ9BqcOQ-h7DYGrpBfYAQjIT7Y4F6IYWUI1OWmDWs_Ct3mzpuhpxKUudKnf-BXOlxbb2_xQNzLw9Gr0U4LbwF-QtqjBff7jkvPEnuxB6zRxeXddayr4WNslzQH_Cx_MWeHDZ5fEDAcyAw6gywKIxHSb7rvf1i8CC-BbzBij5bFSymD-p_FCweIRuiQBA7vZkHoKU0wZWpTLd3FNBjlLPpkM0_llcBf-Y5eiG7IhKm0GgHu1HBGDWhY_F34c6LTtAtkaPrgHrkD7oDkQbYRkSqriSVB0rXw2XxeKflBcVV-LNu62RT47YVc0XUR8iOO5uoyNN1Hq_aIRLLTmHz-E26z354vGhbx2j32gg2c5bNns5pG_kTz_Gk1BN94k2shcMO0zjGe3FpSwDud67j6LhGhSJiVcIh_i1gfcC3PbHIU-hMDMMmw9rs2ctUZ0UIfDbGRApJyHjtU9jK5wUALfdtc14Gy-nQRH8vHzagYCPeUBOuw3rqPua0f-xn2zBqbo1jzJK_0wlCbQd8ImG8NfHIxDo7Q2crNy36_dzVRYVbtwyltDzJoWtdyIOm0xMJtwSQk_zSZXqO2_gKKWoVLcxeyoYqrGiqMMF-9gPMKXtqw7qUvyVsoi42H7oe3WZkWdcdbsCDy0SKIKqGJT3b8WL-cAkCsv9NfRBbFeLF6LbwhujUQ3XhATOLXwUNdikJfLaJEqwJIlMMNGD5fCVPoBwK1QmULidW1ChEQn0TEmBmKiuSRjjKGI4URxbpsjCz7wVn0y7ui4ZKtJLnjnANgnvEclHJgjgBwCtUg=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/k0ANewhMjTzSBg0V2JqFzIOnAqMulSVcqSrjnN8cIDC31tobrrOKEGPXrhSlBXWwoe02MM22XxhLX80So0InRIgqxegpvjYiDR_eP02EXQs-cFgkvsUFJ4LByxH_TmlUdWXu-qQYrIX4Zbi_piGexvmEukEEN7wzW-ygWg_ow5FujEzGt6yDyJyyBQ7yDEXhBDXBrC_6YlNIbX9sOHFyL5I0PCDmMp7aakdKkyE5n7r25qKBUdFXISiKLOiwV2BLRRqjA5Xzj6U35qf4XlEqEN-iuAlPgXFoVgOrQhQcCc5868SQrCsHaHYvzDi7JYfvYFg4aL26v8I1L_C6K0hBI8aiDKqTb5PQqHMC8QQ_sNGoGlI8RLip_ZJuvbRlZf_DqFFpxq3u2e6Ir7G4AuoHAbW29C_cCQ-r_nqcIO_9l2uYhnb8fquF8Tzb4l2Wa_wZjzIGTizG-xMbERPcRdPDraFa0VKHr4GOMJ0ehCPUS0eswBJcGMax5hchGwDFy002KpqOfAGc07uiPT36ktL3mQjXs1L2SSbqoSVqJyo2z-rGfoVgOQP_8H6ruYI_gY-OHqNpZGkWAxvxnIxqio6fw8Zrt1lrXEi8pbner2XsE2NnqlkrpK2egyrvkXgNFp0PRNorfX-ab59evJhGGMDCiyMA45GsbbU7yNkAzk8JhAeRG1N8ZvHi3dpMJjCJYP5tGkvQN49SK3EigGFI3VDrlq8XmdhWZJlKEmepGH92cpLFDXCfXYQ6XfoclGoq0cfy87oHSlIDq_iRHQCQekLGKKTlaVF6vRP1ZxmOjJUOA2-LKbSaU6JocS0G7JF38lCZRcQJIjhcGqnz8iZ3hkc7PdOCB1sFXPdVoBk4m0z2MmUgsAFerxJITF4tLy6RUQWpaXT8gSZmT-WIZ7IAzjFbnmk0LuSNJAgdlwQaYVP8GR3nA5PHfzq9uv-C4X7Ds2yMur6LXtiy3yblxZPgwN5eACe27sErO74XD2nmQbCMnDpt_VsrJVlD0S4enwDrD-RBzwudEpAg6GMdIhZLb1IqZqISkSVJ1ELmD_vOAy-LYlnP6ixMht4OGCvQicUlxTIV4A=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/AqzoEPmj3aUop4qNwsmybwvOiNqLL5ksX0H4QBujCbVxdtBnAJZBGDKYg8aIRI7ZBbSFiWvoL1spB-1qPSOvx4Z11VkTLdUjGedec-2LomEazI1nlDLrI1sL3qMDteUW95CGsO6d0V1LRFFyfBUiP7258-FdOBgycQYKjbF3RfFZ4V0FRv5tvogg7pQy_ekh13lAWxJHswTaLsiJiJ-yz8ki-wDXWEA887S0UAF_9g9IUCD8xdBR0eig4hxHU0WoDuWK0_aDKMp9al2ix8kQsqiY2f-P67taN7oxZuBqr0mLWfbf3tfAnA-nz1by_CNGF9MRIp1zR72d5o47TNyYxYJXVXM6H2xRq5d02Hztjxbk3In04LtHQpF18AfhuwRN4QZ2GUEGhHKD5glcnbeRhA8JqGiaPe_CL9ybtpm_JNv9StTVAmkI4bN67XDPq3CVQb5rLP2gfZXpGnwDpFno5XYQDgEAMGwaYgp_NuwSv5nRmpYOczzIqdmdRN_jJGTP67EQ9wH0mKkZUHo9d9FnNSHbP5UBKBBGjDyeezulHPjFGwQt6oiJMSSjklnh5FuYM02lt32QVxP2VZpulu4VqUobXP1FqDpejOrr8MtbiteFgcPFZvdUN5MTSsrKx1J2o_6Pq1OnWAT-rrvYkmYgEfwBFcGjf-g9Ex1lCm_MO4UovU52cNtpYxLs2xmxrSrTPUSc7NOWlr0a82DylIxVM_gsGpsxW3DkQaL1xe7vwtCCage2y78xK2XEagSekL9FFkA76rkuNtto-6rrOSMlTAOOjDEhvH3S7SiIwIvVXQxRUxTpiecP7fz-VH_nmdV91OKs4v4PT81MOoXje2LgmRlEk0iOZ8qDhdcovtQ4flX6vtqQV1_8xtbk6RkV5S6vSmRg88xjgT55yY9E7W3n33NUzOEkMeuJ7l_y4fWuHwP2u6ZlGSMDeHb0pIKktoTgHUuQPbD-DV8I6SmzQArHZ9HvZFlODD13xl1zilzcNhJmdfMgMXxTAQfrVvPKUGtre2maz6fYu8dmgtNHqtrlnwONUP_NKji3zPpkzJJCzr8e5pGlrDrD8z3lJzBoPBiZJg=w558-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <span class="discount-tag">60% off</span>
	                    <img src="https://lh3.googleusercontent.com/m0hiCgUd5c5mOMaICYW9pSDzSzB7Io4UxdfQlZ3oWid_WSw3h2Sa9khF7IR2-cZuvbkNMnYgOH_cUzBSvQZ05VxmE-98Am-Xk_oTJSWxVfzYkGlwEpwRVkgLtVDaEG5DhPDJvBUAqsBwZY-YB1Spwg7LPenqCra6a_AHWWYnC-mgULNIKsFHNf_p_vEXi04Q14PyNJfh-z1aNOnLaPUM395AoK1rxNiC5NyK57BeQJRWOwmY2vNL4Oh_nQReU4CipYbd0sXeFEM2nsCA01PllxXc0le4n0eFhuki6i5LHrZeXKna9pE8HJ3D5FwkqChrlWOSb4B5kWgfbs7yE9b_KJRh6H6lMXKiAMQP37qYa_PG9CZewLnyS5yDalFlcOuUPrhBcd9VrKu1H0iSkLnTLfj4ZGCBUlA-S2Hqbw09EiiNGBurr6mk5ARzpU3bZMohyi5BOUNWNnF-Xl5CL-X5_GGm68kFM0Y_UIwG4BYiS9QxkkqH2lAEeCs7ys8a1KWUEHkSC7zywCF13LLMoQsMFjbsRhze2gt9RNdBw8Q-snrRS2QB0tLXv6sbxUUQ8UPjhkbd3MpR_umfFkSd1VBH54JSpOfaEUeq1N3auuud-87V6NABdgZRy2C7jxeLY5CpVaU-0e0HudnVxMJiuj_VZfmtyvuJC5TQwzyeJXH8nxjR9ssxW1R9UxasWcqsU8xc-2CsR3qUgjJNb_ttM3ij5dMlYALJHZB9RT3iFF5xFNAREPzs-oq5OTyzvgsn4wviQZGcxf3HrYcR7O_Y1lelGrxNGwEuhb-xhUxE__quwnTv5f1CtrQrFjZ3ZSIAgTy71yM7mgQG5w3pP6d39lVgjfZtUUznmnNADZaNiBQdJ8Hc6JTU_ft1sljcOG89fE2AjzdTXYXlEz-LepmPoJrwxYx33njTXht8WGI1sl3gWFcMXGJF5B7xzsVzJiRNIqWUkoBD2baxwZdirsiepST2m-IilaG4snBSGHKxbnCfpISaADRkOO8y1Lcy99jgGrGBo-wtdbpSCaoADuEXVeQLxpHNZ3bTlTg0tQKFz36pPGwcP6cj6Yt8EWhaIvPSEWY5gA=w465-h698-s-no?authuser=0" class="product-thumb" alt="">
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
	                    <img src="https://lh3.googleusercontent.com/StqekxYDX47lncM_HUXCX11cRXfBwhplU68RgR5xQSMsI5qdegEgRXWz9K8h5gYkaKPhCNI9QALTUayvucQuGg-REIKszqG6-R4meUMtwno_RBZNCX_CWvNQ3dVrzRdTIpQupDXHsmP_fisUZKvFuJ9mQR9hQXx30ORFi7y7E2VobkTtkUNBeyCh99G7xfEaWwRJTbJr7nF-km9k5V6o0jmMVbNia7qd6aG-MAkGFQ1urWNJLmRYni1IV0-BUKFTBTgljmOS3tOq1EEpyUmeFRwTvBn8ksMtrjvdhifAKzYJBBA1jCIt9-kvlSTCRfSogS1jHHuMgyx5ViNBLxEPO4dDmHtaG8Iy3Ma-g6UPPsy_x_mJ_wwoiaodXEK5YRWBVxVY6_fBJHVB-oq_3rjGx865ZG2DeAp9TBIJWbGxW7GWtrlztinkcZwaUIwmunMDVtbyk99ByZ-UavpoyfP5SvFWPwQhOJ0wp-YTfKAoe80dURNWvCQneqsQ0fcHDjKXCeM_GBS6mrrFJGp2hZI49gCcbHE_285ZL4Lla_pIfYmIfd8nu-Rw1a1ZJczpTiFVRjWEqm_Nkt1y3pDDXAuqoesYedwMhsFIeZblDKjG_S-fdEloFv4DVrjDWGzs3My2HfXWI5S3U2nFQxhVfY1AbxKdL2cOgQ6QZN8rQb8AaVVdc-Dm0SgqXaEcoWxHnPxMqYbAWUdXs5KzGDItNmu-PVuXon9oHN3sc_UHpxB6847PqnNY5whG_P3Ie8VTSolBKoJhviXNoXZWvpCi76oBzfWWottuzlXxD6LScuPFT2MNkoMX_4BnroXlXigKsa3fdjow_mTf7q68ScJQ4fEpQBSoMglpzgQSw0g67BsQ6cfoCvC08xZYOjCXUDiC-fpNUCEztJfXR6w0cc8aWPi_izRxW5iOhWOLBPTKKdFryFiJ3MhMNbFoUqF6SmL4a-sdhklT6v1R05HfoD622e3tpbauvdrkKwDeZc24hhvwtgQelhogxDqalMEytO8yt0_xozr1Dv-KMzsUPLKbmHyywKEuh0BPx1zthu8uEBqLb1EVt-rzq6rwH4FfsYckw3tN6Q=w519-h698-s-no?authuser=0" class="product-thumb" alt="">
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
				<div class="sbox">
					<h2 class="box__titulo">Calidad y buen precio</h2>
					<div class="sub-box">
						<div class="calidad__img"></div>
						<p class="box__texto"> Contamos con la mejor calidad del mercado en nuestros productos, con precios <span>competitivos y asequibles.</span> </p>
					</div>
				</div>
				<div class="sbox">
					<h2 class="box__titulo">Paga seguro</h2>
					<div class="sub-box">
						<div class="seguridad__img"></div>
						<p class="box__texto">Paga seguro con algunos de nuestros patricinadores, <span>VISA, MASTERCARD, EFECTY.</span> </p>	
					</div>
				</div>
				<div class="sbox">
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