<?php 
    $teste = 'Link Por php';
    $teste2 = 'titulo com php';

?>
<html>
    <head>
        <title>Teste com PDF</title>
        <link rel="stylesheet" href="mpdf.css">
    </head>

<style>
    /* #ee {
        border-radius: 5rem;
        border:1px solid red; 
    } */
</style>

<body bgcolor="ffffff">
    <!-- <img id="ee" width="64" height="64" src="solid-color-image.jpeg"> -->
    <img id="ee" width="64" height="64" src="inst.png">
    <!-- <img id="ee" width="64" height="64" src="<?php echo __DIR__ ?>/solid-color-image.jpeg"> -->
    <hr>
        <a href="http://somegreatsite.com"><?php echo $teste ?></a>
        is a link to another nifty site

        <div>
        <h1><? echo $teste2 ?></h1>
            <h2>this is a medium header</h2>
        </div>

        send me mail at <a href="mailto:support@yourcompany.com">
            support@yourcompany.com</a>.

        <p> this is a new paragraph!
        <p> <b>this is a new paragraph!</b>

        <br> <b><i>this is a new sentence without a paragraph break, in bold italics.</i></b>
    <hr>
</body>
</html>
