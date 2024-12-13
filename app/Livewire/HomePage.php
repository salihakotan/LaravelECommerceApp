<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page - UHDWonders')]
class HomePage extends Component
{
    
    
 /**
 * @OA\Get(
 *     path="/cart",
 *     summary="Cart page",
 *     description="Returns the current user's shopping cart",
 *     tags={"Cart"},
 *     @OA\Response(
 *         response=200,
 *         description="Success"
 *     )
 * )
 */

    public function render()
    {
        $brands= Brand::where('is_active',1)->get();
        $categories= Category::where('is_active',1)->get();
     
        return view('livewire.home-page',[
            'brands'=> $brands,
            'categories'=> $categories,
        ]);
    }
}
