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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->comment('ชื่อลูกค้า');
            $table->string('cus_email')->nullable()->comment('อีเมลล์');
            $table->string('cus_phone')->nullable()->comment('เบอร์โทรศัพท์');
            $table->string('cus_address')->comment('ที่อยู่ลูกค้า');
            $table->string('cus_country')->references('id')->on('countries')->onDelete('cascade');
            $table->boolean('cus_status')->default(true)->comment('สถานะ True-เป็นลูกค้าเราอยู่ False-ไม่ได้เป็นลูกค้าเราแล้ว');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
