<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LatestRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'superadmin',
                'display_name' => 'Administrator',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-12 09:18:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-12 09:18:28',
            ),
        ));
        
        
    }
}