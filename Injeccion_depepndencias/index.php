<?php
    require_once "bolso.php";

    $llaves_casa = new Llaves_casa;
    $llaves_coche = new Llaves_coche;
    $cartera = new Cartera;
    $smartphone = new Smartphone;

    $bolso = new Bolso($llaves_casa, $llaves_coche, $cartera, $smartphone);

    $llaves_casa->coger();
    $llaves_coche->coger();
    $cartera->coger();
    $smartphone->coger();
    $bolso->llenar();
?>