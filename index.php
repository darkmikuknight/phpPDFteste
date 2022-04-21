<html>
    <head>
        <title>Teste com PDF</title>
    </head>

    <style>
        a {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 15px;
        }

        /* div {
            display: flex;
            justify-items: center;
        } */
    </style>

    <body bgcolor="ffffff">
        <hr>
        <div>
            <h1>Clique e imprima</h1>
            <a target="_blank" href=<?php echo 'app.php' ?>>Imprimir A1</a>
            <a target="_blank" href=<?php echo 'app2.php' ?>>Imprimir A2-1</a>
            <a id='btn' type="button" onclick="imprimir()">Imprimir A2-2</a>
            <a target="_blank" href=<?php echo 'app4.php' ?>>Imprimir A4</a>
        </div>
        <hr style="margin-top: 3rem;">
    </body>
</html>


<script >
    function imprimir() {
        window.open('app2.php', '_blank');
    }
</script>
