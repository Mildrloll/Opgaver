<?php
    session_start();
    $_SESSION["fornavn"]="Fjodor";
    $_SESSION["efternavn"]="Dostoyevsky";
    echo "Session variables are set ";
    echo "Hello ".$_SESSION["fornavn"]." ".$_SESSION["efternavn"];
?>
