<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
    use HasFactory;

        protected $fillable = [
        'inv_no',
        'doc_date',
        'shipping_id',
        'cus_id',
        'container_no',
        'port_of_departure',
        'etd',
        'eta',

    ];

    public function shipping_lines()
    {
        return $this->belongsTo(ShippingLine::class,'shipping_id');
    }
}
