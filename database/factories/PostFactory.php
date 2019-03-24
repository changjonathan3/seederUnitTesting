<?php
/**
 * Created by PhpStorm.
 * User: chang
 * Date: 3/23/2019
 * Time: 11:07 PM
 */

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});