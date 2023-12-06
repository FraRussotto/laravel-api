<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tecnology;
use Illuminate\Support\Str;


class TecnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Html', 'CSS', 'JavaScript', 'VueJS', 'Angular', 'Laravel', 'React', 'NodeJS'];

        foreach ($data as $item) {
            $new_tipology = new Tecnology();
            $new_tipology->name = $item;
            $new_tipology->slug = Str::slug($item, '-');

            $new_tipology->save();
        }
    }
}
