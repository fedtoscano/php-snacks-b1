Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno.

<?php
    include __DIR__."/studentsList.php";
    

    // var_dump($students)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students:</h1>
        <ul>
            <?php foreach ($students as $key => $student) { ?>
                <li>
                    <?php echo $student['name'].' '.$student['lastName'] ?>
                    <h3>Media dei voti:</h3>
                    <?php
                        $gradeSum = array_sum($student['grades']);
                        $average = $gradeSum / count($student['grades']);

                        echo $average;
                    ?>
                </li>
            <?php }?>
        </ul>
</body>
</html>