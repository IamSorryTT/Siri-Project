<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductFormPage extends Component
{
    public $idKey = 0;
    public $shipping_id;
    public $customer_name;
    public $cus_address;
    public $cus_phone;
    public $cus_fax;
    public $prod_name;
    public $prod_qty;
    public $prod_qty_pkg;
    public $total_gw = 0;
    public $total_nw = 0;
    public $dis_gw;
    public $dis_nw;
    public $dis_height;
    public $dis_length;
    public $dis_width;
    public $prod_picture;
    public $prod_qr_code;
    public $ref_doc;
    public $package_no;
    public $package_type;
    public $port_of_departure;
    public $cubic_meter_pkg;
    public $cubic_meter_total_pkg;
    public $inv_no;
    public $container_no;
    public $etd;
    public $eta;
    public $doc_date;
    public $prod_status = 'รอดำเนินการ';

    public function rules()
    {
        if($this->idKey){
            return [ 
                 'customer_name' => 'required' ,
                 'cus_address' => 'required',
                 'prod_name' => 'required',
                 'prod_qty' => 'required|integer',
                 'prod_qty_pkg' => 'required|integer',
                 'dis_gw' => 'required|numeric',
                 'dis_nw' => 'required|numeric',
                 'dis_height' => 'required|numeric',
                 'dis_length' => 'required|numeric',
                 'dis_width' => 'required|numeric',
                 'ref_doc' => 'required', 
                 'package_no' => 'required',
                 'package_type' => 'required',
                 'port_of_departure' => 'required',
                 'cus_phone' => 'required|integer',
                 'cus_fax' => 'required|integer',
                 'shipping_id'  => 'required',
                 'inv_no'  => 'required',
                 'doc_date' => 'required',
                 'container_no' => 'required',
                 'etd' => 'required',
                 'eta' => 'required',
            ];
        }else{
                        return [ 
                 'customer_name' => 'required' ,
                 'cus_address' => 'required',
                 'prod_name' => 'required',
                 'prod_qty' => 'required|integer',
                 'prod_qty_pkg' => 'required|integer',
                 'dis_gw' => 'required|numeric',
                 'dis_nw' => 'required|numeric',
                 'dis_height' => 'required|numeric',
                 'dis_length' => 'required|numeric',
                 'dis_width' => 'required|numeric',
                 'ref_doc' => 'required', 
                 'package_no' => 'required',
                 'package_type' => 'required',
                 'port_of_departure' => 'required',
                 'cus_phone' => 'required|integer',
                 'cus_fax' => 'required|integer',
                 'shipping_id'  => 'required',
                 'inv_no'  => 'required',
                 'doc_date' => 'required',
                 'container_no' => 'required',
                 'etd' => 'required',
                 'eta' => 'required',
            ];
        }
    }

    protected $messages = [
        'customer_name.required' => 'กรุณาใส่ชื่อผู้รับปลายทาง',
        'cus_address.required' => 'กรุณาใส่ที่อยู่ปลายทาง',
        'cus_phone.required' => 'กรุณาใส่เบอร์โทร',
        'cus_phone.integer' => 'กรุณาระบุเป็นตัวเลข',
        'cus_fax.required' => 'กรุณาใส่เบอร์ fax',
        'cus_fax.integer' => 'กรุณาระบุเป็นตัวเลข',
        'prod_name.required' => 'กรุณาใส่ชื่อสินค้า',
        'prod_qty.required' => 'กรุณาใส่จำนวนสินค้าต่อชิ้น',
        'prod_qty.integer' => 'กรุณาระบุเป็นตัวเลข',
        'prod_qty_pkg.required' => 'กรุณาใส่จำนวนสินค้าต่อแพ็คเก็ต',
        'prod_qty_pkg.integer' => 'กรุณาระบุเป็นตัวเลข',
        'dis_gw.required' => 'กรุณาใส่น้ำหนักสุทธิของสินค้ากับแพ็คเก็ต',
        'dis_nw.required' => 'กรุณาใส่น้ำหนักสุทธิของสินค้า',
        'dis_gw.numeric' => 'กรุณาระบุเป็นตัวเลข',
        'dis_nw.numeric' => 'กรุณาระบุเป็นตัวเลข',
        'dis_height.required' => 'กรุณาใส่ความสูง',
        'dis_height.numeric' => 'กรุณาระบุเป็นตัวเลข',
        'dis_length.required' => 'กรุณาใส่ความยาว',
        'dis_length.numeric' => 'กรุณาระบุเป็นตัวเลข',
        'dis_width.required' => 'กรุณาใส่ความกว้าง',
        'dis_width.numeric' => 'กรุณาระบุเป็นตัวเลข',
        'ref_doc.required' => 'กรุณาใส่เอกสารอ้างอิง',
        'package_no.required' => 'กรุณาใส่หมายเลขแพ็คเก็ต',
        'package_type.required' => 'กรุณาเลือกชนิดแพ็คเก็ต',
        'port_of_departure.required' => 'กรุณาใส่ที่อยู่ต้นทาง',
        'shipping_id.required'  => 'กรุณาเลือกสายเรือ',
        'inv_no.required' => 'กรุณาใส่หมายเลข invoice',
        'doc_date.required' => 'กรุณาเลือกวันที่ออกเอกสาร',
        'container_no.required' => 'กรุณาใส่หมายเลขคอนเทนเนอร์',
        'etd.required' => 'กรุณาเลือกวันที่เรือออก',
        'eta.required' => 'กรุณาเลือกวันที่เรือถึงปลายทาง',
    ];

    public function save()
    {
        $rules = $this->rules();

        if ($rules) {
            $this->validate($rules, $this->messages);
        }
    }

    public function mount()
{
    $this->calculateCubicMeterPkg();
    $this->total_nw = 0;
    $this->total_gw = 0;
}
    
    public function render()
    {
        return view('livewire.product.product-form-page')
            ->extends('layouts.main')
            ->with(['cubic_meter_pkg' => $this->cubic_meter_pkg]);
    }

    public function updated($field)
    {
        if (in_array($field, ['dis_length', 'dis_width', 'dis_height'])) {
            $this->calculateCubicMeterPkg();
        }
    }

    public function calculateCubicMeterPkg()
    {
        $this->cubic_meter_pkg = $this->prod_qty*(($this->dis_length * $this->dis_width * $this->dis_height)  / 1000000);
        $this->cubic_meter_total_pkg = $this->cubic_meter_pkg * $this->prod_qty_pkg;
        $this->total_nw = $this->dis_nw * $this->prod_qty;
        $this->total_gw = $this->dis_gw * $this->prod_qty_pkg;
    }
}
