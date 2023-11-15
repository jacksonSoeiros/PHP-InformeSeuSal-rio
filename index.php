<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php 
        $salario_min = 1_380.60;
        $valor_informado = $_REQUEST["valor"] ?? $salario_min;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Digite o valor do Salário</label>
            <input type="number" name="valor" id="valor" step="0.01" value="<?=$valor_informado?>">
            <p>Considerando o Salário minimo de R$<b><?=number_format($salario_min, 2, ",", ".")?></b></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
            <h2>Resultado do Salário</h2>

            <?php 

                $resultado = intdiv($valor_informado, $salario_min);
                
                $resto = (($valor_informado*100)%($salario_min*100))/100;

                // echo number_format($resto, 2,",", ".");

                echo "Quem ganha R\$ <strong>". number_format($valor_informado, 2, ",",".")."</strong>, ganha <strong>$resultado salários minimos</strong> + R\$<b> ". number_format($resto, 2, ",",".")."</b>";
            ?>
        </section>

</body>

</html>