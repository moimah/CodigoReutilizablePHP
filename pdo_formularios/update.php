<?php

//Boque de codigo que permite acualizar una tabla de una BD usando PDO

if (isset($_POST['enviar'])) {
    try {
        //Declaración de variables
        $cod_producto = $_POST['cod_producto'];
        $nombre_producto = $_POST['nombre_producto'];
        echo $nombre_producto;
        //Sql
        $sql = "UPDATE productos SET nombre_producto = :nombre_producto WHERE cod_producto = :cod_producto";
        $statement = $pdo->prepare($sql); //Prparar consulta
        //Bindeos
        $statement->bindParam(':cod_producto', $cod_producto);
        $statement->bindParam(':nombre_producto', $nombre_producto);
        $statement->execute(); //ejecutar
        $pdo = null; //Cerrar conexión
        header('Location: index.php');
    } catch (Exception $E) {
        echo "Ha ocurrido un problema";
    }
}
