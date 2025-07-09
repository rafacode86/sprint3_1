<?php
    require_once "tigger.php";

    $tigger = Tigger::getInstance();
    $tigger->roar();
    $tigger->roar();
    $tigger->getCounter();

    $tigger2 = Tigger::getInstance();
?>