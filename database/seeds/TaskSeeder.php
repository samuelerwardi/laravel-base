<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i <= 10; $i++){
            \Illuminate\Support\Facades\DB::table('tasks')->insert([
                'user_id' => 1,
                'task' => \Illuminate\Support\Str::random(10),
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
