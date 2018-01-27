<?php
$cookie_name = "name";
$cookie_value = $_POST["naam"];
setcookie($cookie_name, $cookie_value , time() + 31536000);
//setcookie($cookie_name, $cookie_value , time() + 31536000);
if(isset($_COOKIE[$cookie_name])){
    echo "bedankt om uw naam in te vullen";
}else{
    echo "reload de pagina om uw naam op te slagen";
}
?>