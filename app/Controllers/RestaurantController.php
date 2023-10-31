<?php 

namespace App\Controllers;

use App\Models\Restaurant;
use Symfony\Component\Routing\RouteCollection;

class RestaurantController
{
    // Show the product attributes based on the id.
    public function showRestaurant(int $id, RouteCollection $routes)
    {

        
        $restaurant = new Restaurant();
        $restaurant->read($id);

        require_once APP_ROOT . '/views/restaurant.php';
    }
   
  
}