<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>

<body>
<div class="container">
    <!-- TITOLO -->
    <h1 class="text-center">Strong Password Generator</h1>
    <h2 class="text-center">Genera una password sicura</h2>
    
    <!-- RISULTATO -->
    <div>
        Risultato
    </div>

    <!-- FORM -->
    <form>
        <!-- ROW Lunghezza password -->
        <div class="row mb-3 space-between">
            <label for="inputEmail3" class="col-sm-7 col-form-label"for="pwdLength">Lunghezza Password: </label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="inputLength">
            </div>
        </div>
    </form>
</div>
</body>
</html>