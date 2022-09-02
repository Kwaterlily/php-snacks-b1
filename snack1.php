<!-- Snack PHP -->

<!-- SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
	[
		"homeTeam" => "Squadra A",
		"guestTeam" => "Squadra B",
		"homePointsTeam" => "55",
		"guestPointsTeam" => "45"
	],
	[
		"homeTeam" => "Squadra C",
		"guestTeam" => "Squadra D",
		"homePointsTeam" => "43",
		"guestPointsTeam" => "32"
	],
	[
		"homeTeam" => "Squadra E",
		"guestTeam" => "Squadra F",
		"homePointsTeam" => "72",
		"guestPointsTeam" => "57"
	],
	[
		"homeTeam" => "Squadra G",
		"guestTeam" => "Squadra H",
		"homePointsTeam" => "56",
		"guestPointsTeam" => "28"
    ],
    [
		"homeTeam" => "Squadra I",
		"guestTeam" => "Squadra L",
		"homePointsTeam" => "72",
		"guestPointsTeam" => "57"
	],
	[
		"homeTeam" => "Squadra M",
		"guestTeam" => "Squadra N",
		"homePointsTeam" => "56",
		"guestPointsTeam" => "28"
	]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP - SNACK 1</title>
</head>
<body>
    <h3>Numero partite: <?php echo count($partite); ?></h3>
    <ul>
    <?php
            // per ogni partita, stampiamo squadra casa - squadra ospite | punti squadra casa - punti squadra ospite
            for ($index = 0; $index < count($partite); $index++) { ?>
                <li>
                    <?php
                    echo $partite[$index]["home_team"] . " - " . $partite[$index]["guestTeam"] . " | " . $partite[$index]["homePointsTeam"] . " - " . $partite[$index]["visiting_score"];
                    ?>
                </li>
                <?php
            }
        ?>
    </ul>
    
</body>
</html>