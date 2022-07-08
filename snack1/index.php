<?php
/*Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

$GameList = [
    [
        "team 1" => "Milano Olimpia",
        "team 2" => "Cantù",
        "team1 score" => 55,
        "team2 score" => 60,
    ],

    [
        "team 1" => "Virtus Bologna",
        "team 2" => "Reyer Venezia",
        "team1 score" => 40,
        "team2 score" => 48,
    ],
    [
        "team 1" => "Dinamo Sassari",
        "team 2" => "Mens Sana Siena",
        "team1 score" => 45,
        "team2 score" => 55,
    ],
    [
        "team 1" => "Pall. Treviso",
        "team 2" => "Fortitudo Bologna",
        "team1 score" => 60,
        "team2 score" => 58,
    ],
    [
        "team 1" => "Juvecaserta",
        "team 2" => "V.L. Pesaro",
        "team1 score" => 34,
        "team2 score" => 45,
    ],
    [
        "team 1" => "Virtus Roma",
        "team 2" => "Pall. Varese",
        "team1 score" => 54,
        "team2 score" => 60,
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>team 1</th>
                <th>team 2</th>
                <th>team1 score</th>
                <th>team2 score</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($GameList as $game) : ?>
                <tr>
                    <td><?= $game["team 1"] ?></td>
                    <td><?= $game["team 2"] ?></td>
                    <td><?= $game["team1 score"] ?></td>
                    <td><?= $game["team2 score"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>