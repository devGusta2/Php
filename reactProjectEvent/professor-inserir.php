<?php
    header("Access-Control-Allow-Origin: *");

    include("conexao.php");

    // Getting the received JSON into $json variable.
    $json = file_get_contents('php://input');
 
    // decoding the received JSON and store into $obj variable.
    $obj = json_decode($json,true);
     
    $professor = $obj['professor'];

    $stmt = $pdo->prepare("insert into tbProfessor values(null,'$professor','2023-05-22')");	
    $stmt ->execute();    
?>