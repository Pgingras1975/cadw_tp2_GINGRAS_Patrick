<?php

namespace Database\Seeders;

use App\Models\Fait;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class FaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed avec factory
        // Fait::factory(20)->create();

        // seed avec fichier json
        $json = File::get("database/data/cat-facts.json");
        $facts = json_decode($json);

        foreach ($facts->data as $fact) {

                Fait::create([
                    "texte" => $fact->fact,
                    "length" => $fact->length
                ]);
        }
    }
}
