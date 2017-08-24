<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('side');
            $table->integer('occupancy');
            $table->string('street');
            $table->string('street_num');
            $table->string('city_zip');
            $table->string('state');
            $table->string('mls_num');
            $table->integer('asset_manager');
            $table->integer('loan_number');
            $table->string('lockbox_number');
            $table->string('key_number');
            $table->string('sign_type');
            $table->string('sale_type');
            $table->integer('category');
            $table->integer('dom');
            $table->date('list_date');
            $table->date('expire_date');
            $table->date('pending_date');
            $table->date('settle_date');
            $table->string('initial_bpo');
            $table->decimal('list');
            $table->decimal('sale_current');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_properties');
    }
}
