<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Rendimento</title>
</head>
<body>
    
    <form action="inserirRendimento.php" method="post">
       <p> <center> Código: <input type="number" name="codigo"> </center> </p>

        <p> <center> Data: <input type="date" name="data"> </center> </p>

        <p> <center> Descrição: <input type="text" name="descricao"> </center> </p>

        <p> <center> Valor de Rendimento: <input type="double" name="valor_Rendimento"> </center> </p>

        <input type="submit" name="ENVIAR" value="ENVIAR">
    </form>
</body>
</html>
