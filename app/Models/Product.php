<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\OrderHeader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
            'cus_id',
            'order_header_id',
            'prod_name',
            'prod_qty',
            'prod_qty_pkg',
            'total_gw',
            'total_nw',
            'dis_gw',
            'dis_nw',
            'total_vol_result',
            'dis_height',
            'dis_length',
            'dis_width',
            'prod_picture',
            'prod_qr_code',
            'ref_doc',
            'package_no',
            'package_type',
            'prod_status',
            'cubic_meter_pkg',
            'cubic_meter_total_pkg',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'cus_id');
    }

    public function order_header()
    {
        return $this->belongsTo(OrderHeader::class,'order_header_id');
    }
}
