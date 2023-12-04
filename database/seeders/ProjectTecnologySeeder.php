<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ad ogni ciclo estraggo random un project e un tecnology li metto in relazione
        for ($i=0; $i < 100; $i++) {
            // estraggo un post
            $tecnology = Tecnology::inRandomOrder()->first();

            //estraggo id del tag random
            $project_id = Project::inRandomOrder()->first()->id;

            dump($tecnology->id);
            dump($project_id->id);
        }
    }
}
