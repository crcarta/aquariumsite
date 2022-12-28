
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384
    -GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css" />
        <title>Aquarium Parameter Calculator</title>
    </head>
    <body>
            <!-- Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Christiano Carta</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        

        <div class = "container">
            <header class="py-5 mt-5">
                <h1>Aquarium Parameter Analyzer</h1>
            </header>
            <form method="POST" action="connect.php">
                <label for = "user">Username</label></br>
                <input name = "user" type = "text">
                <br><br>
                <label for = "pH">Acidity / pH</label></br>
                <input name ="pH" type ="text">
                <br><br>
                <label for = "ammonia">Ammonia</label></br>
                <input name ="ammonia" type ="text">
                <br><br>
                <label for = "nitrite">Nitrite</label></br>
                <input name ="nitrite" type ="text">
                <br><br>
                <label for = "nitrate">Nitrate</label></br>
                <input name ="nitrate" type ="text">
                <br><br>
                <label for = "hardness">Hardness</label></br>
                <input name ="hardness" type ="text">
                <br><br>
                <label for = "alkalinity">Alkalinity</label></br>
                <input name ="alkalinity" type ="text">
                <br><br>
                <input type ="submit" name="submit" value="Submit"/>

            </form> 

            <?php

        function pHanalyze(float $n)
        {
            if(($n > 6.5 )&&($n <= 8))
            {
                printf("pH Summary: Your water pH level is
                 in generally good condition.");
                 return;
            }
            $n > 8 ? printf("pH Summary: Your water is not 
                      acidic enough, consider using a pH down supplement.")
            :
                printf("pH Summary: Your water is a bit too 
                 acidic, consider pH up supplement.");
        }
        function ammoniaanalyze(float $ppm)
        {
            $ppm > 0 ? printf("Ammonia Summary: Your tank has too much ammonia. Swiftly consider doing
            a water change, and or buying ammonia killing product.")
            :
                printf("Ammonia Summary: Your tank's ammonia levels are safe.");
        }
        function nitriteanalyze(float $ppm)
        {
            $ppm > 0 ? printf("Nitrite Summary: Your tank has too many nitrites. Swiftly consider doing
            a water change.")
            :
                printf("Nitrite Summary: Your tank's nitrate levels are safe.");
        }
        function nitrateanalyze(float $ppm)
        {
            if ($ppm > 38)
            {
                printf("Nitrate Summary: Your nitrate level is high, 
                 a water change should be done.\n");
            }
            $ppm > 30 ?
                printf("Nitrate Summary: Your nitrate levels are safe, but are getting
         higher, consider a water change in the near future. \n")
            :
                printf("Nitrate Summary: Your nitrate levels are safe.\n");
        }
        function hardnessanalyze(float $num)
        {
            if ($num > 18)
            {
                printf("Hardness Summary: Water has high concentration of minerals.
                Lowering your water's hardness is in your best interest. Many methods exist,
                consier getting distilled water, and after mixing it with something such as
                Seachem Equilibrium or tap water, add to aquarium");
                return;
            }

            (($num >= 5) && ($num <= 18)) ?
                printf("Hardness Summary: Acceptable Hardness\n")
            :
                printf("Hardness Summary: Low, perform a water change to raise. You may also
                consider adding limestone rock to your hardscape.");
        }
        function alkalinityanalyze(int $Alk)
        {
            if (($Alk >= 7) && ($Alk <= 12))
            {
                printf("Alkalinity Summary: Generally good.\n");
                return;
            }
            ($Alk < 7) ?
                printf("Alkalinity Summary: Low Alkalinity, consider a water change
        and or alkalinity raising products.\n")
            :
                printf("Alkalinity Summary: High Alkalinity, consider dilluting
         the water with purified, low mineral water, or read further online.\n");
        }
        ?>
    </body>
</html>
