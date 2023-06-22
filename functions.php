<?php
    $pwdLength = $_GET['inputLength'];
    if ($pwdLength == null) {
        $pwdLength = 6;
    }

    //GENERATE RANDOM PASSWORD: CORREZIONE ALTERNATIVA
    $numbers = range('0', '9');
    $lowercase = range('a', 'z');
    $uppercase = range('A', 'Z');
    //gets the order from ASCII table
    $symbols = [
        ...range("!", "/"),
        ...range(":","@"),
        ...range("[", "`"),
        ...range("{", "~")];
    $combined = [...$numbers, ...$lowercase, ...$uppercase, ...$symbols];

    //$res will be the result password
    $res = "";
    for ($x=0; $x < $pwdLength; $x++) { //loop si ripete a seconda della lunghezza stabilita
        
        $rndIdx = rand(0, count($combined) - 1); //random index
        $rndChr = $combined[$rndIdx]; //random character
        $res .= $rndChr;
    }

   /*  // GENERATE RANDOM PASSWORD: soluzione originale
    // array_flip to switch key:value in the array (because array_rand returns the keys)
    $numbers = range('0', '9');
    $lowercaseKeys = array_flip(range('a', 'z'));
    $uppercaseKeys = array_flip(range('A', 'Z')); 
    $symbolsKeys = array_flip(str_split('"!@#$%^&*()_+=-{}[]\/|;:<>?/' . "'"));
    $combinedKeys = array_merge($numbers, $lowercaseKeys, $uppercaseKeys, $symbolsKeys);
    //implode to return a string (if extracting an array instead of a string)
    //at least one of each kind
    //str_shuffle so the order is random
    $password = str_shuffle(array_rand($numbers) . 
                            array_rand($lowercaseKeys) . 
                            array_rand($uppercaseKeys) . 
                            array_rand($symbolsKeys) . 
                            implode(array_rand($combinedKeys, $pwdLength - 4))); */

?>