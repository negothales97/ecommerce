<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration_payments', function (Blueprint $table) {
            $table->id();
            $table->double('minimum_value_credit_card')->default(0.00);
            $table->integer('max_parcel')->nullable();
            $table->integer('max_interest')->nullable();
            $table->integer('boleto_active')->default();
            $table->double('minimum_value_boleto')->default(0.00);
            $table->integer('use_discount_boleto')->default(0);
            $table->double('percentage_discount_boleto')->default(0.00);
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
        Schema::dropIfExists('configuration_payments');
    }
}
