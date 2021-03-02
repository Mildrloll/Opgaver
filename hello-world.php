<?php
    // seccsion start which is required in order to use the seccion method
    session_start();
    // add's first name and last name variables to the seccion
    $_SESSION["fornavn"]="Fjodor";
    $_SESSION["efternavn"]="Dostoyevsky";
    // lets the user know that the variables are set
    echo "Session variables are set ";
    // prints out Hello Fjodor Dostoyevsky with the seccion variables
    echo "Hello ".$_SESSION["fornavn"]." ".$_SESSION["efternavn"];
?>
