<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::insert([
            [
                'user_id'=>1,
                'name'=>'Stuart Harrison\'s Team',
                'personal_team'=>true
            ],
            [
                'user_id'=>2,
                'name'=>'Admin User\'s Team',
                'personal_team'=>true
            ],
            [
                'user_id'=>3,
                'name'=>'User\'s Team',
                'personal_team'=>true
            ],
        ]);
    }
}
