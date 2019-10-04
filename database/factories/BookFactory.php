<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        "title" => $faker -> word,
        "description" => $faker -> sentence(3,true),
        "author" => $faker -> name
    ];
});
