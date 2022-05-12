<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LatestMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
        ));
        
        
    }
}