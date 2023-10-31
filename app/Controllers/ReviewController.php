<?php 

namespace App\Controllers;

use App\Models\Review;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $product = new Review();
        $product->read($id);

        require_once APP_ROOT . '/views/product.php';
    }
   
  
}