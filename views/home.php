<?php

use App\Models\Reservation;
use App\Models\Restaurant;
$reservation = new Reservation;
$reservation->read(1);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvenuto nel ristorante da Mario</h1>
    <h3>Vai al ristorante</h3>
    
    <a href="<?= $routeToRestaurant;?>">Vai al ristorante</a>
    <a href="<?= $routeToReview; ?>">Vai alla Review</a>
    <a href="<?= $routeToReservation;?>">Vai al Reservation</a>

   
    

</body>
</html>