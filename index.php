<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Strong Password Generator</title>

    <?php
        include "functions.php";
        // Set session variables
        $_SESSION['pwdLength'] = $pwdLength;
        $_SESSION['password'] = $password;

        if (isset($_GET['inputLength'])) {
            header('location: passwordOutput.php');
        }
    ?>

    <style>
        body{
            background-color: #001632;
        }

        h1 {
            color: #7f8994;
        }

        .OutputPasswordDiv {
            background-color: #cff4fc;
            color: #3795bf;
        }

    </style>
</head>

<body>
<div class="container my-5">
    <!-- TITOLO -->
    <h1 class="text-center">Strong Password Generator</h1>
    <h2 class="text-center text-white">Genera una password sicura</h2>
    
    <!-- RISULTATO -->
    <div class="OutputPasswordDiv p-3 mb-3 rounded" >
        <h4>
            Inserisci i valori necessari per generare la tua nuova password 
        </h4>
    </div>

    <!-- FORM -->
    <div class="p-3 rounded bg-white">
        <form method="get">
            <!-- ROW Lunghezza password -->
            <div class="row mb-3 space-between">
                <label class="col-sm-7 col-form-label" for="pwdLength">Lunghezza Password (min 6 caratteri): </label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="inputLength" id="inputLength" value="6" min="6">
                </div>
                
            </div>

            <!-- ROW Ripetizione caratteri -->
            <div class="row mb-3 space-between">
                <label class="col-sm-7 col-form-label" for="chRepeat">Consenti ripetizioni di uno o più caratteri: </label>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioYes" checked>
                        <label class="form-check-label" for="radioYes">
                            Sì
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radioNo">
                        <label class="form-check-label" for="radioNo">
                            No
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- BUTTONS -->
            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>