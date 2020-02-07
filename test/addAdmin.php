<?php

    require '../bootstrap.php';

    $a = new Admin();
    $a->setLogin("squall");
    $a->setPwd("squall");
    

    $entityManager->persist($a);
    $entityManager->flush();


    echo $a->getId();
?>



list_client.php

<?php

// var_dump($data[0]);
$client = new Client();
$client =  $data[0];
echo $client->getNom();
echo $client->getPrenom();
?>