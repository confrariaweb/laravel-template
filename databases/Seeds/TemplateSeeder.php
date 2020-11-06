<?php

namespace ConfrariaWeb\Template\Databases\Seeds;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $data = [];
        /*$data['templates'] = [
            [
                'title' => 'Argon Dashboard',
                'user_id' => User::inRandomOrder()->first()->id,
                'load_views_from' => 'templateDashboardArgon',
                'status' => 1
            ],
            [
                'title' => 'Colugo',
                'user_id' => User::inRandomOrder()->first()->id,
                'load_views_from' => 'templateColugo',
                'status' => 1
            ]
        ];*/

        foreach ($data as $table => $inserts) {
            foreach ($inserts as $insert) {
                DB::table($table)->insert($insert);
            }
        }

    }

}