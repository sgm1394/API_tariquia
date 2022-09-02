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
            $table->string('ci')->unique();
            $table->string('name')->nullable(false);
            $table->string('lastname')->nullable(false);
            $table->date('f_n')->nullable(false);
            $table->enum('genero',['M','F']);
            $table->string('id_rol')->nullable(false);
            $table->string('id_carrera')->nullable();
            $table->string('id_materia')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
