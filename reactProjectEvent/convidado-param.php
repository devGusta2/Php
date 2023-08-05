<?php
    header("Access-Control-Allow-Origin: *");

    include("./conexao.php");

    $id = $_GET['id'];

    $stmt = $pdo->prepare("select * from tbConvidado where idConvidado=$id");	
    $stmt ->execute();

    $data = array();
    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
        $data[] = $row;                   					
    }	

    $tudo = "{\"convidado\":" . json_encode($data) . "}";

    echo $tudo;
?>