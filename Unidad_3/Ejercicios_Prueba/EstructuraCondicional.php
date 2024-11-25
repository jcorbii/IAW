<html>
    <head>
        <title>Problema</title>
        <body>
            <?php
            $valor=rand(1,10);
            echo "El valor sorteado es $valor<br>";
            if ($valor<=5)
            {
                echo "Es menor o igual que 5";
            }
            else
            {
                echo "Es mayor que 5";
            }
            ?>   
        </body>
    </head>
</html>