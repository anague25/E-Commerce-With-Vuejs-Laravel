<?php

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_product', function (Blueprint $table) {
           $table->foreignIdFor(Order::class)->constrained()->onDelete('cascade');
           $table->foreignIdFor(Product::class)->constrained()->onDelete('cascade');

           $table->primary(['order_id','product_id']);

           $table->integer('total_quantity');
           $table->integer('total_price');
           
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
