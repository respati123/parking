<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('email', 40)->unique();
            $table->string('phone');
            $table->string('register_date');
            $table->string('status');
            $table->string('created_at');
            $table->string('created_by');
            $table->string('modifier_at');
            $table->string('modifier_by');

        });

        Schema::create('vehicles_type', function (Blueprint $table){
           $table->increments('id');
           $table->string('name');
            $table->string('created_at');
            $table->string('created_by');
            $table->string('modifier_at');
            $table->string('modifier_by');
        });

        Schema::create('vehicles_brand', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('created_at');
            $table->string('created_by');
            $table->string('modifier_at');
            $table->string('modifier_by');



        });

        Schema::create('vehicles', function (Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('plat_no')->unique();
            $table->string('created_at');
            $table->string('created_by');
            $table->string('modifier_at');
            $table->string('modifier_by');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');
            $table->foreign('type_id')
                ->references('id')
                ->on('vehicles_type')
                ->onDelete('cascade');
            $table->foreign('brand_id')
                ->references('id')
                ->on('vehicles_brand')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers','vehicles_type','vehicles_brand','user_has_vehicles_plat');
    }
}
