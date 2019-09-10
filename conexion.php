<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
    // DB credentials.
	define('DB_HOST','us-cdbr-iron-east-02.cleardb.net')
	define('DB_USER','b1e2dcf48feb21');
	define('DB_PASS','74eef66f');
	define('DB_NAME','heroku_04703244cf49e5e');
	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
