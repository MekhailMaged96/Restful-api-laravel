<?php

use Faker\Generator as Faker;
use App\Products;
$factory->define(App\Review::class, function (Faker $faker) {
    return [

        'product_id'=>function(){

            return Products::all()->random();
        },
        'customer' =>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5),
    ];
});
