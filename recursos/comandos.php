<?php
	//COMANDO PARA IMPORTAR LA BD
	mysqldump -u user_pueblo_magico -p pueblosmagicos > Ruta y nombre_archivo.sql

	//COMANDO PARA EXPORTAR LA BD
	mysql -u user_pueblo_magico -p pueblosmagicos < Ruta y nombre_archivo.sql

	//COMANDO PARA CREAR EL USUARIO(ESTO ES PARA LA CONEXION)
	create user 'user_pueblo_magico'@'localhost' identified by 'usuariopueblomagico123';

	//COMANDO PARA PARA DARLE PRIVILEGIOS AL USUARIO
	grant all privileges on pueblosmagicos.* to 'user_pueblo_magico'@'localhost';

	//USUARIO Y CONTRASEÑA
	administrador@pueblomagico.com
	pueblomagico
?>
