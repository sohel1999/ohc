<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('full_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('token')->nullable();
            $table->enum('role',['admin','patient','doctors'])->default('patient');
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
             $table->date('birth_date')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->decimal('fee')->nullable();
            $table->foreignId('hospital_id')->nullable();
            $table->string('profile_pic')->nullable();
            $table->date('doctor_set')->nullable();
            $table->time('time')->nullable();
            $table->boolean('is_doctor_notify')->default(false);
            $table->text('bio')->nullable();
            $table->string('status',16)->default('active');
            $table->string('password');
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
