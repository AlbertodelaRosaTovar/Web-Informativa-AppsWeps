<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        Saber
    </title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="open source x/html and css templates" lang="en" name="Description">
    <meta content="mlp design" name="author">
    <meta content="index, follow" name="robots">
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    </link>
    </link>
    </meta>
    </meta>
    </meta>
    </meta>
    </meta>
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
                    Diagrama de arquitectura SOAP para aplicaciones orientadas <br> <br> a servicios
                </h1>

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
                        <a href="diagramaSoap.php">
                            Diagrama SOAP.
                        </a>
                    </li>
                    <li>
                        <a href="Dmashup.php">
                            Diagrama Mashup.
                        </a>
                    </li>

                    <li>
                        <a href="hibridasSoa.php">
                            Apps Web hibridas SOA.
                        </a>
                    </li>
                    <li>
                        <a href="herramientas.php">
                            Herramientas desarrollo SOA.
                        </a>
                    </li>
                    <li>
                        <a href="frameworks.php">
                            frameworks desarrollo SOA.
                        </a>
                    </li>
                    <li>
                        <a href="publicacion.php">
                            Publicación de aplicaciones Web hibridas SOA.
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
                        <a href="diagramaSoap.php">
                            Diagrama de arquitectura SOAP
                        </a>
                    </li>
                    <li>
                        <a href="Dmashup.php">
                            Diagrama Mashup
                        </a>
                    </li>
                    <li>
                        <a href="hibridasSoa.php">
                            Apps Web hibridas SOA
                        </a>
                    </li>
                    <li>
                        <a href="herramientas.php">
                            Herramientas de desarrollo SOA
                        </a>
                    </li>
                    <li>
                        <a href="frameworks.php">
                            Frameworks de desarrollo SOA
                        </a>
                    </li>
                    <li>
                        <a href="publicacion.php">
                            Publicación de aplicaciones Web hibridas SOA.
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
                        <h1>
                            Introduccion
                        </h1>
                        <p>
                            Un servicio web (en inglés, Web Service o Web services) es una tecnología que utiliza un conjunto de protocolos y estándares que sirven para intercambiar datos entre aplicaciones.
                            Distintas aplicaciones de software desarrolladas en lenguajes de programación diferentes, y ejecutadas sobre cualquier plataforma, pueden utilizar los servicios web para intercambiar datos en redes de ordenadores como Internet. La interoperabilidad se consigue mediante la adopción de estándares abiertos.
                            Las organizaciones OASIS y W3C son los comités responsables de la arquitectura y reglamentación de los servicios Web.
                        </p>

                        <h1>
                            ¿Que es SOAP?
                        </h1>
                        <img src="img/q.jpg" align="left" alt="" height="225px" width="225px">
                        <p>SOAP (siglas de Simple Object Access Protocol) es un protocolo estándar que define cómo dos objetos en diferentes procesos pueden comunicarse por medio de intercambio de datos XML. Este protocolo deriva de un protocolo creado por David Winer en 1998, llamado XML-RPC. SOAP fue creado por Microsoft, IBM y otros y está actualmente bajo el auspicio de la W3C. Es uno de los protocolos utilizados en los servicios Web.</p>
                        <p>SOAP puede formar la capa base de una "pila de protocolos de web service", ofreciendo un framework de mensajería básica en la cual los web services se puedan construir. Este protocolo basado en XML consiste de tres partes: un sobre (envelope), el cual define qué hay en el mensaje y cómo procesarlo; un conjunto de reglas de codificación para expresar instancias de tipos de datos; y una convención para representar llamadas a procedimientos y respuestas. El protocolo SOAP tiene tres características principales:</p>
                        <ul>
                            <li>Extensibilidad (seguridad y WS-routing son extensiones aplicadas en el desarrollo).</li>
                            <li>Neutralidad (SOAP puede ser utilizado sobre cualquier protocolo de transporte como HTTP, SMTP, TCP o JMS).</li>
                        </ul>
                        <p>Como ejemplo de cómo los procedimientos SOAP pueden ser utilizados, un mensaje SOAP podría ser enviado a un sitio Web que tiene habilitado Web service, para realizar la búsqueda de algún precio en una base de datos, indicando los parámetros necesitados en la consulta. El sitio podría retornar un documento formateado en XML con el resultado, ejemplo, precios, localización, características. Teniendo los datos de respuesta en un formato estandarizado "parseable", este puede ser integrado directamente en un sitio Web o aplicación externa.</p>
                        <h1>Arquitectura SOAP</h1>
                        <p>La arquitectura SOAP consiste de muchas capas de especificación: para el formato del mensaje, MEP (Message Exchange Patterns), subyacentes enlaces de protocolo de transporte, modelo de procesamiento de mensajes, y extensibilidad del protocolo. SOAP es el sucesor de XML-RPC, a pesar de que toma el transporte y la neutralidad de la interacción y el envelope / header / body de otra parte (probablemente de WDDX).</p>
                        <img src="img/ar.png" alt="">
                        <h1>Diagrama de arquitectura SOAP para aplicaciones orientadas a servicios</h1>
                        <img src="img/e.jpg" alt="">
                        <h1>La relación entre SOA y los servicios web basados en SOAP o REST.</h1>
                        <p>SOA gira en torno a los servicios o recursos de plataforma. Dichos servicios deben cumplir con una serie de principios de diseño como pueden ser: una alta capacidad de reutilización, abstracción, bajo acoplamiento, autonomía, capacidad de composición, contar con un contrato estandarizado (WSDL en caso de SOAP, convenciones en caso de REST y posiblidad de complementarlos con documentación en ambos casos)</p>
                        <p>Tanto SOAP como REST pueden cumplir a la perfección con cualquiera de estos principios. Sin embargo, son especificaciones totalmente independientes a SOA. De la correcta aplicación del paradigma de orientación a servicios y, sobre todo, del cumplimiento de los principios de diseño de servicios surgirá el éxito o el fracaso de esta relación.</p>
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