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

        if (isset($_POST['name'])) {
            $newId = $restaurant->save(
                array(
                    'name' => $_POST['name'],
                    'address' => $_POST['address'],
                    'phone' => $_POST['phone'],
                    'opening_time' => $_POST['opening_time']
                )
            );
             
             $id = $newId;
        }

        $restaurant->read($id);
        require_once APP_ROOT . '/views/restaurant.php';
    }

    public function updateRestaurant(int $id, RouteCollection $routes)
    {
        $restaurant = new Restaurant;
        if (isset($_POST['name'])) {
            $data = array(
                'name' => $_POST['name'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'opening_time' => $_POST['opening_time'],
                'id' => $id,

            );

            $restaurant->read($id);
            $restaurant->save($data);
        }

        require_once APP_ROOT . '/views/restaurant_edit.php';
    }
}
