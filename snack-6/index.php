<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>snack 6</title>
    
</head>
<body>
    <div class="gray-container">
        <?php
            foreach ($db['teachers'] as $teacher) {
                echo "<p>{$teacher['name']} {$teacher['lastname']}</p>";            }
        ?>
    </div>

    <div class="green-container">
    <?php
            foreach ($db['pm'] as $singlePm) {
                echo "<p>{$singlePm['name']} {$singlePm['lastname']}</p>";            }
        ?>
    </div>
</body>
</html>