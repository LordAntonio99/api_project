<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="stylesheet/lightmode.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <?php include_once('php/navbar.php') ?>
    <section id="main">
        <h1>GLOBAL STATS TODAY</h1>
        <h3 id="newConfirmed">New Confirmed: </h3>
        <h3 id="newDeaths">New Deaths: </h3>
        <h3 id="totalConfirmed">Total Confirmed: </h3>
        <h3 id="totalDeaths">Total Deaths: </h3>
    </section>
    <script src="global.js"></script>
</body>
</html>