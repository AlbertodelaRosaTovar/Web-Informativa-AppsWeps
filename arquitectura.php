<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        SOA
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
    <link rel="icon" href="img/logo.jpg" type="image/png" />
</head>

<body>
    <!--start wrapper-->
    <div id="wrapper">
        <!--start body-->
        <div id="body">
            <!--start header-->
            <div id="banner">
                <h1>
                    Arquitectura orientada a servicios
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
                    Seccion de este sitio web creado para conocer mas sobre SOA y todo lo que lo rodea
                </p>
                <p>
                    Principios, estandares relacionados con servicios y mas!
                </p>
                <h2>
                    Categorias
                </h2>
                <ul>

                    <li>
                        <a href="paradigma.php">
                            Paradigma del desarrollo de aplicaciones orientadas a servicios
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
                            ¿Que es la arquitectura orientada a los servicios (SOA)?
                        </h1>
                        <p>
                            La arquitectura orientada a los servicios (SOA) es un tipo de diseño de software que
                            permite reutilizar sus elementos gracias a las interfaces de servicios que se
                            comunican a través de una red con un lenguaje común.
                            Un servicio es una unidad autónoma de una o más funciones del software diseñada
                            para realizar una tarea específica, como recuperar cierta información o ejecutar una
                            operación.

                        </p>
                        <p>
                            Contiene las integraciones de datos y código que se necesitan para llevar
                            a cabo una función empresarial completa y diferenciada. Se puede acceder a él de
                            forma remota e interactuar con él o actualizarlo de manera independiente.
                            En otras palabras, la SOA integra los elementos del software que se implementan y
                            se mantienen por separado, y permite que se comuniquen entre sí y trabajen en
                            conjunto para formar aplicaciones de software en distintos sistemas.
                        </p>
                        <h1>
                            Identificar los principios de diseño que se aplican a sobre cada servicio modelado.
                        </h1>

                        <h4>
                            <li>
                                Contrato de Servicios Estandarizados
                            </li>
                        </h4>
                        <p>
                            Cuando un servicio se implementa como un servicio web, se debe adherir (proporcionar) un contrato de comunicaciones explícitamente declarado y definido colectivamente por uno o más descriptores del servicio, en el cual debe figurar especificaciones como:
                        <ul>
                            <li>
                                Nombre del Servicio.

                            </li>
                            <li>
                                Forma de accesos.
                            </li>
                            <li>
                                Funcionalidades que ofrece.
                            </li>
                            <li>
                                Descripción de los datos de entrada de cada funcionalidad que ofrece.
                            </li>
                            <li>
                                Descripción de los datos de salida de cada funcionalidad que ofrece.

                            </li>

                        </ul>
                        </p>
                        <p>
                            De este modo, todo consumidor de los servicios accederá mediante el contrato, logrando la independencia entre el consumidor y la implementación del propio servicio. Con esto se evita el manejo incorrecto de los datos, se evita trabajo innecesario en la invocación entre estos servicios y también se pone de manifiesto que la existencia de un modelo de datos a nivel de servicio es una de las primeras necesidades que se debe tener en cuenta.
                            <br>

                        </p>
                        <img src="img/22.png" alt="">
                        <br>
                        <br>
                        <h4>
                            <li>
                                bajo acoplamiento
                            </li>
                        </h4>
                        <p>Este principio hace referencia a que los servicios tienen que ser independientes los unos de los otros. Para lograr ese bajo acoplamiento, lo que se hará es que cada vez que se vaya a ejecutar un servicio, se accederá a él a través del contrato, logrando así la independencia entre el servicio que se va a ejecutar y el que lo llama. Si conseguimos este bajo acoplamiento, entonces los servicios podrán ser totalmente reutilizables.
                        </p>
                        <img src="img/3.png" alt="">

                        <br>
                        <h4>
                            <li>
                                Abstracción:
                            </li>
                        </h4>
                        <p>El principio de abstracción permite encapsular el servicio y reducir el acoplamiento. El servicio debe ser una caja negra, únicamente definido por su contrato, que a su vez es el mínimo acoplamiento posible con el consumidor del mismo.
                        </p>
                        <p>
                            El uso de estándares permite definir interfaces uniformes que esconden la lógica del servicio respecto del entorno que le rodea (sistemas proveedores y consumidores)
                        </p>
                        <p>
                            Este nivel de abstracción permite centrarnos exclusivamente en la especificación del servicio, sin incluir información tecnológica ni de ninguna otra naturaleza, más allá de la propia especificación estándar del servicio desde el punto de vista del negocio al que sirve, que queda recogida en su contrato.
                        </p>
                        <img src="img/4.png" alt="">
                        <br>

                        <h4>
                            <li>
                                Reusabilidad:
                            </li>
                        </h4>
                        <p>La reutilización es el principal principio de la arquitectura SOA, cada servicio debe ser analizado, diseñado y construido de manera que su uso pueda serexplotado al máximo, es decir, cada servicio debe ser de algún modo genéricocon el fin de que pueda usarse en diferentes contextos y satisfacer distintosobjetivos. De esta manera, los servicios podrán ser reusables dentro de lamisma aplicación, dentro del dominio de aplicaciones de la empresa o inclusodentro del dominio público para su uso masivo.
                        </p>
                        <p>
                            Con este principio se busca reducir las posibilidades de duplicación de lógica.Si un servicio que ya existe en un contexto funcional se ajusta a la nuevalógica reutilizable, en lugar de crear un nuevo servicio, dicha lógica debeformar parte del servicio existente.
                        </p>



                        <h4>
                            <li>
                                Autonomía:
                            </li>
                        </h4>
                        <p>Este principio nos dice que todo Servicio debe tener su propio entorno de ejecución. De esta manera el servicio es totalmente independiente y nos podemos asegurar que así podrá ser reutilizable desde el punto de vista de la plataforma de ejecución.
                        </p>
                        <img src="img/6.png" alt="">
                        <br>

                        <h4>
                            <li>
                                No estado:
                            </li>
                        </h4>
                        <p>Un servicio no debe guardar ningún tipo de información. El tratamiento de una gran información de estado afectaría gravemente a la escalabilidad del servicio, poniendo en riesgo su disponibilidad. Idealmente, todos los datos que necesita el servicio para trabajar deben provenir directamente de los parámetros de entrada.
                        </p>


                        <h4>
                            <li>
                                Descubrimiento:
                            </li>
                        </h4>
                        <p>Todo servicio debe poder ser descubierto de alguna forma para que pueda ser utilizado, consiguiendo así evitar la creación accidental de servicios que proporcionen las mismas funcionalidades. En el caso de los Servicios Web, el descubrimiento se logrará publicando los interfaces de los servicios en registros UDDI.
                        </p>
                        <img src="img/5.png" alt="">
                        <br>

                    </div>
                    <!--another post item-->
                    <div class="item">
                        <h1>
                            Estándares relacionados a los servicios: XML, SOAP, WSDL, UDDI,REST

                        </h1>
                        <p>
                            Los Servicios Web se basan en estándares y protocolos abiertos. A continuación,se describen los estándares de forma breve:
                        </p>
                        <p>XML (Extensible Markup Language): Es el formato estándar para los datos que se
                            vayan a intercambiar; basado en marcas y etiquetas, es muy frecuente el uso de
                            este metalenguaje para crear otros lenguajes con entidad propia. Su simpleza,
                            facilita su uso fundamentalmente en el intercambio de una gran variedad de datos
                        </p>
                        <p>
                            SOAP (Simple Object Access Protocol) o XML-RPC (XML Remote Procedure Call):
                            Protocolos sobre los que se establece el intercambio; Este protocolo permite realizar
                            intercambios de información entre diversas aplicaciones situadas en entornos que
                            están descentralizados y se encuentran distribuidas. puede atravesar cortafuegos
                            corporativos y ofrece la interoperabilidad de las aplicaciones.
                        </p>
                        <p>
                            WSDL (Web Services Description Language): Es el estándar que se utiliza para
                            describir un Servicio Web. Es una descripción basada en XML de los requisitos
                            funcionales necesarios para establecer una comunicación con los servicios Web;
                            permite especificar cómo deben representarse los parámetros, tanto de entrada
                            como de salida, en una invocación de tipo externo al servicio.
                        </p>

                        <p>
                            UDDI (Universal Description, Discovery, and Integration): La especificación UDDI
                            (Universal Description, Discovery, and Integration) define un modo de publicar y
                            encontrar información sobre servicios Web.
                        </p>
                        <p>
                            UDDI tiene dos funciones:
                        </p>
                        <ul>
                            <li>
                                Es un protocolo basado en SOAP que define cómo se comunican los clientes
                                con los registros UDDI.
                            </li>
                            <li>Es un conjunto de registros duplicados globales en particular.
                            </li>
                        </ul>
                        <p>
                            REST Se trata de una arquitectura de servicios distribuidos que sigue una serie de requisitos:
                        </p>
                        <ul>
                            <li>
                                En REST se publican son recursos en vez de un conjunto de métodos u
                                operaciones (RPC). Un recurso se puede considerar como una entidad que
                                representa un concepto de negocio que puede ser accedido públicamente.
                            </li>
                            <li>Cada recurso posee un identificador único y global, que lo distingue de
                                cualquier otro recurso, aunque ambos tuvieran exactamente los mismos
                                datos.
                            </li>
                            <li>
                                Cada recurso posee un estado interno, que no puede ser accedido
                                directamente desde el exterior.
                            </li>
                        </ul>
                    </div>
                    <!--end of another post item-->
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
            <p class="show-footer">
                2022 © Copyright
                <a href="#">
                    ALBERTO DE LA ROSA
                </a>
                . Todos los derechos reservados.
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