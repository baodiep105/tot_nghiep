<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('full_name')->nullable();
            $table->string('sdt')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('hash');
            $table->integer('is_email');
            $table->longtext('dia_chi')->nullable();
            $table->integer('is_block')->default(1);
            $table->integer('id_loai');
            $table->string('reset_password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
