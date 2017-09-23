<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Gastos</title>
</head>
<body>
    
    <form action="inserir.php">
       <p> <center> Código: <input type="number" name="codigo"> </center> </p>
        <p> <center> Data: <input type="date" name="data"> <center> </p>
        <p> <center> Descrição: <input type="text" name="descricao"> </center> </p>
        <p> <center> Valor de gasto: <input type="double" name="valor_Gasto"> </center> </p>
        <input type="submit" name="ENVIAR" value="ENVIAR">
    </form>
</body>
</html>
