<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductsPage extends Component
{
    public function render()
    {
        $products = Product::where("is_active",1)->get();
        $categories = Category::where("is_active",1)->get();
        $brands = Brand::where("is_active",1)->get();
        return view('livewire.products-page',[
            'products'=> $products,
            'categories'=> $categories,
            'brands'=> $brands,
        ]);
    }
}
