<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
</head>
<body>
    
    <?php
    
    $codigo = $_POST["codigo"];
    $data =  $_POST["data"];
    $descricao = $_POST["descricao"];
    $valorRendimento = $_POST["valor_Rendimento"];
    
    $erro =0;
    if(empty($codigo)){
        echo "O Código deve ser preenchido.";
        $erro=1;
    }
    if(empty($data)){
        echo "A Data deve ser preenchido.";
        $erro=1;
    }
    if(empty($descricao))
    {
        echo "A Descrição deve ser preenchido.";
        $erro=1;
    }
    if(empty($valorRendimento)){
        echo "O valor do rendimento deve ser preenchido.";
        $erro=1;
    } 
       
    if($erro == 0){
        $conexao = mysqli_connect("localhost", "root", "", "trabalho3bi");
        if(mysqli_connect_errno($conexao)){
            echo "Problemas de conexão.Erro:";
            echo mysqli_connect_error();
            die();
        }
        /*fazer a conversao da data*/
        $query = "insert into rendimento values('".$codigo."','".$data."','".$descricao."','".$valorRendimento."')";
        $resultado = mysqli_query($conexao, $query);
        if($resultado){
            echo "Cadastro Completo!";
        }else{
            echo "Erro ao inserir.";
        }
        mysqli_close($conexao);
    }
    ?>
    
    
</body>
</html>