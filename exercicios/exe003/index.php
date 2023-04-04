<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
        // 0X = hecadecimal 0b = binário 0 = Octal 
        // $n = 010;
        // echo "O valor da variavel é $n";
        // $v = 300;
        // var_dump($v);

        // $num = (integer) 3e2; // 3 x 10(2) coerção
        // echo "O valor é $num"
        // var_dump($num)

        // $num = "950";
        // var_dump($num)

        // $casado = true;
        // print "O valor para casado é $casado";

        // $vet = [6, 2, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>