<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>	
    <header class="header">
        <div class="container ">
        <nav class ="nav">
            <a href="index.html" class="Logo">
                <img src="https://document-export.canva.com/tb4w8/DAFDcBtb4w8/10/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20220806%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220806T233833Z&X-Amz-Expires=88246&X-Amz-Signature=f4eb6c1c300648f595803548fd10f7300af5635836e6676592912d7aad4987e7&X-Amz-SignedHeaders=host&response-expires=Mon%2C%2008%20Aug%202022%2000%3A09%3A19%20GMT" alt="">
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
    








</head>
<body>

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
                        <h1>------------------</h1>
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

</form>

            </div>
        </div>
    </section>
</body>
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
<script src="main.js"></script>
</html>