<?php
    header("Access-Control-Allow-Origin: *");

    include("conexao.php");

    // Getting the received JSON into $json variable.
    $json = file_get_contents('php://input');
 
    // decoding the received JSON and store into $obj variable.
    $obj = json_decode($json,true);
     
    $idConvidado = $obj['id_convidado'];

    $stmt = $pdo->prepare("insert into tbConvidado values('$idConvidado','nomeConvidado','2023-05-22')");	
    $stmt ->execute();    
?>