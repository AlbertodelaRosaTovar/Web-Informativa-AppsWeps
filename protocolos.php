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
                    Protocolos
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
                        <h1>
                            4 Protocolos API
                        </h1>

                        <p>
                            Aparte de la seguridad y la especificacion de red, diferentes API tambien siguen un conjunto especifico de protocolos que determinan que comandos y formato de datos pueden aceptar. Los 4 conjuntos principales de protocolos utilizados por las API web incluyen:
                        </p>
                        <ol>
                            <li>
                                La transferencia de estado representacional REST (REST).
                            </li>
                            <p>
                                Es mas arquitectonica que un protocolo. Esto significa que debe cumplir con las caracteristicas especificas de la interfaz de usuario para que los servidores puedan reconocer los comandos inmediatamente y cumplir las solicitudes. En lugar de regular acciones como protocolos, REST maneja la transferencia de documentos. Los principios principales que la API REST debe cumplir son:
                            </p>
                            <p>
                                • Cliente-Servidor: el lado del cliente y la aplicacion del servidor deben ser independientes entre si, por lo que los cambios en un extremo no afectan al otro
                            </p>
                            <p>
                                • Cache: la plataforma deberia poder almacenar en cache, o retener temporalmente, respuestas para aumentar la velocidad del servicio y mejorar la experiencia del usuario.
                            </p>
                            <p>
                                • En capas: la compatibilidad con una arquitectura en capas permite que las API se comuniquen directamente con el servidor o a traves de una cadena de aplicaciones.Sin
                            </p>
                            <p>
                                • Estado: el estado sin estado garantiza que no se almacene informacion del cliente en el servidor.
                            </p>
                            <p>
                                • Interfaz uniforme: permite que los clientes y servidores se comuniquen utilizando varios formatos de datos, como HTTP, URI, CRUD o JSON, mejora el intercambio de informacion.
                            </p>
                            <li>
                                XML-RPC
                                <p>
                                    Remote procedure call (RPC) es el protocolo mas antiguo y simple utilizado en las API. Este tipo de protocolo se diseno originalmente para que el cliente creara codigos en un servidor. Sin embargo, XML-RPC utiliza Extensible Market Language (XML) para codificar comandos.
                                </p>
                            </li>
                            <li>
                                JSON-RPC
                                <p>
                                    Muy similar al metodo XML, JSON- RPC utiliza el formato Javascript Object Notation (JSON) para transferir datos. Con cualquiera de los metodos RPC, los estrictos requisitos de formato de datos hacen que sea muy dificil para los desarrolladores realizar actualizaciones. Por lo tanto, si es necesario realizar algun cambio, los desarrolladores deben revisar la documentacion del RPC para asegurarse de que la adicion de componentes no interrumpa otros servidores.
                                </p>
                            </li>
                            <li>
                                SOAP
                                <p>
                                    Simple Object Access Protocol (SOAP), como REST, es una API web que estandariza la red de aplicaciones. Este protocolo acepta HTTP, SMTP, TCP y otros programas independientes para ampliar su disponibilidad a las empresas. SOAP tambien busca definir estructuras de mensajes y metodos de comunicacion a traves del lenguaje de definicion de servicios web (WSDL). Esto permite que el proceso publique un documento legible por maquina para definir los extremos y los detalles del procedimiento.
                                </p>
                                <p>
                                    Al buscar una solucion de integracion, las empresas necesitan profundizar en los diferentes tipos de API. Una empresa necesita determinar que linea (s) de comunicacion quieren mejorar y que conjunto de protocolos interactua bien con sus sistemas existentes. La implementacion exitosa de la API puede promover la transparencia y el rendimiento de los datos.
                                </p>
                            </li>
                        </ol>
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