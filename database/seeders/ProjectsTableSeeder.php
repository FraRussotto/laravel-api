<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('projects');
        foreach ($projects as $project) {
            $new_projects = new Project();
            $new_projects->type_id = Type::inRandomOrder()->first()->id;
            $new_projects->name = $project['name'];
            $new_projects->slug = Project::generateSlug($new_projects['name']);
            $new_projects->date = $project['date'];
            $new_projects->description = $project['description'];
            $new_projects->link = $project['link'];

            $new_projects->save();
        }
    }
}
