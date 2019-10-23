<?php

//Boque de codigo que permite insertar en una BD usando PDO

if (isset($_POST['enviar'])) {
    try {
        //Declaración de variables
        $cod_producto = $_POST['cod_producto'];
        $nombre_producto = $_POST['nombre_producto'];
        //Sql
        $sql = "INSERT INTO productos (cod_producto, nombre_productoa)
VALUES (:cod_producto, :nombre_producto)";
        $statement = $pdo->prepare($sql); //Preparar sentencia
        //Bindeos
        $statement->bindParam(':cod_producto', $cod_producto);
        $statement->bindParam(':nombre_producto', $nombre_producto);
        //Ejecutar sentencia
        $statement->execute();
        echo "Se ha insertado el producto";
        echo $statement->execute();
        $pdo = null; //Cerramos la conexion;
    } catch (Exception $E) {
        echo "Ups ha ocurrido un problema";
    }
}
