<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
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
        $roles = [
            ['name' => 'Administrator'],
            ['name' => 'Moderator'],
            ['name' => 'Viewer'],
            ['name' => 'Editor'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role['name']
            ]);
        }
    }
}
