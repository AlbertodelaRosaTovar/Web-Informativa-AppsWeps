<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>
        Comentarios
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
    <link rel="icon" href="img/logo.jpg" type="image/png" />
    <link href="vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/emoji-picker/lib/js/config.js"></script>
    <script src="vendor/emoji-picker/lib/js/util.js"></script>
    <script src="vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
    <script src="vendor/emoji-picker/lib/js/emoji-picker.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--start wrapper-->
    <div id="wrapper">
        <!--start body-->
        <div id="body">
            <!--start header-->
            <div id="banner">
                <h1>
                    Comentarios
                </h1>
                <p>

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
                        <a href="unidad1.php">
                            Unidad 1
                        </a>
                    </li>
                    <li>
                        <a href="unidad2.php">
                            Unidad 2
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
                    Esta pagina esta diseñada para que usted pueda opinar sobre nuestro sitio web.
                </p>
                <p>Tambien pueda interactuar con los usuarios acerca de los temas incluidos aqui</p>
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
                        <a href="arquitectura.php">
                            Arquitectura Orientada a servicos(SOA)
                        </a>
                    </li>


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
                        <div class="container">
                            <h3 class="mt-5">
                                <center>Seccion de comentarios</center>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <!-- Contenido -->
                                    <div class="output-container">
                                        <div class="comment-form-container">
                                            <form id="frm-comment">
                                                <div class="input-row">
                                                    <input type="hidden" name="comment_id" id="commentId" placeholder="Name" />
                                                    <input class="form-control" type="text" name="name" id="name" placeholder="Nombre" />
                                                </div>
                                                <div class="input-row">
                                                    <p class="emoji-picker-container">
                                                        <textarea class="input-field" data-emojiable="true" data-emoji-input="unicode" type="text" name="comment" id="comment" placeholder="Agrege su mensaje"></textarea>
                                                    </p>
                                                </div>
                                                <div>
                                                    <input type="button" class="btn btn-primary" id="submitButton" value="Agregar Comentario" />
                                                    <div id="comment-message">Comentario creado con éxito!</div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="output"></div>
                                    </div>
                                    <script>
                                        function postReply(commentId) {
                                            $('#commentId').val(commentId);
                                            $("#name").focus();
                                        }
                                        $("#submitButton").click(function() {
                                            $("#comment-message").css('display', 'none');
                                            var str = $("#frm-comment").serialize();
                                            $.ajax({
                                                url: "AgregarComentario.php",
                                                data: str,
                                                type: 'post',
                                                success: function(response) {
                                                    $("#comment-message").css('display', 'inline-block');
                                                    $("#name").val("");
                                                    $("#comment").val("");
                                                    $("#commentId").val("");
                                                    listComment();
                                                }
                                            });
                                        });
                                        $(document).ready(function() {
                                            listComment();
                                        });
                                        $(function() {
                                            // Initializes and creates emoji set from sprite sheet
                                            window.emojiPicker = new EmojiPicker({
                                                emojiable_selector: '[data-emojiable=true]',
                                                assetsPath: 'vendor/emoji-picker/lib/img/',
                                                popupButtonClasses: 'icon-smile'
                                            });
                                            window.emojiPicker.discover();
                                        });

                                        function listComment() {
                                            $.post("ListaComentario.php",
                                                function(data) {
                                                    var data = JSON.parse(data);
                                                    var comments = "";
                                                    var replies = "";
                                                    var item = "";
                                                    var parent = -1;
                                                    var results = new Array();

                                                    var list = $("<ul class='outer-comment'>");
                                                    var item = $("<li>").html(comments);
                                                    for (var i = 0;
                                                        (i < data.length); i++) {
                                                        var commentId = data[i]['co_id'];
                                                        parent = data[i]['parent_id'];
                                                        if (parent == "0") {
                                                            comments = "<div class='comment-row'>" +
                                                                "<div class='comment-info'><img src='user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + "</span></div>" +
                                                                "<div class='comment-text'>" + data[i]['comentarios'] + "</div>" +
                                                                "<div class='comment-text'>" + data[i]['fecha'] + "</div>" +
                                                                "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Responder</a></div>" +
                                                                "</div>";
                                                            var item = $("<li>").html(comments);
                                                            list.append(item);
                                                            var reply_list = $('<ul>');
                                                            item.append(reply_list);
                                                            listReplies(commentId, data, reply_list);
                                                        }
                                                    }
                                                    $("#output").html(list);
                                                });
                                        }

                                        function listReplies(commentId, data, list) {
                                            for (var i = 0;
                                                (i < data.length); i++) {
                                                if (commentId == data[i].parent_id) {
                                                    var comments = "<div class='comment-row'>" +
                                                        " <div class='comment-info'><img src='user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + " </span></div>" +
                                                        "<div class='comment-text'>" + data[i]['comentarios'] + "</div>" +
                                                        "<div class='comment-text'>" + data[i]['fecha'] + "</div>" +
                                                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['co_id'] + ")'>Responder</a></div>" +
                                                        "</div>";
                                                    var item = $("<li>").html(comments);
                                                    var reply_list = $('<ul>');
                                                    list.append(item);
                                                    item.append(reply_list);
                                                    listReplies(data[i].co_id, data, reply_list);
                                                }
                                            }
                                        }
                                    </script><!-- Fin Contenido -->
                                </div>
                            </div><!-- Fin row -->
                        </div><!-- Fin container -->

                        <!-- Bootstrap core JavaScript-->
                        <script src="dist/js/bootstrap.min.js"></script>
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
</body>

</html>