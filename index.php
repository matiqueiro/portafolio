<?php  include("registro.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio: Matias Queirolo</title>
    <!--Estilos de pagina-->
    <link rel="stylesheet" href="estilos.css">
    <!--usando FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>


</head>
<body>
    <!--SE QUEDA-->
    <!--LOGO, Barra de navegacion-->

    <header  class="header2">
        <div class="central">
            <div class="logo">MQdeveloper</div>
            
            <nav>
                <a href="#inicio">Inicio</a> <!--Acordate de ponerle la interraccion-->
                <a href="#servicio">Servicios</a>
                <a href="#lenguajes">Conocimientos</a>
                <a href="#contacto">Contacto</a>
            </nav>
        </div>

    </header>
    <!--Todo el cuerpo, Ver si simplificamos ramas-->

        <section class="contenedor" id="inicio">

            <div class="present"> <!--presentacion personal-->
                <div class="nombre">
                    <p>Hola</p>
                    <p>Soy <font class="fuent">Matias</font> Queirolo</p>
                    <p class="details">Tecnico en analisis  y desarrollo de sistemas de software.
                    <br>
                    Me considero una persona proactiva, con alto sentido de la responsabilidad, solidaridad, puntualidad y dispuesto a trabajar competitivamente a todo nivel, con grandes deseos de superación y con expectativas de crecimiento para poder llegar a ser un gran profesional, también me considero creativo, con buen trabajo en equipo y buena comunicación.
                    <br>
                    Con amplios conocimientos en diseño y desarrollo de paginas, sitios, aplicaciones web y diferentes sistemas.
                    </p>
                </div>
                <img src="img/logo.jpg" alt="" class="imagen">
                <!--flecha hacia abajo-->
                <div class="black-line"></div>
                <div class="social">

                    <a href="https://github.com/matiqueiro"><i class="fab fa-github"></i></a>	
                    <a href="https://www.linkedin.com/in/matias-queirolo-943b86217"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/matiqueiro"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/matias.queirolo.56"><i class="fab fa-facebook-f"></i></a>	

                </div>
            </div>

        </section>
        <!--Servicios falta una imagen por cada numero-->
        <section  class="servicio" id="servicio">
            <div class="subtitulo">
                <h2>Servicios:</h2>
                <p>Estos son algunos de los servicios que brindo.</p>
            </div>
            <div class="b-contenedor">
                <div class="s-box">
                    <div class="s-b-img">
                        <div class="s-type">Maquetacion web</div>
                        <img src="img/imagen1.png" alt="">
                    </div>
                    <!--texto-->
                    <div class="s-b-text">
                        <a >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, laborum.</a>
                    </div>
                </div>

                <div class="s-box">
                    <div class="s-b-img">
                        <div class="s-type">Maquetacion web</div>
                        <img src="img/imagen2.png" alt="">
                    </div>
                    <!--texto-->
                    <div class="s-b-text">
                        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, laborum.</a>
                    </div>
                </div>

                <div class="s-box">
                    <div class="s-b-img">
                        <div class="s-type">Maquetacion web</div>
                        <img src="img/imagen3.png" alt="">
                    </div>

                    <!--texto-->
                    <div class="s-b-text">
                        <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, laborum.</a>
                    </div>
                        
                </div>
                    
            </div>
        </section>

        <section  class="lenguajes" id="lenguajes"> <!--Conocimiento hacerlo con html y poniendo iconos con fontsawesas y agregarle slider tambien breve descripcion en subtitulo-->
            <h2 class="p-titulo">Conocimientos:</h2>
            <div class="p-contenedor">
                <div class="p-box">
                    <div class="p-text">
                        <h1>HTML</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/html1.png" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>CSS</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/css3.png" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>Boostrap</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/bootstrap-4.svg" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>Javascript</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/js2.png" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>vue</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/vue.png" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>php</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/php.png" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>laravel</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/laravel.png" alt="html">
                </div>
                <div class="p-box">
                    <div class="p-text">
                        <h1>MySQL</h1>
                        <p>breve descripcion</p>
                    </div>
                    <img src="img/mysql.png" alt="html">
                </div>
            </div>
        </section>

        <section class="contacto" id="contacto">
            <form action="registro.php" method="POST">

                <h2>Contacto:</h2>
                <p>Cualquier consulta no duden en contactarme.</p>
                <div class="inputBox">
                    <!-- <span class="fas fa-user"></span> -->
                    <input type="text" name="name" placeholder="Nombre">
                </div>

                <div class="inputBox">
                    <!-- <span class="fas fa-envelope"></span> -->
                    <input 
                    type="email" 
                    name="email"
                    placeholder="email">
                </div>

                <div class="inputBox">
                    <!-- <span class="fas fa-phone"></span> -->
                    <textarea name="comentario" cols="180" rows="10" style="background-color: #0000; color: #fff;"></textarea>
                </div>

                <input type="submit" value="register" name="register">

            </form>

        </section>

    <!--VER COPYRIGHT-->
    <!-- <footer> 
        <h1>ver despues</h1>
    </footer> -->

    <!--Acordate de mejorar el response-->
</body>
</html>