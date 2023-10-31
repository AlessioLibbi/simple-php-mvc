<?php 

namespace App\Controllers;

use App\Models\Review;
use Symfony\Component\Routing\RouteCollection;

class ReviewController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $review = new Review(); 
        $review ->read($id);
        
        require_once APP_ROOT . '/views/review.php';
    }
   
  
}