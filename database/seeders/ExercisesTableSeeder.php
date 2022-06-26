<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'test1@example.com',
            'profile' => 'test'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
    }
}
