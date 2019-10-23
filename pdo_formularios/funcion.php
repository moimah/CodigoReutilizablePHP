<?php
//Boque de codigo que ejecutar una función de una BD usando PDO

include("conexion.php");
if (isset($_POST['enviar'])) {
    //Declaración de variables
    $precio = $_POST['precio'];
    $cod_tienda = $_POST['cod_tienda'];
    //Sql
    $sql = "SELECT numero_productos(:precio, :cod_tienda) AS resultado";
    $statement = $pdo->prepare($sql); //Preparar statement
    //Bindeos
    $statement->bindParam(':precio', $precio);
    $statement->bindParam(':cod_tienda', $cod_tienda);
    //Ejecutar sentencia
    $statement->execute();
    $pdo = null;
    echo "El resultado es <br>";
    //Recorrer resultados
    while ($row = $statement->fetch()) {
        echo $row['resultado'];
    }
}
