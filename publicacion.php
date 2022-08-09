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
                    publicación de aplicaciones Web hibridas orientadas a servicios.
                </h1>
                <p>Saber U3</p>


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
                            Proceso de publicación de aplicaciones Web hibridas orientadas a servicios.

                        </h1>

                        <p>La publicación es el proceso general por el cual tus apps se ponen a disposición de los usuarios. Cuando publicas una aplicación para Android, realizas dos tareas principales:</p>
                        <img src="img/pu.jpg" alt="" align="right" height="190px" width="235px">
                        <ul>
                            <li>Preparas la app para su lanzamiento. <p>Durante el paso de preparación, compilas una versión de lanzamiento de tu aplicación que los usuarios pueden descargar e instalar en sus dispositivos Android.</p>
                            </li>

                            <li>Realizas el lanzamiento de la app para los usuarios. <p>Durante el paso de lanzamiento, publicitas, vendes y distribuyes la versión de actualización de tu aplicación para los usuarios.</p>
                            </li>
                        </ul>
                        <br>
                        <h1>Cómo preparar tu app para el lanzamiento</h1>
                        <p>La preparación de tu aplicación para el lanzamiento es un proceso de varios pasos que implica las siguientes tareas:</p>

                        <ul>
                            <li>Configurar tu app para el lanzamiento
                                Como mínimo, debes quitar las llamadas de Log y el atributo android:debuggable de tu archivo de manifiesto. También debes proporcionar valores para los atributos android:versionCode y android:versionName, que se encuentran en el elemento "manifest". Asimismo, es posible que debas configurar varios ajustes para cumplir con los requisitos de Google Play o adaptar cualquier método que uses para lanzar tu aplicación.</li>
                            <li>Compilar y firmar una versión de actualización de tu app
                                Puedes usar los archivos de compilación de Gradle con el tipo de compilación release a fin de compilar y firmar una versión de actualización de la app. Consulta la sección Cómo compilar y ejecutar desde Android Studio.</li>
                            <li>Probar la versión de lanzamiento de tu app
                                Antes de distribuir tu app, debes probar por completo la versión de actualización en al menos un teléfono celular y una tablet de destino.</li>
                            <li>Actualizar los recursos de la app para el lanzamiento
                                Asegúrate de que todos los recursos de la app, como los archivos y gráficos multimedia, estén actualizados y se incluyan con tu app o por etapas en los servidores de producción correspondientes.</li>
                            <li>Preparar servidores y servicios remotos de los cuales dependa tu app
                                Si tu app depende de servidores o servicios externos, debes controlar que sean seguros y estén listos para la producción.</li>
                        </ul>
                        <p>Es posible que debas realizar varias tareas como parte del proceso de preparación. Por ejemplo, deberás obtener una clave privada para firmar la aplicación, crear un ícono y también es conveniente que prepares un contrato de licencia para el usuario final (CLUF) a fin de proteger a tu persona, organización y propiedad intelectual.</p>
                        <p>Cuando termines de preparar tu aplicación para el lanzamiento, contarás con un archivo .apk firmado que puedes distribuir a los usuarios.</p>
                        <h1>Cómo lanzar tu app a los usuarios</h1>

                        <p>Puedes lanzar tus apps de Android de diferentes maneras. Por lo general, las apps se lanzan a través de un mercado como Google Play, pero también puedes hacerlo en tu propio sitio web o enviarlas de forma directa a los usuarios.</p>


                        <h1>Cómo realizar el lanzamiento a través de un mercado de apps</h1>
                        <p>Si deseas distribuir tus apps al público más amplio posible, recurrir a un mercado de apps como Google Play es la opción ideal.Google Play es el principal mercado de apps para Android y la mejor forma de distribuir tus aplicaciones a un público mundial amplio. Sin embargo, puedes distribuir tus apps en cualquier mercado que desees o incluso usar varios.</p>


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