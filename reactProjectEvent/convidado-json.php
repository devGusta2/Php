<?php
    header("Access-Control-Allow-Origin: *");

    include("./conexao.php");

    $stmt = $pdo->prepare("select * from tbConvidado");	
    $stmt ->execute();

    $data = array();
    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
        $data[] = $row;                   					
    }	

    $tudo = "{\"convidado\":" . json_encode($data) . "}";

    echo $tudo;
?>