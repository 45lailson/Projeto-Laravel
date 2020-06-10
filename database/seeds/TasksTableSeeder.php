<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class)->create([
            'name'=>'Estudar Php',
            'complete'=>false
        ]);

        factory(App\Task::class)->create([
            'name'=>'Estudar laravel',
            'complete'=>true
        ]);

        factory(App\Task::class)->create([
            'name'=>'Estudar Php5',
            'complete'=>false
        ]);
    }
}
