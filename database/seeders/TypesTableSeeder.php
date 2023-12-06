<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Front End', 'Back End', 'UX', 'Design'];

        foreach ($data as $item) {
            $new_tipology = new Type();
            $new_tipology->name = $item;
            $new_tipology->slug = Str::slug($item, '-');
            $new_tipology->save();
        }
    }
}
