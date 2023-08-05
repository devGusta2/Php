<?php
    header("Access-Control-Allow-Origin: *");

    include("./conexao.php");

    $nome = $_GET['nome'];

    $stmt = $pdo->prepare("select * from tbAluno where nomeAluno like '%$nome%'");	
    $stmt ->execute();

    $data = array();
    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
        $data[] = $row;                   					
    }	

    $tudo = "{\"aluno\":" . json_encode($data) . "}";

    echo $tudo;
?>