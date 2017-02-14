<?php


switch ($name) {
    case "a":
        echo "a";
        break;
    case "b":
        echo "b";
        break;
    case "c":
        echo "c";
        break;
}

/* ....*/


if ($_POST['submit']) {
    if ($name != '' && $email != '') {
	        echo 'Tu nombre en japones es:' ;
	    } else { 
	        echo '<p>Debes de escribir tu nombre y tu email</p>'; 
	    } 
    } else {
        echo '<p>Necesitas de introducir tu nombre y/o email</p>';
    }
}



?>