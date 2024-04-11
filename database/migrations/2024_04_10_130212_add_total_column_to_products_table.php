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
            $table->integer('cubic_meter_pkg')->comment('คิวบิกเมตรต่อแพ็คเก็ต');
            $table->integer('cubic_meter_total_pkg')->comment('คิวบิกเมตรต่อแพ็คเก็ตทั้งหมด');
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
