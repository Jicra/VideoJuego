<?php 
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
    $imagensubida = $_POST['imagensubida'];

    
	echo $username. "(contacto) <br/>".$phone;
	if(mail('jo.cruzs@duocuc.cl', $msg, $imagensubida)){
		echo "mail enviado";
	}else{
		echo "uyuyuyuyuy";
	}
?>


