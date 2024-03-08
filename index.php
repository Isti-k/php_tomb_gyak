<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérlési szerkezetek</title>
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo "<h2>véletlen számok</h2>";
        // a függvényeket fűzzük a szöveghez!
        echo "Paraméter nélküli véletlen szám: ".rand(). "<br>";
        echo "A véletlen szám maximuma: ".getrandmax(). "<br>";
        echo "Zárt intervallumbeli véletlen szám: " .rand(10, 13). "<br>";
        echo "<h2>Globális változók</h2>";
        $x= 7;
        $y= 6;
    
          function myTest0() {
                $x= 1;
                $y= 2;
                //kezdőérték nélkül nem működik
                $z = $x + $y;
                echo "A (lokális változók) $x és a $y összege: $z<br>";
                // működik:
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                echo "A (globális változók) ".$GLOBALS['x']." és a ".
                $GLOBALS['y']." összeg: ".$GLOBALS['z']."<br>";
            }
            myTest0();
            echo "<h2>Operátorok</h2>";
            $adat1 = 8/3;
            echo "8/3 eredménye: $adat1<br>";
            echo "8/3 adattípusa: ".gettype($adat1)."<br>";
            echo "<h2>Elágazások</h2>";
            $logikai = (5 == 0);
            echo "5 egyenlő-e 0-val?";
            echo ($logikai ? 'Ez igaz.' : 'Ez hamis.');
            // ugyanez a régi formulával:
            if ($logikai){
                echo 'Ez igaz.';
            }
            else{
                echo 'Ez hamis.';
            }
            $szam = rand(-1,1);
            echo "A véletlen szám: $szam<br>";
            switch ($szam){
                case -1:
                    echo "A szám negatív";
                    break;
                case 0:
                    echo "A szám nulla";
                    break;
                default:
                    echo "A szám pozitív";
                    break;
            }
            echo "<h2>Ciklusok</h2>";
            $tomb = array(1,3,4);
            //foreach
            foreach ($tomb as $ertek){
                echo $ertek.'<br>';
            }
            $asszTomb = array("Szandi" => 10, "István" => 20);
            foreach ($asszTomb as $kulcs => $ertek){
                echo "$kulcs: $ertek<br>";
            }
            echo "<h2>1. feladat</h2>";
            $tomb = array();
            for ($i=0; $i < 5; $i++) {
                $randomszam = rand(20, 30);
                array_push($tomb,$randomszam);
            }
            $osszeg=0;
            for ($i=0; $i < count($tomb); $i++) {
                $osszeg+=$tomb[$i];
            }
            print_r($tomb);
            echo "<br> A tömb összege: $osszeg";

    ?>
</body>
</html>