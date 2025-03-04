<?php header("Content-Type: text/html;charset=utf-8");
/*Datos de conexion a la base de datos*/
$db_host="srv979.hstgr.io";
$db_user="u323930937_bdalquizenadm";
$db_pass='M4Cc!AiQulz3n#BD.25';
$db_name="u323930937_BDAlquizen";

/*Conectamos con la BBDD*/
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

/*Comprobamos si se ha producido error*/
if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}else{
    /*Datos de conexion a la base de datos*/
    $txtNombre = $_POST['nombre'];
    $txtCorreo = $_POST['correo'];
    $txtAsunto = $_POST['asunto'];
    $txtMensaje = $_POST['mensaje'];
    
    // Realiza alguna operación con los datos, como almacenarlos en una base de datos, verificar credenciales, etc.
    $sqltxt = "INSERT INTO Alquizen(Nombre, Correo, Asunto, Mensaje)
    VALUES('$txtNombre','$txtCorreo','$txtAsunto','$txtMensaje')";
    $insert = mysqli_query($con, $sqltxt) or die(mysqli_error());

    // Puedes devolver una respuesta al cliente si es necesario
    //echo "Datos recibidos: Usuario - $usuario, Clave - $contrasena";

    header("Location: gracias.html", true, 301);
    exit();  
}

?>