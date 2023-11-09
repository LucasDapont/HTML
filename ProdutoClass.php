<!DOCTYPE html>
    <head>
    <title>Exemplo com PHP 00</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        require_once "produto.php";

        $p = new Produto();
        if(isset($_POST["enviar"])){
            $p->imprimirAtributos();
        }
        ?>

    <form method="post" action="">
        Nome:<input type="text" name="nome"><br>
        <input type="submit" name="enviar" value="Enviar Dados">
    </form>
    </body>
    </html>