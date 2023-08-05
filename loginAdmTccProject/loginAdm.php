<?php include('conexao.php');
    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email'])==0){
            echo'Preencha seu email';
        }else if(strlen($_POST['senha'])==0){
            echo'Preencha sua senha';
        }else{
            $email=($_POST['email']);
            $senha=($_POST['senha']);

            $sql_code="SELECT * FROM tbuserAdm WHERE emailUserAdm ='$email' AND senhaUserAdm ='$senha'";
            $sql_query=$mysqli->query($sql_code) or die("Falha na execução do código SQL".$mysqli->error);
            $qnt=$sql_query->num_rows;
            if($qnt==1){
                $usuario=$sql_query->fetch_assoc();
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id']=$usuario['idUserAdm'];
                $_SESSION['nome']=$usuario['nomeUserAdm'];

                header('Location: indexAdm.php');
            }else{
                echo'Falha ao logar, email ou senha incorretos';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Adm</title>
</head>
    <body>
        <div class="container">
            <form action="" method="post">

                <label>Email:</label>
                <input type="text" name='email'>

                <label>Senha:</label>
                <input type="password" name='senha'>

                <input type="submit" value="Entrar" name='logar'>

            </form>
        </div>
    </body>
</html>