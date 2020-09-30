<?php
$matches = [
    [
        'team1' => 'Vibonese',
        'team2' => 'Sassari',
        'score1' => '84',
        'score2' => '76'
    ],
    [
        'team1' => 'Real Pesticcio',
        'team2' => 'Real Madrid',
        'score1' => '91',
        'score2' => '110'
    ],
    [
        'team1' => 'Carrarese',
        'team2' => 'Foggia',
        'score1' => '120',
        'score2' => '150'
    ],
    [
        'team1' => 'Bari',
        'team2' => 'Lecce',
        'score1' => '10',
        'score2' => '50'
    ],
    [
        'team1' => 'Eboli',
        'team2' => 'Battipaglia',
        'score1' => '120',
        'score2' => '150'
    ]
];

// var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
            <?php for ($i=0; $i < count($matches) ; $i++) { ?>
                <li> <?php echo $matches[$i]['team1'].' '.'-'.' '.$matches[$i]['team2'].' | '.$matches[$i]['score1'].' -'.' '.$matches[$i]['score2']; ?> </li>
            <?php } ?>
        </ul>

    </body>
</html>
