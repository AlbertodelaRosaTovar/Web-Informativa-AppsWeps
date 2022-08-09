<?php
require_once 'cdn.html';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        Paradigma del desarrollo de aplicaciones orientadas a servicios
    </title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="open source x/html and css templates" lang="en" name="Description">
    <meta content="mlp design" name="author">
    <meta content="index, follow" name="robots">
    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    </link>
    </meta>
    <link rel="icon" href="img/logo.png" type="image/png" />
</head>

<body>
    <!--start wrapper-->
    <div id="wrapper">
        <!--start body-->
        <div id="body">
            <!--start header-->
            <div id="banner">
                <h1>
                    Paradigma del desarrollo de aplicaciones orientadas a servicios
                </h1>
                <p>
                    Introduccion al Desarrollo Web Orientado a Servicios
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
                        <a href="paradigma.php">
                            Paradigma aplicaciones orientadas a servicios
                        </a>
                    </li>
                    <li>
                        <a href="arquitectura.php">
                            Arquitectura orientada a servicios
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
                    Esta pagina se creo para conocer mas sobre el paradigma de desarrollo de aplicaciones orientadas a servicios.

                    Identificar sus caracteristicas, conceptos, etc.
                </p>
                <p>
                    Como tambien los servicios que ofrece la nube.
                </p>
                <h2>
                    Categorias
                </h2>
                <ul>


                    <li>
                        <a href="arquitectura.php">
                            Arquitectura Orientada a servicos(SOA)
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
                            Servicios que se ofrecen en la nube
                        </h1>
                        <p>
                            Los servicios de nube son infraestructuras, plataformas o sistemas de software quealojan los proveedores externos y que se ponen a disposición de los usuarios através de Internet.
                        </p>
                        <p>
                            Facilitan el flujo de datos de los usuarios a través de Internet, desde los clientes frontend (p. ej., los servidores, las tabletas y las computadoras portátiles o de escritorio; es decir, cualquier sistema en el extremo del usuario) hasta los sistemas de los proveedores, y viceversa. Para acceder a los servicios de nube, los usuarios solo necesitan una computadora, un sistema operativo, y conexión a Internet o una red privada virtual (VPN).

                        </p>

                        <!-- <blockquote>
                                <p>
                                    Proin congue risus eget eros. Morbi ornare, enim ac convallis pellentesque, metus arcu sagittis diam, nec fringilla nunc eros id arcu. Nunc sagittis ligula id justo. Nam et pede a mi facilisis consequat. Quisque tincidunt, turpis vel commodo lacinia, arcu odio bibendum metus, eget elementum ipsum eros sit amet velit.
                                </p>
                            </blockquote></!-->
                        <!--CARD </!-->
                        <div class="container">
                            <div class="row">

                                <div class="col-4">
                                    <div class="card">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="img/IaaS.png" class="img-fluid" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">IaaS</h5>
                                            <p class="card-text">
                                                La Infraestructura como servicio (IaaS) pone recursos informáticos, de red y de almacenamiento a disposición de los usuarios.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="img/paas.png" class="img-fluid" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">PaaS</h5>
                                            <p class="card-text">
                                                La Plataforma como servicio (PaaS) ofrece una plataforma en la que se pueden ejecutar las aplicaciones, así como toda la infraestructura de TI que se necesita para que funcione.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            <img src="img/saas.png" class="img-fluid" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">SaaS</h5>
                                            <p class="card-text">
                                                El Software como servicio (SaaS) ofrece a los usuarios una aplicación en la nube, la plataforma en la que se ejecuta y la infraestructura subyacente.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>

                    </div>
                    <br>
                    <!--another post item-->
                    <div class="item">
                        <h1>
                            Características de las aplicaciones orientadas a servicios.
                        </h1>
                        <p>
                            Entre sus principales características destacan:
                        </p>
                        <ul>
                            <li>
                                Su flexibilidad, que permite la reutilización.
                            </li>
                            <li>
                                Su versatilidad, que hace posible que los servicios puedan ser consumidos por los clientes en aplicaciones distintos.
                            </li>
                            <li>
                                Sus posibilidades, que optimizan el trabajo con datos y su coordinación
                            </li>


                        </ul>
                    </div>
                    <p>permite la reutilización de activos existentes para nuevos servicios que se
                        pueden crear a partir de una infraestructura de TI que ya se había diseñado. De esta
                        forma, permite a las empresas optimizar la inversión por medio de la reutilización
                        que, además, conlleva otra ventaja: la interoperabilidad entre las aplicaciones y
                        tecnologías heterogéneas.
                    </p>
                    <p>
                        La arquitectura orientada a servicios es fuente de ventaja competitiva ya que, por su configuración:
                    </p>
                    <ul>
                        <li>
                            Aumenta la eficiencia en los procesos
                        </li>
                        <li>
                            Amortiza la inversión realizada en sistemas.
                        </li>
                        <li>
                            Reduce costes de mantenimiento
                        </li>
                        <li>
                            Fomenta la innovación orientada al desarrollo de servicios
                        </li>
                        <li>
                            Simplifica el diseño, optimizando la capacidad de organización.
                        </li>
                    </ul>
                    <!--end of another post item-->
                    <h1>
                        Concepto y las características de las aplicaciones Web híbridas(Mashup).
                    </h1>
                    <p>Una Mashup o aplicación web híbrida es una aplicación que combina servicios de
                        varias páginas web en una sola para ofrecer un nuevo servicio. Es habitual que la
                        integración de datos se obtenga desde APIs abiertas. La libertad para integrar todas
                        estas fuentes supone una oportunidad para desarrollar nuevos servicios en muy
                        poco tiempo, al basarse en funcionalidades ya existentes.
                    </p>
                    <p>
                        Típicamente los mashups se basan en utilizar contenido de terceros a través de
                        fuentes o interfaces públicas. Entre las fuentes más utilizadas para crear mashups
                        destacan Google Maps, Amazon, Flickr, Youtube, Ebay y Yahoo. La facilidad con la
                        que estas plataformas permiten integrar su contenido ha propiciado un gran éxito
                        para las aplicaciones web híbridas.
                    </p>
                    <p>Caracteristicas:</p>
                    <ol>
                        <li>Generación rápida de contenido. La integración con soluciones ya
                            existentes permite acortar los tiempos de desarrollo. Lo que antiguamente
                            podía llevar semanas de trabajo ahora se puede implementar en tan solo
                            unos minutos.
                        </li>
                        <br>
                        <li>Facilidad de uso. Cualquiera con conocimientos de desarrollo puede crear
                            servicios novedosos integrando las funcionalidades ya existentes con otras
                            propias. Los requisitos de diseño de las mismas son mínimos por lo que es
                            más importante la creatividad que el perfil técnico.
                        </li>
                        <br>
                        <li>Las marcas pueden crear experiencias innovadoras sin que los
                            usuarios tengan que salir de sus páginas web. A su vez, las fuentes de
                            mashup logran una mayor visibilidad que si sus servicios solo se ofrecieran
                            a través de su página web
                        </li>
                    </ol>

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
                . Todos los derechos reservados
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

        </div>
        <!--end of footer-->
    </div>
    <!--end of wrapper-->
</body>

</html>