<?php 
include 'global/config.php';
session_start();


if(isset($_POST['btnSesion'])){
    $email= $_POST['email'];
    $clave= $_POST['Contraseña'];

    $conexion = new mysqli("localhost:3306", "root", "", "tiendarb" );
    $consulta = "SELECT COUNT(*) as existe, nombre FROM `cliente` where email='$email' and clave='$clave'";
    $resultado = $conexion -> query($consulta);
    $filas = $resultado -> fetch_assoc();
    $usuario = $filas['nombre'];

    if($filas['existe']==1){
             
     header("Location: index.php");
    
   

       }else{
        echo "<script>alert('Revise los campos.');</script>";
       }
         
       $_SESSION["USUARIO"] = $usuario;
}





$mensaje="";


if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
			if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY))){
                $ID = openssl_decrypt( $_POST['id'], COD,KEY);
				
			}

            if(is_string(openssl_decrypt( $_POST['nombre'],COD,KEY))){
                $nombre = openssl_decrypt( $_POST['nombre'], COD,KEY);
                $cantidad = openssl_decrypt( $_POST['cantidad'], COD,KEY);
                $precio = openssl_decrypt( $_POST['precio'], COD,KEY);
                $isv = openssl_decrypt( $_POST['isv'], COD,KEY);
                $sku = openssl_decrypt( $_POST['sku'], COD,KEY);

                $mensaje = 'Agregado al Carrito';
			}else{
                $mensaje= 'No se agrego';
            }

            if (!isset($_SESSION['CARRITO'])){
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$nombre,
                    'CANTIDAD'=>$cantidad,
                    'PRECIO'=>$precio,
                    'ISV'=>$isv,
                    'SKU'=>$sku
                );
                $_SESSION['CARRITO'][0]=$producto;
                $mensaje="Producto agregado al carrito";
            }else{

                $idProductos=array_column($_SESSION['CARRITO'],"ID");
                
                if(in_array($ID,$idProductos)){
                    echo "<script>alert ('El producto ya ha sido agregado.');</script>";

                }else{


                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$nombre,
                    'CANTIDAD'=>$cantidad,
                    'PRECIO'=>$precio,
                    'ISV'=>$isv,
                    'SKU'=>$sku
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                $mensaje="Producto agregado al carrito";
            }}

            
		break;

        case 'Eliminar':
            if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY))){
                $ID = openssl_decrypt( $_POST['id'],COD,KEY);

                foreach(($_SESSION['CARRITO']) as $indice=> $producto){
                   if($producto['ID']==$ID) 
                    unset($_SESSION['CARRITO'][$indice]);

                }
                echo "<script>alert('Eliminado Correctamente ');</script>";
			}else{
                echo "<script>alert('No se ha eliminado ');</script>";
            }
        break;
	}

}




?>
