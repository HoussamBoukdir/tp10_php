<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $filieres=['Developpement', 'Reseaux', 'Gestion', 'commerce'];
    $n=count($filieres);

    ?>
    <h3>les listes des filiêres</h3>
    
    <?php
    foreach($filieres as $fil)
    {
        echo "<a href='#'> $fil </a><br/>";
    }
    ?>
</body>
</html>