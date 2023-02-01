<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\character;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/seeders/ricky.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Character::create([
                    "name" => $data['0'],
                    "status" => $data['1'],
                    "species" => $data['2'],
                    "type" => $data['3'],
                    "gender" => $data['4'],
                    "image" => $data['5'],
                    "episodes" => $data['6'],
                    "created"=>$data['7']

                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
        // \App\Models\User::factory(10)->create();
    }
}
