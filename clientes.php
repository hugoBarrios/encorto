<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Metadatos SEO -->
    <title>En Corto Producciones | Audiovisual | Argentina</title>
    <meta name="Description"
        content="Trabajamos con cuentas directas o de agencias hace mas de 15 años realizando de proyectos audiovisuales con diversos objetivos." />
    ">
    <meta name="keywords"
        content="Agencia de Community Manager, Cotizar Video Institucional, Gesti&amp;oacute;n de Redes Sociales&amp;lrm;, Producciones Audiovisuales, Videos Corporativos, Videos Institucionales, Videos para Empresas, comunity manager, comunnity manager" />

    <!-- Open Graph Protocol -->
    <meta property="og:title" content="En Corto Producciones | Audiovisual | Argentina">
    <meta property="og:site_name" content="encortoproducciones">
    <meta property="og:url" content="https://www.encorto.com.ar/clientes">
    <meta property="og:description"
        content="Trabajamos con cuentas directas o de agencias hace mas de 15 años realizando de proyectos audiovisuales con diversos objetivos." />
    ">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.encorto.com.ar/src/img/favicon.gif">
    <meta name="fb_admins_meta_tag" content="ENCORTOPRODUCCIONES" />
    <meta property="fb:admins" content="ENCORTOPRODUCCIONES" />
    <!-- Google site -->
    <meta name="google-site-verification" content="NPRklswy7GlPP1VLH8jgy8M8VaHhXcOSo5I6_QcrS8A" />
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "EN CORTO PRODUCCIONES",
        "url": "https://www.encorto.com.ar/",
        "address": "Av. Juan B. Justo, C1414CXP CABA, Argentina",
        "sameAs": ["https://www.facebook.com/ENCORTOPRODUCCIONES",
            "https://www.youtube.com/channel/UCPiNNEs3XhHYVOrQdI31L3Q", "https://vimeo.com/encorto",
            "https://www.linkedin.com/company/en-corto-producciones/"
        ]
    }
    </script>
    <!-- Metadatos SEO -->
    <!-- Estilos -->
    <!-- boostrap -->
    <link rel="stylesheet" href="src/css-boostrap/bootstrap.min.css">
    <script src="src/js/jquery-3.5.1.slim.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/popper.min.js"></script>
    <!-- boostrap -->
    <link rel="stylesheet" href="src/css/main.css">
    <!-- Estilos -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
        integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
        crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Navbar -->
    <?php include './templates/header.php';?>
    <!-- Navbar -->
    <div class="container no-seccion1">
        <div class="row">
            <div class="col-12 numero">
                <hr>
                <h3 class="text-white">03</h3>
            </div>
            <div class="col-12">
                <h2 class="text-white">
                    Nuestros<span class="resaltado"> Clientes</span>.
                </h2>
            </div>
            <div class="col-12 parrafo">
                <p>
                    <span>
                        Trabajamos con cuentas directas o de agencias hace mas de 15 años realizando de proyectos
                        audiovisuales con diversos objetivos, siendo responsables de todas las etapas de creación desde
                        el planteo de la idea original hasta el producto terminado. para ello utilizamos los más
                        modernos equipos y trabajamos en la producción y postproducción de publicidad, videos
                        institucionales, videos corporativos, video lanzamientos, video training, video presentaciones,
                        backstage, desfiles y filmaciones de eventos.
                    </span>
                </p>
            </div>
        </div>
    </div>
    <!-- Home back -->
    <div class="container home">
        <div class="row ">
            <div class="col">
                <a href="https://www.encorto.com.ar/" target="_self" class="text-white"><i
                        class="fas fa-arrow-left resaltado rhover"></i> HOME</a>
            </div>
        </div>
    </div>
    <!-- slider -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="nosotroscr" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                                $directorio = './src/img/logos/';
                                $ficheros1  = scandir($directorio);
                                foreach($ficheros1 as $a){
                                    if($a != "." && $a != ".."){
                                        echo"
                                        <div class='carousel-item '>
                                            <div class='inner'>
                                                 <img alt='".explode(".", $a)[0]."' src='./src/img/logos/".$a."'></img>
                                             </div>
                                          </div>
                                        ";
                                    }
                                    
                                }
                               
                        ?>
                        <!-- <div class="carousel-item active">
                            <div class="inner">
                                <h6 class="text-white">Personaliza tu marca &nbsp;integrando herramientas
                                    audiovisuales que transmitan la <span class="resaltado"
                                        style="font-weigth:bold;">identidad de tu empresa<span></h6>
                            </div>
                        </div> -->
                    </div>
                    <a class="carousel-control-prev " href="#nosotroscr" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#nosotroscr" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">nosotros</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementsByClassName("carousel-item")[0].className += " active";
    </script>
    <!-- Footer -->
    <?php include './templates/footer.php';?>

</body>

</html>