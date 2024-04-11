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
        Schema::create('order_headers', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no')->nullable()->comment('หมายเลข Invioce');
            $table->date('doc_date')->comment('วันที่ออกเอกสาร');
            $table->foreignId('shipping_id')->references('id')->on('shipping_lines')->onDelete('cascade');
            $table->foreignId('cus_id')->referecnces('id')->on('customers')->onDelete('cascade');
            $table->string('container_no')->comment('หมายเลขตู้คอนเทนเนอร์');
            $table->string('port_of_departure')->comment('สายเรือต้นทาง');
            $table->string('etd')->comment('ประมาณการวันเรือออก');
            $table->string('eta')->comment('ประมาณการวันเรือถึงปลายทาง');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_headers');
    }
};
