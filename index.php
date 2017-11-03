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

    if ($age>=18) {
        echo " majeur";
    } elseif ($age>=15) {
        echo " ado";
    } else {
        echo " enfant";
    }
    
    $age2 = 33;
    echo "<br>";
    echo $age <=> $age2;
    echo "<br>";
    echo 1 <=> 2;
    echo "<br>";
    echo 2 <=> 1;
    echo "<br>";

    $a = null;

    $c = 5;
    $b = 2;
    $d;

    echo $a ?? $b ?? $c ?? $d;

    //arithmetique

    echo "<br>";
    $a=12;
    $b=$a+25;

    echo "B vaut $b et A vaut $a";

    echo "<br>";
    $b = $a += 25;

    echo "B vaut $b et A vaut $a";

    echo "<br>";
    $a++;
    echo "A vaut $a <br>";

    ++$a;
    echo "A vaut $a <br>";

    echo "avant A valais" .  ++$a;
    echo "<br>";
    echo "aprés A vaut" .  $a;
    echo "<br>";
    echo "avant A valais" .  $a++;
    echo "<br>";
    echo "aprés A vaut" .  $a;


  ?>

</body>
</html>