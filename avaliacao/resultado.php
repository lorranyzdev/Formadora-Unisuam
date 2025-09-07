

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);

    $status = '';
    $resultado = ($nota1 + $nota2) / 2 ;

    if($resultado >= 7 ){
        $status = 'Aprovado';
    }
    elseif($resultado >= 4 && $resultado <= 6.9){
        $status = 'Prova Final'; 
    }
    else{
        $status = 'Reprovado';
    }

    echo 'Nome do Aluno:' . $nome . '<br/>';
    echo 'Número de Matricula:' . $matricula . '<br/>';
    echo 'Média do Aluno: ' . $resultado . '<br/>';
    echo 'Status: ' . $status . '<br/>';

    ?>
    <p></p>
    <a href="formulario.html">Link para Voltar</a>
</body>
</html>