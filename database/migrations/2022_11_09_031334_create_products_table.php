<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('sku');
            $table->string('name');
            $table->string('model_no')->nullable();
            $table->integer('manufacturer_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->string('product_title');
            $table->string('feature_image')->nullable()->default(4);
            $table->longText('short_description');
            $table->longText('long_description');
            $table->longText('specification')->default(4);
            $table->string('warranty');
            $table->string('product_condition');
            $table->string('vat_status');
            $table->decimal('price',10,2);
            $table->decimal('discount',10,2);
            $table->integer('qty')->default(1);
            $table->integer('max_qty')->nullable()->default(4);
            $table->softDeletes();
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
};
