<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('cus_id')->referecnces('id')->on('customers')->onDelete('cascade');
            $table->foreignId('order_header_id')->referecnces('id')->on('order_headers')->onDelete('cascade');
            $table->string('prod_name')->comment('ชื่อสินค้า');
            $table->integer('prod_qty')->comment('จำนวนสินค้า');
            $table->integer('prod_qty_pkg')->comment('จำนวนแพ็คเก็ต');
            $table->integer('total_gw')->comment('น้ำหนักสุทธิของสินค้ารวมกับบรรจุภัณฑ์');
            $table->integer('total_nw')->comment('น้ำหนักสุทธิรวม');
            $table->integer('dis_gw')->comment('แสดงผลน้ำหนัก');
            $table->integer('dis_nw')->comment('แสดงผลน้ำหนัก');
            $table->integer('total_vol_result');
            $table->integer('dis_height');
            $table->integer('dis_length');
            $table->integer('dis_width');
            $table->string('prod_picture')->nullable()->comment('รูปสินค้า');
            $table->string('prod_qr_code')->comment('QRcode');
            $table->string('ref_doc')->comment('เอกสารอ้างอิง');
            $table->string('package_no')->comment('หมายเลขแพ็คเก็ต');
            $table->string('package_type')->comment('ประเภทของแพ็คเก็ต');
            $table->string('prod_status')->comment('สถานะสินค้า');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
