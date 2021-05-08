<?php
    require 'Heroes.php';
    require 'Orderus.php';
    require 'Beast.php';

    $orderus = new Orderus('Orderus', 'health');
    $beast = new Orderus('Wild beast', 'health');

    $file = file_get_contents('players.json');
    $lala =  json_decode($file, true);

    var_dump($lala);
   // echo $orderus->get_name(). ' - ' .$orderus->get_state();

