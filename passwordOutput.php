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

    <title>Password output</title>

    <style>
        .outputPasswordDiv {
            background-color: #cff4fc;
            color: #3795bf;
        }
        a{
            color: inherit;
            text-decoration: inherit;
        }

    </style>

</head>
<body class="container">

    <!-- RISULTATO -->
    <div class="row justify-content-center outputPasswordDiv p-3 m-3 rounded text-center" >
        <h4>
            La nuova password generata ha <?php echo $_SESSION['pwdLength']; ?> caratteri ed è: 
            <div class="col bg-white p-3 m-3 text-black"><?php echo $_SESSION['password']; ?></div>
        </h4>
        <button type="submit" class="col-2 btn btn-primary"><a href="./index.php">Ritorna</a></button>
    </div>
    
</body>
</html>