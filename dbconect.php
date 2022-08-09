<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17547994_user_db');
define('DB_PASSWORD', 'Aplicaciones.2021');
define('DB_NAME', 'id17547994_name_db');
   $conn = mysqli_connect(DB_SERVER ,DB_USERNAME , DB_PASSWORD ,DB_NAME );
   $conn->set_charset('utf8_spanish2_ci');

if ($conn == false ) {
   die("Error: no se pudo conectar:" .mysqli_connect() );
   // code...
}
