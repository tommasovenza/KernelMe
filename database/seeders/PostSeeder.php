<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                "title" => "Learning Laravel",
                "subtitle" => "Laravel",
                "tags" => "Laravel, Full Stack Development"
            ],
            [
                "title" => "10 Nes Games I like",
                "subtitle" => "Nes Awesome Games",
                "tags" => "NES, Nintendo Inc."
            ],
            [
                "title" => "Technologies I want to focus on!",
                "subtitle" => "In love with Laravel and Javascript",
                "tags" => "Laravel, Javascript, React, VueJS, CSS3, SCSS, Tailwind CSS",
            ]
        ];

        for ($i=0; $i <= 2; $i++) { 
            $randomNumber = rand(5, 15);
            // create
            Post::create([
                "title" => $data[$i]["title"],
                "subtitle" => $data[$i]["subtitle"],
                "slug" => Str::slug($data[$i]["title"]),
                "content" => "lorem ipsum sit dolor amet",
                "date" => Carbon::now(),
                "tags" => $data[$i]["tags"],
                "read_time" => "{$randomNumber} min"
            ]);
        }
    }
}
