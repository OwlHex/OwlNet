<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnExceprtToUsers extends Migration
{
    /**
     * Run the migrations.
     * php artisan make:migration add_column_exceprt_to_users --table="users"

     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->integer('age');
            $table->string('gender', 10);
            $table->integer('role'); 
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
