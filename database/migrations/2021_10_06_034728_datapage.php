<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datapage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapage', function (Blueprint $table) {
            $table->id();
            $table->integer('page'); 
            $table->integer('totalPages'); 
            $table->integer('totalResults'); 
            $table->string('type'); 
            $table->integer('count'); 
            $table->json('items')->nullable();  
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
        Schema::dropIfExists('datapage');
    }
}
