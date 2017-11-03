<!DOCTYPE HTML>
<html>
<head>
  <title>Exemple</title>
</head>
<body>

  <?php
    $nom= ' Pèle';
    $prénom='Sarah';
    $age= '18';

    echo "Bonjour ";
    echo "<br>";
    echo $prénom;
    echo $nom;
    echo "<br>";
    echo  " j'ai $age ans";
    echo "<br>";

    if ($age>18) {
        echo " majeur";
    } elseif ($age>=15) {
        echo " ado";
    } else {
        echo " enfant";
    }
    
  ?>

</body>
</html>