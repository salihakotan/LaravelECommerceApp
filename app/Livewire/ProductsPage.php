<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Products - UHDWonders')]
class ProductsPage extends Component
{
    use WithPagination;

    
    public function render()
    {
       
        
        $productQuery = Product::query()->where("is_active",1);
        $categories = Category::where("is_active",1)->get();
        $brands = Brand::where("is_active",1)->get();
        return view('livewire.products-page',[
            'products'=> $productQuery->paginate(6),
            'categories'=> $categories,
            'brands'=> $brands,
        ]);
    }
}
