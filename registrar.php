<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && 
	strlen($_POST['elpepe']) >= 1 && 
	strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$elpepe = trim($_POST['elpepe']);
	    $etesech = trim($_POST['etesech']);
	    $consulta = "INSERT INTO datos(nombre, email, elpepe, etesech) VALUES ('$name','$email','$elpepe','$etesech')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Tu mensaje ha sido enviado exitosamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>