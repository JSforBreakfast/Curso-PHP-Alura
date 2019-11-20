<?php 

    $saldos = [
        2500,
        3000,
        1000,
        8000,
        4000,
        9000
    ];

    foreach ($saldos as $saldo){
    //<p></p> use these paragraph tags to envelop the words inside the string below in case you want to visualize the loop on a browser through the localhost
        echo "O saldo é $saldo.\n";
    }
    // echo <pre> echo </pre> envelop the var dumps below to visualize them in locahost browser display. 
    //var_dump($saldos);

    sort($saldos);

    //var_dump($saldos);

    echo "O menor saldo é: $saldos[0]";
?>