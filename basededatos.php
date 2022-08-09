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
                    Base De Datos
                </h1>
                <p>
                    U2
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
                            Cómo consolidar datos de una API en una base de datos
                        </h1>
                        <p>
                            Gracias a la apertura de datos públicos por parte de las administraciones, se han ampliado en gran medida las posibilidades de analizar todo tipo de datos geoespaciales que hasta hace bien poco no estaban disponibles.
                        </p>
                        <p>
                            En este ejercicio vamos a analizar la actividad del bicing a lo largo de un periodo de tiempo. Para ello vamos a utilizar los datos del servicio público de bicicletas (bicing) de la ciudad de Barcelona disponibles en el portal de Open Data del Ajuntament de Barcelona (http://opendata-ajuntament.barcelona.cat/data/es/dataset/bicing).
                        </p>
                        <p>
                            Estos datos se actualizan continuamente y permiten, más allá de cartografiar las estaciones, poder analizar en tiempo real el uso que hacen los ciudadanos de la bicicleta: en qué estaciones hay mayor actividad, dónde se cogen más bicicletas en un determinado momento, qué diferencias hay entre dias laborables y festivos… Datos que permitirían ser analizados o visualizados a través de un mapa y de forma dinámica.
                        </p>
                        <p>
                            La información que nos da este servicio, es un json con el id, las coordenadas (latitud/longitud), la dirección, el número de bicicletas y párkings disponibles de cada estación de la ciudad.
                        </p>
                        <img src="img/bic.png">
                        </img>
                        <h1>
                            Ejemplo de la información de la estación con el id 1 que nos retorna el json.
                        </h1>
                        <p>
                            Antes de proceder al análisis y visualización de estos datos debemos consolidarlos de algún modo en un archivo o base de datos. Hay que tener presente que el servicio web del que disponemos es un json que se actualiza continuamente, y por lo tanto no nos ofrece ningún histórico de estos datos.
                        </p>
                        <p>
                            ¿Dónde almacenamos los datos?
                        </p>
                        <p>
                            Para almacenar los datos que estamos recogiendo podríamos elegir entre muchísimas posibilidades. En este caso, vamos a utilizar el sistema gestor de bases de datos PostgreSQL, que podemos instalar en sistemas operativos tanto Windows, Linux como Mac.
                        </p>
                        <p>
                            Con PostgreSQL instalado, vamos a crear la tabla en la que insertar los datos:
                        </p>
                        <img src="img/dts.png">
                        <h1>
                            ¿Cómo capturamos los datos?
                        </h1>
                        <p>
                            Los datos se capturan utilizando un script de python, ya que nos resultará relativamente fácil acceder a los datos del bicing del servicio web que comentamos anteriormente.
                        </p>
                        <p>
                            En el repositorio de github https://github.com/josepsitjar/bicing se puede encontrar un ejemplo de script (bicing.py) que permite estas tareas:Acceder a los datos del bicing en formato json Insertar estos datos a la tabla de PostgreSQL que hemos creado. Es importante tener en consideración el hecho de cambiar los parámetros de conexión a la base de datos (usuario y contraseña).
                        </p>
                        <p>
                            Hasta ahí hemos conseguido consolidar los datos en tiempo real del bicing en nuestra base de datos (hay que tener presente que la inserción de datos se ejecuta hasta que cancelemos el cron).

                            Sin embargo, uno de los datos que necesitamos para determinar la actividad en cada estación, es la diferencia de bicis disponibles entre dos momentos consecutivos. Ello nos permitirá saber si hay muchos usuarios cogiendo bicis, o por el contrario, nadie está utilizando las bicis de una determinada estación. Sin embargo, esta información no viene en el servicio web del bicing de modo que debemos extraerla nosotros mismos.
                        </p>
                        </img>
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