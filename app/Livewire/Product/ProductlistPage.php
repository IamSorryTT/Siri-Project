<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\OrderHeader;
use Livewire\WithPagination;

class ProductlistPage extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $searchTerm;

    protected $listener = [
        'refreshProductList' => '$refresh'
    ];
    public function render()
    {
        $products = Product::query();
        $orders = OrderHeader::query();

        return view('livewire.product.productlist-page',[
            'products' => $products,
            'orders' => $orders
        ])->extends('layouts.main');
            

    }
}
