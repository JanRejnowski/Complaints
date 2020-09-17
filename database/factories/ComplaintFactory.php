<?php

/** @var Factory $factory */

use App\Complaint;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\DB;

$factory->define(Complaint::class, function (Faker $faker) {
    return [
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'uuid' => $faker->unique()->uuid,
        'user_id' => random_int(DB::table('users')->min('id'), DB::table('users')->max('id')),
        'status' => $faker->asciify("*********"),
        'complaint_number' => (string)$faker->randomNumber(),
        'order_number' => $faker->numerify("AA #####"),
        'order_name' => $faker->text(20),
        'customer' => $faker->word,
        'qty_total' => $faker->numberBetween(1,100000),
        'total_cost' => $faker->randomFloat(2, 200, 500000),
        'total_price' => $faker->randomFloat(2, 200, 500000),
        'invoice_number' => $faker->numerify("BB #####"),
        'currency' => $faker->lexify("***"),
        'currency_rate' => $faker->randomFloat(2, 1, 6),
        'description' => $faker->text(200),
        'claim' => $faker->asciify("***************"),
        'run_return' => $faker->numberBetween(0,1),
        'discount' => $faker->randomFloat(2,0,50000),
        'qty_repair' => $faker->randomNumber(4),
        'unit_price' => $faker->randomFloat(2,0, 40),
        'percentage' => $faker->randomFloat(2,0,10),
        'estimated_cost' => $faker->randomFloat(2,0,100000),
        'desc_cost' => $faker->text(200),
        'prime_income' => $faker->randomFloat(2,0,500000),
        'total_discount' => $faker->randomFloat(2,0,50),
        'balance' => $faker->randomFloat(2,0,500000),
        'quality_control_claim_approved' => $faker->numberBetween(0,1),
        'spedition_cost_run_return' => $faker->randomFloat(2,0,10000),
        'shipping_method' => $faker->word,
        'sales_director_approved' => $faker->numberBetween(0,1),
        'sales_director_desc' => $faker->text(200),
        'ceo_approved' => $faker->numberBetween(0,1),
        'ceo_desc' => $faker->text(200),
        'spedition_confirm_return' => $faker->numberBetween(0,1),
        'correction_invoice_number' => $faker->numerify("CC #####"),
        'correction_invoice_cost' => $faker->randomFloat(2,0,10000),
        'sales_new_order_number' => $faker->numerify("DD #####")
    ];
});
