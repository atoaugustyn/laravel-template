<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        DB::table('roles')->insert([
            'name' => 'Administrator'
        ]);

        DB::table('roles')->insert([
            'name' => 'Editor'
        ]);

        DB::table('roles')->insert([
            'name' => 'Viewer'
        ]);
    }
}
