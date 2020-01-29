<?php

    require '../bootstrap.php';

    $a = new Admin();
    $a->setLogin("squall");
    $a->setPwd("squall");
    

    $entityManager->persist($a);
    $entityManager->flush();


    echo $a->getId();
?>