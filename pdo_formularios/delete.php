<?php
//Boque de codigo  realiza un DELETE a una BD usando PDO

//Declarar variables
$cod_producto = $_GET['par1'];
$cod_tienda = $_GET['par2'];
if ($cod_producto) { //Si hay parametro de producto
    echo "dentro";
    try {
        $sql = "DELETE FROM productos WHERE (cod_producto = :cod_producto) AND (cod_tienda = :cod_tienda)";
        $statement = $pdo->prepare($sql);
        //Bindeos
        $statement->bindParam('cod_producto', $cod_producto);
        $statement->bindParam('cod_tienda', $cod_tienda);
        //Ejecutar
        $statement->execute();
        $pdo = null; //Cerramos la conexion;
        echo "Se ha eliminado el producto";
        header('Location: index.php'); //Redirecciona
    } catch (Exception $E) {
        echo "Ups ha ocurrido un problema";
    }
}
