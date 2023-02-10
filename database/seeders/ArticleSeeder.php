<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nb_articles = 25;
        $faker = Factory::create();

        for ($i=0; $i < $nb_articles; $i++) { 
            Article::create([
                'title' => $faker->sentence(6),
                'subtitle' => $faker->sentence(8),
                'content' => $faker->text(600)
            ]);
        }
    }
}
