<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
            'title' => 'Belajar Model Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'image' => 'https://via.placeholder.com/640x480.png/00ff77?text=Belajar Model',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
                ]
            ];
        DB::table('posts')->insert($data);
    }
}
