<?php 

namespace App\Controllers;

use App\Models\Reservation;
use Symfony\Component\Routing\RouteCollection;

class ReservationController
{
    // Show the product attributes based on the id.
    public function showRestaurant(int $id, RouteCollection $routes)
    {

        
        $restaurant = new Reservation();
        $restaurant->read($id);

        require_once APP_ROOT . '/views/restaurant.php';
    }
   
  
}