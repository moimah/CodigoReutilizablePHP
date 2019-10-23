
<?php
//Boque de codigo que crear una conexión a una BD usando PDO

$server = "localhost"; // ip de servidor
$db = "empresa"; // nombre de la bd
$user = "root"; // Usuario
$password = ""; //Contraseña
try {
    $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $password);
    // echo "Conexión satisfactoria";
} catch (Exception $E) {
    // echo "Error en la conexion";
}
