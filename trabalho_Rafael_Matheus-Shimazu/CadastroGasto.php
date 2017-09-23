<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
</head>
<body>
    
    <form action="inserir.php">
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
            Valor de gasto: <input type="double" name="valor_Gasto">
        </p>
        <input type="submit" name="ENVIAR" value="ENVIAR">
    </form>
</body>
</html>