<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
            'customer_name',
            'cus_email',
            'cus_phone',
            'cus_address',
            'cus_country',
            'cus_status',
            'cus_fax',
    ];

    public function countries()
    {
        return $this->belongsTo(Country::class,'cus_country');
    }
}
