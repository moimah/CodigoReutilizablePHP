<?php
//Boque de codigo  realiza un SELECT a una BD usando PDO

//Declaración de variables
$cod_tienda = $_POST['tienda'];
$cod_producto;
$nombre_producto;
try {
    $sql = "SELECT * FROM productos WHERE cod_tienda=:cod_tienda"; //Almacenamos la sentencia
    $statement = $pdo->prepare($sql); //Preparar sentencia
    $datos = array('cod_tienda' => $cod_tienda); // SOLO NECESARIO CON WHERE
    $statement->execute($datos); //Ejecutamos el statement Para consulta
    while ($row = $statement->fetch()) { //Array con resultados
        echo $row['cod_producto'];
        echo $row['nombre_producto'];
    }
    $pdo = null; //Cerramos la conexion;
} catch (Exception $E) {
    //Mostramos un mensaje de exepción
    echo "ha ocurrido un problema!";
}
