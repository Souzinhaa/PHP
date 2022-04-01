<html>
    <head>
        <title>Exemplo GET</title>
    </head>
    <body>
        <form method="get" action="enviag.php">

            <label>Nome:</label>
            <input type="text" name="nome"><br>
            <button type="submit" value="enviar">Enviar</button>

        </form>

        <?php
            if(!empty($_GET)){
                echo "Aqui vem o resto do código";
                echo "<br>";
                echo $_GET['nome'];
            } else {
                echo "Nada foi enviado";
            }
        ?>

    </body>
</html>