<?php

use App\Models\Review;

$review = new Review;
$review->read(1);
echo $review;

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
    <a href="<?= $routeToReview; ?>">Vai al prodotto</a>
    <a href="<?= $routeToReservation;?>">Vai al Reservation</a>

   
    

</body>
</html>