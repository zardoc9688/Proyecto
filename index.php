
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Itervelox</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="popup.js"></script>
    <script src="https://kit.fontawesome.com/cd33816f91.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>		
<link rel="stylesheet" type="text/css" href="mapa.css"/>
</head>

<body>
    <header class="header">
<div class="container ">
<nav class ="nav">
    <a href="index.html" class="Logo">
        <img src="./imagenes/Logo.jgp" alt="">
    </a>
  <h1>Itervelox</h1>
   <div class="hamburger-menu">
   <i class="fa fa-bars"></i>
   <i class="fa fa-times"></i>
    </div>
    <ul class="nav-list">
<li class="nav-item">
    <a href="index.php" class="nav-link">Inicio</a>
</li><li class="nav-item">
    <a href="About.html" class="nav-link">Sobre Nosotros</a>
</li><li class="nav-item">
    <a href="contact.php" class="nav-link">Contacto</a>
</li>


    </ul>
</nav>

</div>

    </header>
    <main>
     
           
           <div id="map"></div>

        
        </div>
        <section class="booking">
            <div class="container">
                <form action=""class="form">
                    <div class="input-group">
                        <label for="destination" class="input-label">Destino</label>
                        <input type="text" class="input" id="destination">
                     
                    </div>
                    <div class="input-group">
                        <label for="check-in" class="input-label">Fecha de llegada</label>
                        <input type="date" class="input" id="check-in">
                     
                    </div>
                    <div class="input-group">
                        <label for="check-out" class="input-label">Fecha de ida</label>
                        <input type="date" class="input" id="check-out">
                     
                    </div>
                    <div class="input-group">
                        <label for="adults" class="input-label">Adultos</label>
                        <select class="options" id="adults">
<option value="0">0</option>
<option value="0">1</option>
<option value="0">2</option>
<option value="0">3</option>
<option value="0">4</option>
                        </select>
                     
                    </div>
                    <div class="input-group">
                        <label for="children" class="input-label">Niños</label>
                        <select class="options" id="children">
<option value="0">0</option>
<option value="0">1</option>
<option value="0">2</option>
<option value="0">3</option>
<option value="0">4</option>
                        </select>
                     
                    </div>
                    <button class="boton_1">
                        Buscar
                    </button>

                </form>
            </div>
        </section>
        <section class="hotels">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">Explora</span>
                    <span class="sub-heading">nuestros hermosos hoteles</span>
                </h5>
                <div class="grid">
                    <div class="grid-item featured-hotels">
                        <img src="https://imagenes.weekendcolombia.co/73461cdfefd5c25e82d364c0d84-La%20Terraza%20Hotel%20Chicamocha%20(2).jpeg" alt=""class="hotel-image"> 
                    
                    <h5 class="hotel-name">Hotel chicamocha</h5>
                    <span class="hotel-price">Desde 199000 por noche</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                    </div>
                    <a href="#" class="boton_1">Reserva ahora
                       </i></span>
                    </a>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="https://images.e-tsw.com/_lib/vimages/Bucaramanga/Hotels/Hotel-Ciudad-Bonita/Gallery/Bucaramanga-Ciudad-Bon-Piscina-2.jpg" alt=""class="hotel-image"> 
                    
                    <h5 class="hotel-name">Hotel Ciudad Bonita</h5>
                    <span class="hotel-price">Desde 180000 por noche</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <a href="#" class="boton_1">Reserva ahora
                       </i></span>
                    </a>
                    </div>

                    <div class="grid-item featured-hotels">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/125332548.jpg?k=9cedc271f0fe68f9f4a4a3944e345eecacac776233623dc3727cd19e32f2b0af&o=&hp=1" alt=""class="hotel-image"> 
                    
                    <h5 class="hotel-name">Hotel Dann Cartlon</h5>
                    <span class="hotel-price">Desde 320000 por noche</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                    </div>
                    <a href="#" class="boton_1">Reserva ahora
                       </i></span>
                    </a>
                    </div>
                </div>
            </div>
            <section class="rooms">
                <div class ="container">
                    <h5 class="section-head">
                        <span class="heading">Lujosas</span>
            <span class="sub-heading">habitaciones asequibles</span>
                    </h5>
                    <div class="grid rooms-grid">
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image"src="https://s3.amazonaws.com/static-webstudio-accorhotels-usa-1.wp-ha.fastbooking.com/wp-content/uploads/sites/15/2019/11/18131859/Sofitel_Legend_santaclara_cartagena_accomodation_slide_03-min.jpg" alt="">
                                <h5 class="room-name">Sofitel Legend Santa Clara</h5>
                            </div>
                            <div class="room-info-wrap"> 
                                <span class="room-price">4595513<span class="per-nigth"> Por noche</span></span>
                            <p class="paragraph">Viva rodeado de lujo en su Suite y disfrute del art-de-vivre. Viaje con estilo con su propio chófer. Relájese, disfrute de una botella de champán, desayune en la cama… Sueñe todo el día con la ampliación de la hora de salida.</p>
                            <a href="#" class="btn rooms-btn">Reserva ahora &rarr;</a>
                            </div>
                         </div>
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image"src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2018/10/18/0616/Grand-Hyatt-Bogota-P093-Corner-Suite-Andes-View.jpg/Grand-Hyatt-Bogota-P093-Corner-Suite-Andes-View.16x9.jpg" alt="">
                                <h5 class="room-name">Grand Hyatt</h5>
                            </div>
                            <div class="room-info-wrap"> 
                                <span class="room-price">963554<span class="per-nigth"> Por noche</span></span>
                            <p class="paragraph">Relájese en este espacio de 41 metros cuadrados completo con dos camas dobles, un escritorio, dos lavamanos en el baño, así como una vista al jardín.</p>
                            <a href="#" class="rooms-btn">Reserva ahora &rarr;</a>
                            </div>
                           
                        </div>
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image"src="https://m.fourseasons.com/alt/img-opt/~70.1530.0,0000-122,7500-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/BIH/BIH_030_original.jpg" alt="">
                                <h5 class="room-name">Four Seasons</h5>
                            </div>
                            <div class="room-info-wrap"> 
                                <span class="room-price">2128506<span class="per-nigth"> Por noche</span></span>
                            <p class="paragraph">Nuestro icónico edificio de 1946, diseñado por el artista-arquitecto colombiano Santiago Medina Mejía, cuenta con algunas de las habitaciones más elegantes de la ciudad, techos con vigas, mobiliario de madera tallada a mano y acogedoras chimeneas. Además, no hay dos habitaciones que sean iguales. A pocos pasos del bullicioso distrito financiero y del paraíso gourmet de la Zona G, Casa Medina es un refugio urbano para viajeros con buen gusto.</p>
                            <a href="#" class="rooms-btn">Reserva ahora &rarr;</a>
                            </div>
                           
                        </div>
                        <div class="grid-item featured-rooms">
                            <div class="image-wrap">
                                <img class="room-image"src="https://static11.com-hotel.com/uploads/hotel/11573/photo/jw-marriott-hotel-bogota_15862458525.jpg" alt="">
                                <h5 class="room-name">JW Marriott Hotel</h5>
                            </div>
                            <div class="room-info-wrap"> 
                                <span class="room-price">1733726<span class="per-nigth"> Por noche</span></span>
                            <p class="paragraph">Sumérjase en el área culturalmente rica que rodea al Bogota Marriott Hotel. Ubicado cerca del aeropuerto, en la avenida 26 en el barrio El Salitre y algunos de los destinos más atractivos de la ciudad de Bogotá, como el centro comercial Gran Estación, el Parque Metropolitano Simón Bolívar y la Embajada de los Estados Unidos en Bogotá. Después de un día ajetreado, encuentre refugio en nuestras exclusivas habitaciones en Bogotá y estancias prolongadas ...</p>
                            <a href="#" class="rooms-btn">Reserva ahora &rarr;</a>
                            </div>
                    <section class="contact">
                    <div class="container">
                    <h5 class="section-head">
                            <span class="heading">Contactenos</span>
                                <span class="sub-heading">ponte en contacto con nosotros</span>
                                    </h5>
                                    <div class="contact-content">
                                        <div class="traveler-wrap">
                                            <img src="https://www.timhotels.in/images/sliders/revolution_slider/slider1/slide4/guy.png" alt="">
                    
                                        </div>
                    <form method="post" class="form contact-form">
                        <h1>---------------</h1>
                        <div class="input-group"> 
                            <input type="text" name="name" placeholder="Nombre completo" required>
                            <span class="bar"></span>
                        </div>
                        <div class="input-group"> 
                            <input type="email" name="email" placeholder="Email" required>
                            <span class="bar"></span>
                        </div> 
                        <div class="input-group"> 
                            <input type="text" name="elpepe" placeholder="Subject" required>
                            <span class="bar"></span>
                        </div> 
                        <div class="input-group"> 
                            <textarea  type="text" name="etesech" cols="30" rows="8" placeholder="Texto" required></textarea>                            
                            <span class="bar"></span>
                        </div> 
                        <input type="submit" name="register">
                        </form>
                
            </div>
   </div>
   <?php 
    include("registrar.php");
    ?>   
 </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
<div class="social-media-wrap">
<h4 class="footer-heading">Siguenos en nuestras redes</h4>
<div class="social-media">
    <a href="" class="sm-link"><i class="fab fa-twitter"></i></a>
    <a href="" class="sm-link"><i class="fab fa-facebook-square"></i></a>
    <a href="" class="sm-link"><i class="fab fa-instagram"></i></a>
    <a href="" class="sm-link"><i class="fab fa-pinterest"></i></a>

</div>
</div>
            </div>
        </div>
    </footer>
    <div class="pop-up">
        <div class="pop-up-wrap">
            <div class="pop-up-title">
                <h2>Ofertas</h2>
                <h2>Relampago</h2>
               
            </div>
            <div class="subcription">
                <div class="line"></div>
                <i class="far fa-times-circle" id="close"></i>
                <div class="sub-content">
                    <h2>¿Que son las ofertas relampago?</h2>
                    <p>Las ofertas que se pueden observar dandole al boton seran descuentos unicos dados solo por tiempo limitado por parte de unos hoteles que se han contactado con nosotros para poder darselas</p>
                    <form>
                
                        <button class="subs-send" type="submit">Vamos a verlas</button>

                    </form>
                </div>
                
                <div class="line"></div>
            </div>
        </div>
    </div>
   
    
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>   		

	<script src="mapa.js"></script>
	
    <script src="main.js"></script>
</body>
</html>
