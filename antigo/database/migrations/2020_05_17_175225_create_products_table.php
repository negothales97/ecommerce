<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('slug');
            $table->string('meta_title');
            $table->string('meta_description');

            $table->integer('show')->default(0);
            $table->integer('primary')->default(0);
            $table->integer('new')->default(0);
            $table->integer('sale')->default(0);
            $table->double('has_free_shipping')->default(0);
            
            $table->double('promotional_price')->nullable();
            $table->double('price')->nullable();
            $table->double('stock')->nullable();
            $table->double('weight')->nullable();
            $table->double('depth')->nullable();
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
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
        Schema::dropIfExists('products');
    }
}
