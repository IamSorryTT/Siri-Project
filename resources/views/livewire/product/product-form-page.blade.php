<div>
    <br/>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">เมนูรับเข้าสินค้า</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <div class="row">
                            <div class="col-12 col-md-15">
                                <div class="form-group">
                                    <label for="customer_name">ผู้รับปลายทาง :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('customer_name') is-invalid @enderror" 
                                        placeholder="กรุณาระบุชื่อผู้รับปลายทาง" 
                                        wire:model="customer_name"/>
                                    @error('customer_name')
                                    <div id="customer_name_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-15">
                                <div class="form-group">
                                    <label for="cus_address">ที่อยู่ปลายทาง :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('cus_address') is-invalid @enderror" 
                                        placeholder="กรุณาระบุที่อยู่ปลายทาง" 
                                        wire:model="cus_address"/>
                                    @error('cus_address')
                                    <div id="cus_address_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-15">
                                <div class="form-group">
                                    <label for="port_of_departure">ที่อยู่ต้นทาง :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('port_of_departure') is-invalid @enderror" 
                                        placeholder="กรุณาระบุที่อยู่ต้นทาง" 
                                        wire:model="port_of_departure"/>
                                    @error('port_of_departure')
                                    <div id="port_of_departure" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="cus_address">เบอร์โทรศัพท์ (ผู้รับ) :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('cus_phone') is-invalid @enderror" 
                                        placeholder="กรุณาระบุเบอร์โทรศัพท์" 
                                        wire:model="cus_phone"/>
                                    @error('cus_phone')
                                    <div id="cus_phone_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="cus_fax">เบอร์ Fax :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('cus_fax') is-invalid @enderror" 
                                        placeholder="กรุณาระบุเบอร์ Fax" 
                                        wire:model="cus_fax"/>
                                    @error('cus_fax')
                                    <div id="cus_fax_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="shipping_id">สายเรือที่ใช้ :</label>
                                    <select
                                        class="form-control @error('shipping_id') is-invalid @enderror" 
                                        wire:model="shipping_id">
                                        <option value="">-- กรุณาเลือกสายเรือ --</option>
                                    </select>
                                    @error('shipping_id')
                                    <div id="shipping_id_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="inv_no">หมายเลข INV No. :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('inv_no') is-invalid @enderror" 
                                        placeholder="กรุณาระบุหมายเลข INV No." 
                                        wire:model="inv_no"/>
                                    @error('inv_no')
                                    <div id="inv_no_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="doc_date">วันที่ออกเอกสาร :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('doc_date') is-invalid @enderror" 
                                        placeholder="กรุณาระบุวันที่ออกเอกสาร" 
                                        wire:model="doc_date"/>
                                    @error('doc_date')
                                    <div id="doc_date_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="container_no">เลขคอนเทนเนอร์ :</label>
                                    <input
                                        type="text"
                                        class="form-control @error('container_no') is-invalid @enderror" 
                                        placeholder="กรุณาระบุเลขคอนเทนเนอร์" 
                                        wire:model="container_no"/>
                                    @error('container_no')
                                    <div id="container_no_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="etd">ประมาณการวันเรือออก (ETD) :</label>
                                    <input
                                        type="date"
                                        class="form-control @error('etd') is-invalid @enderror" 
                                        placeholder="กรุณาระบุประมาณการวันเรือออก" 
                                        wire:model="etd"/>
                                    @error('etd')
                                    <div id="etd_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="eta">ประมาณการเรือถึงปลายทาง (ETA) :</label>
                                    <input
                                        type="date"
                                        class="form-control @error('eta') is-invalid @enderror" 
                                        placeholder="กรุณาระบุประมาณเรือถึงปลายทาง" 
                                        wire:model="eta"/>
                                    @error('eta')
                                    <div id="eta_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
 <div class="col-12">
    <div class="card bg-light mb-12">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label for="prod_name">รายละเอียดสินค้า : </label>
                        <input
                            type="text"
                            class="form-control @error('prod_name') is-invalid @enderror" 
                            placeholder="กรุณาระบุรายละเอียดสินค้า" 
                            wire:model="prod_name"/>
                        @error('prod_name')
                        <div id="prod_name_validation" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="package_type">ประเภทการแพ็ค : </label>
                        <select
                            class="form-control @error('shipping_id') is-invalid @enderror" 
                            wire:model="shipping_id">
                            <option value="">-- กรุณาเลือกสายเรือ --</option>
                        </select>
                        @error('shipping_id')
                        <div id="shipping_id_validation" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="package_no">หมายเลขแพ็คเก็ต : </label>
                        <input
                            type="text"
                            class="form-control @error('package_no') is-invalid @enderror" 
                            placeholder="กรุณาระบุหมายเลขแพ็คเก็ต" 
                            wire:model="package_no"/>
                        @error('package_no')
                        <div id="package_no_validation" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="ref_doc">เอกสารอ้างอิง : </label>
                        <input
                            type="text"
                            class="form-control @error('ref_doc') is-invalid @enderror" 
                            placeholder="กรุณาระบุเอกสารอ้างอิง" 
                            wire:model="ref_doc"/>
                        @error('ref_doc')
                        <div id="ref_doc_validation" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="prod_qty">จำนวนสินค้า (ต่อชิ้น) : </label>
                                    <input
                                        type="text"
                                        class="form-control @error('prod_qty') is-invalid @enderror" 
                                        placeholder="กรุณาระบุจำนวนสินค้า" 
                                        wire:model="prod_qty"
                                        wire:change="calculateCubicMeterPkg"/>
                                    @error('prod_qty')
                                    <div id="prod_qty_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="prod_qty_pkg">จำนวนแพ็คเก็ต : </label>
                                    <input
                                        type="text"
                                        class="form-control @error('prod_qty_pkg') is-invalid @enderror" 
                                        placeholder="กรุณาระบุจำนวนแพ็คเก็ต" 
                                        wire:model="prod_qty_pkg"/>
                                    @error('prod_qty_pkg')
                                    <div id="prod_qty_pkg_validation" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <label for="prod_picture">รูป</label>
                                    <input
                                        type="file"
                                        class="form-control" 
                                        wire:model="prod_picture"/>
                                </div>
                            </div>
                        </div>
<div class="row justify-content-center mt-6">
    <div class="card col-12 col-md-6" style="max-width: 370px;">
        <div class="card-header">
            คำนวณ DIMENSION
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-md-5 col-form-label">ความกว้าง (CM) :</label>
                <div class="col-md-7">
                    <input
                        type="text"
                        class="form-control @error('dis_width') is-invalid @enderror" 
                        placeholder="กรุณาระบุความกว้าง" 
                        wire:model="dis_width"
                        wire:change="calculateCubicMeterPkg"/>
                    @error('dis_width')
                    <div id="dis_width_validation" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label">ความยาว (CM) :</label>
                <div class="col-md-7">
                    <input
                        type="text"
                        class="form-control @error('dis_length') is-invalid @enderror" 
                        placeholder="กรุณาระบุความยาว" 
                        wire:model="dis_length"
                         wire:change="calculateCubicMeterPkg"/>
                    @error('dis_length')
                    <div id="dis_length_validation" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-5 col-form-label">ความสูง (CM) :</label>
                <div class="col-md-7">
                    <input
                        type="text"
                        class="form-control @error('dis_height') is-invalid @enderror" 
                        placeholder="กรุณาระบุความสูง" 
                        wire:model="dis_height"
                         wire:change="calculateCubicMeterPkg"/>
                    @error('dis_height')
                    <div id="dis_height_validation" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="card col-12 col-md-6 ml-5" style="max-width: 350px;">
    <div class="card-header">
        คำนวณ CBM (Cubic Meter)
    </div>
<div class="card-body">
    <div class="col-12 col-md-10">
        <div class="form-group">
            <label for="cubic_meter_pkg" class="d-inline-block">คิวบิกเมตร (ต่อแพ็คเก็ต) : {{ $cubic_meter_pkg }}</label>
        </div>
    </div>
            <div class="col-12 col-md-10">
                <div class="form-group">
                    <label for="cubic_meter_total_pkg">คิวบิกเมตร (แพ็คเก็ตทั้งหมด) : {{$cubic_meter_total_pkg}}</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12 col-md-3 mr-5">
        <div class="form-group">
            <label for="dis_nw">N.W. (KG) : </label>
            <input
                type="text"
                class="form-control @error('dis_nw') is-invalid @enderror" 
                placeholder="กรุณาระบุ N.W." 
                wire:model="dis_nw"
                wire:change="calculateCubicMeterPkg"/>
                
            @error('dis_nw')
            <div id="dis_nw_validation" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-12 col-md-3">
        <div class="form-group">
            <label for="dis_gw">G.W (KG) : </label>
            <input
                type="text"
                class="form-control @error('dis_gw') is-invalid @enderror" 
                placeholder="กรุณาระบุ G.W." 
                wire:model="dis_gw"
                wire:change="calculateCubicMeterPkg"/>
            @error('dis_gw')
            <div id="dis_gw_validation" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-3 mr-5">
                                <div class="form-group">
                                    <label for="total_nw">TOTAL (N.W.) : {{$total_nw}}</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="form-group">
                                    <label for="total_gw">TOTAL (G.W.) : {{$total_gw}}</label>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
                                <div class="form-group text-center">
                            <button type="submit" class="btn btn-md btn-primary">
                                บันทึกข้อมูล
                            </button>
                        </div>
    </div>
                    </form>
                </div>
            </div>
            <div wire:loading wire:target="save" wire:loading.class="overlay" wire:loading.flex style="display: none;">
    <div class="d-flex justify-content-center align-items-center">
        <i class="fas fa-2x fa-sync fa-spin"></i>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
