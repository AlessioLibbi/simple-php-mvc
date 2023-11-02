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

    public function updateRestaurant(int $id, RouteCollection $routes) {
        $restaurant = new Restaurant;
        // $data = array(
        //     'name' => $_GET['name'],
        //     'address' => $_GET['address'],
        //     'phone' => $_GET['phone'],
        //     'opening_time' => $_GET['opening_time'],

        // );
        // $restaurant->read($id);
        // $restaurant->save($data);
    }
   
  
}