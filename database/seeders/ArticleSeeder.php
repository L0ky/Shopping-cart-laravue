<?php

namespace Database\Seeders;

use App\Models\Articles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use Illuminate\Support\Facades\Storage;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articles::truncate();

        $json = Storage::disk('local')->get("/json/articles.json");
        $articles = json_decode($json, true);

        foreach ($articles as $article) {
            Articles::query()->updateOrCreate([
                "name" => $article['name'],
                "price" => $article['price'],
                "image" => $article['image']
            ]);
        }
    }
}
