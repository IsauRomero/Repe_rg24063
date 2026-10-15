<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/parqueo.css">
</head>
<body>
    
    <form action="index.php" method="post">

        <label for="">Placa</label>
        <input type="text"
            name="placa"
            value="<?= htmlspecialchars(datos["placa"]) ?>">
    </form>
</body>
</html>