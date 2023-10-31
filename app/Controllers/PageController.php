<?php

namespace App\Controllers;

use App\Models\Reservation;
use App\Models\Review;
use App\Models\Restaurant;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
        // Homepage action
	public function indexAction(RouteCollection $routes)
	{
            $routeToReview = str_replace('/{id}', '', $routes->get('review')->getPath());
            $routeToRestaurant = str_replace('/{id}', '', $routes->get('restaurant')->getPath());
            $routeToReservation =  str_replace('/{id}', '', $routes->get('reservation')->getPath());
             require_once APP_ROOT . '/views/home.php';
        
	}
}
