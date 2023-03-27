<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aleila</title>
</head>

<body>

    <main>
        <div>
            <img src="kepek/Eros_fenntarthatosag.png" alt="Szintek">
        </div>
        <div>
            <h1>A fenntarthatóság szintjei</h1>
            <?php
            $elsoSzint = "Ökoszisztéma";
            $masodikSzint = "Társadalom";
            $harmadikSzint = "Gazdaság";
            $negyedikSzint = "Pénz";
            echo "<ul>";
            echo "<li>$elsoSzint</li>";
            echo "<li>$masodikSzint</li>";
            echo "<li>$harmadikSzint</li>";
            echo "<li>$negyedikSzint</li>";
            //vagy echo '<li>'.$elsoSzint.'</li>';
            echo "</ul>";

            echo "<h2>Fogyasztás, környezet és fenntarthatóság kapcsolata</h2>";
            $fogyasztas = array("több, mint amit a természet újratermelni képes", "a természet újratermelő kapacitásával azonos mértékű", "kevesebb, mint amit a természet újratermelni képes");
            $helyzet = array("a környezet pusztul", "környezeti egyensúly", "a környezet megújul");
            $fenntarthatosag = array("nem fenntartható", "fenntartható, nem változó állapot", "fenntartható fejlődés");
            
            echo "<table><tr><th>A megújuló erőforrások fogyasztása -</th>";
            echo "<th>A környezet helyzete -</th>";
            echo "<th>Fenntarthatóság</th></tr>";
            
            for ($i=0; $i < count($fogyasztas); $i++) { 
                print_r("<tr><td>$fogyasztas[$i] - </td><td>$helyzet[$i] - </td><td>$fenntarthatosag[$i]</td></tr>");
            }
            echo "</table>";


            ?>
        </div>
    </main>
</body>

</html>