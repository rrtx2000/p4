<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemListnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_listname', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->integer('item_id')->unsigned();
            $table->integer('listname_id')->unsigned();
    
            # Make foreign keys
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('listname_id')->references('id')->on('listnames');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_listname');
    }
}
