<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
</head>
<body>
    
    <form action="inserirRendimento.php" method="post">
       <p>
            Código: <input type="number" name="codigo">
        </p>
        <p>
            Data: <input type="date" name="data">
        </p>
        <p>
            Descrição: <input type="text" name="descricao">
        </p>
        <p>
            Valor de Rendimento: <input type="double" name="valor_Rendimento">
        </p>
        <input type="submit" name="ENVIAR" value="ENVIAR">
    </form>
</body>
</html>