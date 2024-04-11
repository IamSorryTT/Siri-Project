<?php

namespace App\Livewire\Country;

use App\Models\Country;
use Livewire\Component;

class CountryForm extends Component
{
    public $idKey = 0;
    public $country_name;
    public $country_desc;
    public $country_status = 1;

    protected $listeners = [
        'editCountry' => 'edit',
        'btnCreateCountry' => 'resetInput'
    ];

    protected $rules = [
        'country_name' => 'required',
        'country_desc' => 'required'
    ];

    // ข้อความแจ้งเตือนภาษาไทย
    protected $messages = [
        'country_name' => 'กรุณากรอกชื่อประเทศ',
        'country_desc' => 'กรุณากรอกรายละเอียด',
    ];

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        $this->idKey = $country->id;
        $this->country_name = $country->country_name;
        $this->country_desc = $country->country_desc;
        $this->country_status = $country->country_status;
    }

    public function resetInput()
    {
        $this->reset('country_name');
        $this->reset('country_desc');
        $this->reset('country_status');
    }

    public function save()
    {
        $this->validate($this->rules,$this->messages);
        Country::updateOrCreate([
            'id' => $this->idKey
        ],[
            'country_name' => $this->country_name,
            'country_desc' => $this->country_desc,
            'country_status' => $this->country_status,
        ]);

        $this->resetInput();

        $this->dispatch("refreshCountryListPage");

        $this->dispatch('swal',
            title :'บันทึกข้อมูลประเทศเรียบร้อย',
            timer : 3000,
            icon : 'success'
        );
        
        $this->dispatch("modalHide");
    }

    public function render()
    {
        return view('livewire.country.country-form');
    }
}
