<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('device_id')->nullable();
            $table->integer('manufacture_id')->nullable();
            $table->integer('repair_id')->nullable();
            $table->string('title')->nullable();
            $table->longText('sub_title')->nullable();
            $table->longText('description')->nullable();
            $table->float('real_price', 8, 2)->nullable();
            $table->float('sale_price', 8, 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->string('status')->nullable();
            $table->string('seo_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('repair_products');
    }
}
