<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'date' => '2022-02-18',
                'title' => 'Menjadi Utuh Dan Asli',
                'body' => 'Ini Adalah Body dari Blog Ini',
                'author' => 'Pdt. Louis Labobar',
            ],
            [
                'date' => '2022-02-20',
                'title' => 'On Fire, not Burnout',
                'body' => 'Ini Adalah Body dari Blog Ini',
                'author' => 'Pdt. Fresa Mikhael',
            ],
        ];

        foreach ($user as $key => $value) {
            Blog::create($value);
        }
    }
}
