<?php

namespace App\Livewire\Country;

use App\Models\Country;
use Livewire\Component;

class CountryListPage extends Component
{
    protected $listeners = [
    'refreshCountryListPage' => '$refresh',
    ];
    public function render()
    {
        $countries = Country::get();
        return view('livewire.country.country-list-page',[
            'countries' => $countries
        ])
                ->extends('layouts.main');
    }
}
