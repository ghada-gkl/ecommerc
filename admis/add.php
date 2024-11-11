<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "../connexion.php";
    $sql="INSERT INTO produit  VALUES (NULL, 'Asus I7 1To', 2055, 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, voluptatibus necessitatibus dolor dolores optio nobis consectetur voluptates consequuntur libero quidem rerum eaque ex id et accusamus, autem eligendi adipisci tempora!', 'https://picsum.photos/200/200/', 0),";
$connexion=new connexion();
$pdo=$connexion->getConnexion();
$res=$pdo->exec($sql);
    ?>
</body>
</html>