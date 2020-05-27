<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            
            $table->double('price')->nullable();
            $table->double('stock')->nullable();
            $table->double('weight')->nullable();
            $table->double('depth')->nullable();
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            

            $table->integer('show')->default(1);
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('product_variations');
    }
}
