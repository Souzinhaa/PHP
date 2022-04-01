<html>
    <head>
        <title>Exemplo POST</title>
    </head>
    <body>
        <form method="post" action="enviap.php">

            <label>Nome:</label>
            <input type="text" name="nome"><br>
            <button type="submit" value="enviar">Enviar</button>

        </form>

        <?php
            if(!empty($_POST)){
                echo "Aqui vem o resto do código";
                echo "<br>";
                echo $_POST['nome'];
            } else {
                echo "Nada foi enviado";
            }
        ?>

    </body>
</html>