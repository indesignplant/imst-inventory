<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            $table->id();
            $table->string('no_po');
            $table->string('project');
            $table->date('date_po');
            $table->string('vendor_name');
            $table->string('vendor_address');
            $table->string('send_address');
            $table->string('code_product');
            $table->string('type_product');
            $table->string('name_product');
            $table->string('description');
            $table->integer('value_product');
            $table->integer('unit_price');
            $table->string('currency');
            $table->integer('total_amount');
            $table->string('latest');
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
        Schema::dropIfExists('pos');
    }
}