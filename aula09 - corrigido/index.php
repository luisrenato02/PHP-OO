<?php
require_once "Pessoa.php";
require_once "Livro.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09</title>
</head>

<body>
    <pre>
        <?php
        $p[0] = new Pessoa("Luis Renato", 20, "M");
        $p[1] = new Pessoa("Larissa", 19, "F");

        $l[0] = new Livro("A bela e a fera", "Gepetin", 450, $p[0]);
        $l[1] = new Livro("Curso do Greg", "Kaique Barber", 120, $p[1]);

        $l[0]->detalhes();


        ?>

    </pre>
</body>

</html>