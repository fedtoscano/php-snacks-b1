Snack 8
Creare un array di animali, che abbiano nome, specie, classe in un file animals.php. Creo quattro array diversi in cui inserire soltanto mammiferi, pesci, rettili e tutti gli altri. 
Nel nostro index.php stampiamo in pagina ognuno di questi array.

<?php
    require __DIR__."/partials/animals.php";

    $mammals = array_filter($animals, function($animal){
        return $animal['classe'] === "Mammalia";
    });

    $fishes = array_filter($animals, function($animal){
        return $animal['classe'] === "Actinopterygii";
    });

    $reptiles = array_filter($animals, function($animal){
        return $animal['classe'] === "Reptilia";
    });

    $otherAnimals = array_filter($animals, function($animal){
        if(in_array($animal, $mammals) 
        && in_array($animal, $fishes) 
        && in_array($animal, $reptiles)){
            return true;
        }
        else{
            return false;
        }
    });

    var_dump($mammals, $fishes, $reptiles, $otherAnimals);


?>