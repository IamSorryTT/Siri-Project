<?php

namespace App\Livewire\OrderHeader;

use Livewire\Component;

class OrderHeaderListPage extends Component
{
    public function render()
    {
        return view('livewire.order-header.order-header-list-page',[
                        'order_header' => $order_header
        ])->extends('layouts.main');
        
    }
}
