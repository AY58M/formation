<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input placeholder="Nombre1" type="text" name="nombre1">
        <input placeholder="Nombre2" type="text" name="nombre2">
        <input type="submit" value="Envoyer">
    </form>
    <pre>
    <?php
    var_dump($_POST);
    if(isset($_POST['nombre1'], $_POST['nombre2'])) {
        $a = $_POST['nombre1'];
        $b = $_POST['nombre2'];

    }

    ?>
    </pre>
</body>
</html>