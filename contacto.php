<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Metadatos SEO -->
    <title>En Corto Producciones | Audiovisual | Argentina</title>
    <meta name="Description"
        content="Videos Institucionales, Videos Corporativos, Spots Publicitarios, Estudio de Producción Audiovisual, Creatividad y Guión , Publicidades, Diseño.">
    <meta name="keywords"
        content="Agencia de Community Manager, Cotizar Video Institucional, Gesti&amp;oacute;n de Redes Sociales&amp;lrm;, Producciones Audiovisuales, Videos Corporativos, Videos Institucionales, Videos para Empresas, comunity manager, comunnity manager" />

    <!-- Open Graph Protocol -->
    <meta property="og:title" content="En Corto Producciones | Audiovisual | Argentina">
    <meta property="og:site_name" content="encortoproducciones">
    <meta property="og:url" content="https://www.encorto.com.ar/contacto">
    <meta property="og:description"
        content="Videos Institucionales, Videos Corporativos, Spots Publicitarios, Estudio de Producción Audiovisual, Creatividad y Guión , Publicidades, Diseño.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.encorto.com.ar/src/img/favicon.gif">
    <meta name="fb_admins_meta_tag" content="ENCORTOPRODUCCIONES" />
    <meta property="fb:admins" content="ENCORTOPRODUCCIONES" />
    <link rel="canonical" href="contacto.php"/>
    <?php include './templates/headerscripts.php';?>
</head>

<body>
    <!-- Navbar -->
    <?php include './templates/header.php';?>
    <!-- Navbar -->
    <div class="container pro-seccion1">
        <div class="row">
            <div class="col-6 numero">
                <hr data-aos="fade-right" data-aos-offset="300" data-aos-duration="600" data-aos-easing="ease-in-sine">
                <h3 class="text-white">04</h3>
            </div>
            <div class="col-6 redes">

            </div>
            <div class="col-12">
                <h2 class="text-white">Contacto</h2>
            </div>
        </div>
    </div>
    <!-- Home back -->
    <div class="container home-p">
        <div class="row ">
            <div class="col">
                <a href="/" target="_self" class="text-white"><i
                        class="fas fa-arrow-left resaltado rhover"></i> HOME</a>
            </div>
        </div>
    </div>
    <!-- contact form -->
    <div class="container contacto">

        <form id="formulario">
            <div class="form-row">
                <div class="form-group col">
                    <input class="form-control" type="text" required="required" aria-invalid="false" name="Nombre"
                        value="" placeholder="Nombre *" data-aid="nameField">
                </div>
                <div class="form-group col">

                    <input class="form-control" type="text" required="required" aria-invalid="false" name="Email"
                        value="" placeholder="Email *" data-aid="emailField">
                </div>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" aria-invalid="false" name="Asunto" value="" placeholder="Asunto"
                    data-aid="subjectField">
            </div>
            <div class="form-group">
                <input class="form-control" type="tel" aria-invalid="false" name="Telefono" value=""
                    placeholder="Teléfono" data-aid="phoneField">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Mensaje" name="Mensaje" class="cf1fieldMessage"
                    data-aid="messageField" id="comp-ivv0ccq0fieldMessage" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-danger btn-block" id="enviar">Enviar</button>
        </form>
        <div id="resp" class="text-white"></div>
    </div>
    <!--info tabs  -->
    <div class="container info">
        <div class="row">
            <div class="col-md-4 col-12 tabs">
                <p>Si estas interesado en formar parte de nuestro staff &nbsp;envíanos un mail con
                    asunto&nbsp;&nbsp;CV&nbsp;a &nbsp;<a class="text-white" data-auto-recognition="true"
                        data-content="info@encorto.com.ar" href="mailto:info@encorto.com.ar"
                        data-type="mail">info@encorto.com.ar</a></p>
            </div>
            <div class="bordes col-md-4 col-12 tabs">
                <h6>
                    CIUDAD AUTONOMA DE BUENOS AIRES
                </h6>
            </div>
            <div class="col-md-4 col-12 tabs">
                <div class="item">
                    <h6>TEL: +54 &nbsp;114856 1702</h6>
                </div>
                <div class="break"></div>
                <div class="item">
                    <h6><a href="mailto:Info@mysite.com" target="_self" data-content="Info@mysite.com"
                            data-type="mail">EMAIL: Info@encorto.com.ar</a></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <a href="http://qr.afip.gob.ar/?qr=EdpKByYwTLPH3BVjpeUNPA,," class="rounded mx-auto d-block" target="_blank">
            <img src="./src/img/IMG_20180618_072525.jpg" class="rounded mx-auto d-block" alt="Datafiscal"> 
            </a>
                  
        </div>
    </div>
    <script>
    AOS.init();
    </script>
    
    <!-- Footer -->
    <?php include './templates/footer.php';?>

</body>

</html>