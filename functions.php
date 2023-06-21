<?php
    $pwdLength = $_GET['inputLength'];
    if (!$pwdLength) {
        $pwdLength = 6;
    }

    // GENERATE RANDOM PASSWORD
    // array_flip to switch key:value in the array (because array_rand returns the keys)
    $numbers = range('0', '9');
    $lowercase = array_flip(range('a', 'z'));
    $uppercase = array_flip(range('A', 'Z')); 
    $symbols = array_flip(str_split('"!@#$%^&*()_+=-{}[]\/|;:<>?/' . "'"));
    $combined = array_merge($numbers, $lowercase, $uppercase, $symbols);
    //implode to return a string (if extracting an array instead of a string)
    //at least one of each kind
    //str_shuffle so the order is random
    $password = str_shuffle(array_rand($numbers) . 
                            array_rand($lowercase) . 
                            array_rand($uppercase) . 
                            array_rand($symbols) . 
                            implode(array_rand($combined, $pwdLength - 4)));
?>