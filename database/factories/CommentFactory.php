<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    $post = App\Post::get()->random();
    $video = App\Video::get()->random();

    $collection = collect([$post,$video]);
    $random_object = $collection->random();

    return [
        'comment'=>$faker->paragraph(),
        'comment_table_type'=> get_class($random_object),
        'comment_table_id' => $random_object->id
    ];
});
