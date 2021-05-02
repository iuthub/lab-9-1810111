<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    public function run()
    {
        $tag = new \App\Tag();
        $tag->name = 'Tutorial';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = 'Industry News';
        $tag->save();
    }
}