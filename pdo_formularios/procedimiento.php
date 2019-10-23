<?php

//Boque de codigo que ejecutar un procedimientod de una BD usando PDO

if (isset($_POST['enviar'])) { //Si se ha pulsado enviar
    try {
        //Declarar variables
        $cod_producto = $_GET['par1']; //Recoge parametro
        $cod_tienda = $_GET['par2']; //Recoge parametro
        $cantidad = $_POST['cantidad'];
        $sql = 'CALL venta_producto(:v_cod_producto, :v_cod_tienda, :v_cantidad, @v_verificar)';
        $statement = $pdo->prepare($sql);
        //Enlaces bindeos
        $statement->bindParam(':v_cod_producto', $cod_producto);
        $statement->bindParam(':v_cod_tienda', $cod_tienda);
        $statement->bindParam(':v_cantidad', $cantidad);
        //Ejecutar
        $statement->execute();
        //Obtener parametro de salida
        $statement = $pdo->query('SELECT @v_verificar AS verificar'); //+param ,
        $row = $statement->fetch();
        $v_salida = $row['verificar'];
        echo $v_salida;
        $pdo = null; //Cerramos la conexion;
    } catch (Exception $E) {
        echo "Ha ocurrido un error";
    }
}
