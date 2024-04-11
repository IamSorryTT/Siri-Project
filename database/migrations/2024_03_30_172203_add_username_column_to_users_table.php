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
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex('users_email_unique');
            $table->string('email')->nullable()->change();

            $table->string('username')->after('email_verified_at')->unique()->comment('ชื่อผู้ใช้งาน');
            $table->string('phone')->commet('เบอร์มือถือ')->after('remember_token');
            $table->string('address')->comment('ที่อยู่')->after('phone');
            $table->string('avatar')->nullable()->comment('รูป');
            $table->tinyInteger('type')->default(2)->comment('1-Admin 2-Checker')->after('avatar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->unique()->change();

            $table->string('username');
            $table->string('phone');
            $table->string('address');
            $table->string('avatar');
            $table->tinyint('type');
        });
    }
};
