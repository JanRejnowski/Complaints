<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->string('uuid',45)->unique();
            $table->integer('user_id')->unsigned();
            $table->string('status',45);
            $table->string('complaint_number',45);
            $table->string('order_number',45);
            $table->string('order_name',45);
            $table->string('customer',45);
            $table->integer('qty_total');
            $table->decimal('total_cost',10,2)->default('0.00');
            $table->decimal('total_price',10,2)->default('0.00');
            $table->string('invoice_number',45)->nullable();
            $table->string('currency',45);
            $table->decimal('currency_rate',10,2)->default('0.00');
            $table->longText('description');
            $table->string('claim',45);
            $table->tinyInteger('run_return');
            $table->decimal('discount',10,2)->default('0.00');
            $table->integer('qty_repair')->default('0');
            $table->decimal('unit_price',10,2)->default('0.00');
            $table->decimal('percentage',10,2)->default('0.00');
            $table->decimal('estimated_cost',10,2)->default('0.00');
            $table->longText('desc_cost')->nullable();
            $table->decimal('prime_income',10,2)->default('0.00');
            $table->decimal('total_discount',10,2)->default('0.00');
            $table->decimal('balance',10,2)->default('0.00');
            $table->tinyInteger('quality_control_claim_approved')->nullable()->default('0');
            $table->decimal('spedition_cost_run_return',10,2)->nullable()->default('0.00');
            $table->string('shipping_method',45)->nullable();
            $table->tinyInteger('sales_director_approved')->nullable()->default('0');
            $table->longText('sales_director_desc')->nullable();
            $table->tinyInteger('ceo_approved')->nullable()->default('0');
            $table->longText("ceo_desc")->nullable();
            $table->tinyInteger('spedition_confirm_return')->nullable()->default('0');
            $table->string('correction_invoice_number',45)->nullable();
            $table->decimal('correction_invoice_cost',10,2)->nullable()->default('0.00');
            $table->string('sales_new_order_number',45)->nullable();

            $table->foreign('user_id')
                  ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
