<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        Saber U2
    </title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="open source x/html and css templates" lang="en" name="Description">
    <meta content="mlp design" name="author">
    <meta content="index, follow" name="robots">
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    </link>
    </meta>
    <link href="img/logo.png" rel="icon" type="image/png" />
</head>

<body>
    <!--start wrapper-->
    <div id="wrapper">
        <!--start body-->
        <div id="body">
            <!--start header-->
            <div id="banner">
                <h1>
                    Plataformas streaming.
                </h1>
                <p>
                    Saber U2
                </p>
                <!-- menu -->
                <label class="responsive" for="show-menu">
                    ☰
                </label>
                <input id="show-menu" role="button" type="checkbox">
                <ul id="topnav">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="globalizacion.php">
                            Globalización
                        </a>
                    </li>
                    <li>
                        <a href="Redes.php">
                            Redes Sociales
                        </a>
                    </li>
                    <li>
                        <a href="ecommerce.php">
                            E-commerce.
                        </a>
                    </li>
                    <li>
                        <a href="basededatos.php">
                            Base de datos
                        </a>
                    </li>
                    <li>
                        <a href="protocolos.php">
                            Protocolos
                        </a>
                    </li>
                    <li>
                        <a href="ponline.php">
                            Plataformas Online.
                        </a>
                    </li>
                    <li>
                        <a href="pstreaming.php">
                            Plataformas Streaming
                        </a>
                    </li>
                    <li>
                        <a href="diseñador.php">
                            Sobre el diseñador
                        </a>
                    </li>
                    <li>
                        <a href="comentarios.php">
                            Comentarios
                        </a>
                    </li>
                </ul>
                <!-- end menu -->
                </input>
            </div>
            <!--end of header-->
            <!--start sidebar-->
            <div id="sidebar">
                <h2>
                    Acerca de
                </h2>
                <p>
                    Este Sitio Web fue creado a peticion del maestro David Lopez Belmares
                </p>
                <p>
                </p>
                <h2>
                    Categorias
                </h2>
                <ul>
                    <li>
                        <a href="globalizacion.php">
                            Globalización
                        </a>
                    </li>
                    <li>
                        <a href="redes.php">
                            Redes Sociales
                        </a>
                    </li>
                    <li>
                        <a href="ecommerce.php">
                            E-commerce.
                        </a>
                    </li>
                    <li>
                        <a href="basededatos.php">
                            Base de datos
                        </a>
                    </li>
                    <li>
                        <a href="protocolos.php">
                            Protocolos
                        </a>
                    </li>
                    <li>
                        <a href="ponline.php">
                            Plataformas Online.
                        </a>
                    </li>
                    <li>
                        <a href="pstreaming.php">
                            Plataformas streaming
                        </a>
                    </li>
                    <li>
                        <a href="diseñador.php">
                            Sobre el diseñador
                        </a>
                    </li>
                    <li>
                        <a href="comentarios.php">
                            Caja de comentarios
                        </a>
                    </li>
                </ul>
                <h2>
                    Links
                </h2>
                <ul>
                    <li>
                        <a href="http://twitter.com/mlpdesign">
                            Follow me on Twitter
                        </a>
                    </li>
                    <li>
                        <a href="http://www.mlpdesign.net">
                            MLP Design
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear">
            </div>
            <!--end of sidebar-->
            <!--start containter-->
            <div id="container">
                <!--start content-->
                <div id="content">
                    <!--post item-->
                    <div class="item">
                        <h2>
                            API's en el intercambio de información entreaplicaciones de plataformas streaming.

                        </h2>

                        <p>
                            Recientemente nos ha surgido la necesidad de conocer qué opciones hay a la hora de ofrecer contenido en streaming por Internet -vídeo, principalmente-. Son muchos los servicios que se han unido al boom del contenido distribuido en directo: justin.tv, livestream, ustream, watershed (el servicio “marca blanca” de ustream) o la joven veetle. Incluso el buen y “viejo” youtube lleva desde hace algunos meses desarrollando su plataforma.
                        </p>
                        <p>
                            Lo que más nos interesa en este aspecto, es la flexibilidad de la API y de qué forma podemos integrar los servicios de cada proveedor en nuestras aplicaciones. De cara al usuario, todos son en menor o mayor medida parecidos en cuanto a funcionalidad: canales, vídeos, comentarios, búsquedas.. La realidad es muy diferente al “abrir la tapa” y ver los engranajes de la API que provee cada uno.
                        </p>
                        <p>
                            Aquí la diferencia es muy notable entre uno y otro, y entender cómo funciona cada uno es clave y decisivo para que nuestro proyecto sea cómodo de integrar y su implementación no nos de ningún dolor de cabeza.Vamos a analizar, desde la perspectiva del programador los pros y los contras de los servicios más populares.
                        </p>
                        <img src="img/Ustream.png">
                        <h1>ustream: API fácil y sencilla</h1>
                        <p>El API de ustream es de muy fácil acceso; tan sólo se han de hacer peticiones GET al endpoint de ustream, así que esto es un punto a favor: no necesitamos enmarañarnos con SOAP o similares, una simple llamada HTTP nos dará acceso a sus servicios. Puede devolver los resultados en xml, json, html o php serializado. Esto último es muy interesante, porque nos evitamos tener que parsear los datos con una capa más. Aunque bien es cierto que hoy en día trabajar con json o xml es trivial en php, se gana un punto de sencillez.</p>
                        <p>Casi todos los APIs de estos servicios incluyen un límite de peticiones y ustream no es una excepción. Con una clave de desarrollador estándar, el máximo es de 5.000 peticiones al día, algo que se puede quedar pequeño para quizás que cosas. Si preveemos que vamos a necesitar más llamadas, hay que contactar con ellos. O eso, o “ahorrar” el número de llamadas, usando lo que ellos llaman “parallel request generation” que no es si no una forma lujosa de decir “hacer varias peticiones a la vez con una sola llamada”</p>
                        <p>Entre los objetos a los que podemos acceder con la API de ustream están los datos de usuarios (salvo los que le identifiquen personalmente), información de los canales, vídeos, streams, o la información del estado de ustream (vamos, que si no se ha caído y está echando humo). También se permíte hacer búsquedas del contenido alojado.</p>
                        <img src="img/justin.png">
                        <h1>justin.tv: sabor open source</h1>
                        <p>Una diferencia bastante grande con livestream, es que justin permite publicar contenido, modificar datos usando la API o incluso enviar mensajes al chat. Perfecto para proyectos en los que queramos por ejemplo, emitir contenido desde nuestro propio sitio web o proyecto, o crear canales sin tener que pasar por su aplicación o sitio web para ello.</p>
                        <p>Otro elemento que separa a justin de ustream y los hace muy diferentes en este aspecto es la opción de personalizar totalmente el player de vídeo, algo en lo que ustream sólo tenemos acceso a través de su plataforma waterhsed. justin provee un player de funcionalidad básica que puede personalizarse totalmente usando ActionScript o Javascript.</p>
                        <p>El límite es de 45 peticiones a la API y 1,000 visiones de vídeo cada 5 minutos. Este límite puede parecer demasiado bajo, pero esto es debido a que es el que justin.tv impone a las cuentas por defecto. </p>
                        <img src="img/live.png">
                        <h1>livestream: orientado a proyectos comerciales</h1>
                        <p>El API de livestream es, sin lugar a dudas, la mejor documentada y completa de los tres servicios y claramente orientada a proyectos comerciales. Al igual que justin, se basa en REST y devuelve los datos tanto en xml como en json. El límite de peticiones es de 10 por segundo, 100 por minuto, 1000 por hora y 10000 por día. También permite la publicación de contenidos usando el API y la personalización del player de video. Creación de canales, emisión de vídeo, gestionar equipos… este API nos pone en total control del servicio.</p>
                        <h2> Elementos del lenguaje de programación necesarios para el uso de API's de streaming</h2>
                        <p>API de video en vivo</p>
                        <p>La API de video en vivo permite a las apps de codificadores de video, de cámaras, web y de computadoras, realizar streams de video en vivo directamente a grupos, páginas y perfiles de usuario de Facebook. Si tu app puede producir un stream RTMPS en vivo, puedes realizar stream a Facebook mediante la API de video en vivo.</p>
                        <h1>Requisitos</h1>
                        <p>Para usar esta API, tu app debe someterse a un proceso de revisión de apps con el objetivo de obtener las siguientes funciones y permisos.</p>
                        <h1>Permisos</h1>
                        <p>La mayoría de los puntos de conexión requieren una combinación de los siguientes permisos. Para determinar cuáles son los permisos que necesitas, consulta los documentos de referencia correspondientes a cada uno de los puntos de conexión que usa tu app.</p>
                        <img src="img/stre.png">
                        <h1>API de transmisión en vivo de YouTube </h1>
                        <p> Requisitos de autorización para las solicitudes alContent ID API, que son diferentes de los requisitos para autorizar otrosLive Streaming APIpeticiones.</p>
                        <p>llamando alData API</p>
                        <p>llamando alContent ID API</p>
                        <p>La siguiente tabla muestra los diferentes métodos que admite la API:</p>
                        <img src="img/table.png">

                    </div>
                </div>
                <!--end of content-->
            </div>
            <!--end of container-->
        </div>
        <!--end of body-->
        <!--start footer-->
        <div id="footer">
            <span class="left">
                2022 © Copyright
                <a href="#">
                    ALBERTO DE LA ROSA
                </a>
                . Todos los derechos reservados.
            </span>
            <span class="right">
                <a href="#">
                    Contact
                </a>
                |
                <a href="#">
                    Site Map
                </a>
            </span>
            <p class="show-footer">
                2022 © Copyright
                <a href="#">
                    ALBERTO DE LA ROSA
                </a>
                . All rights reserved.
                <br />
                <a href="#">
                    Contact
                </a>
                |
                <a href="#">
                    Site Map
                </a>
            </p>
        </div>
        <!--end of footer-->
    </div>
    <!--end of wrapper-->
</body>

</html>