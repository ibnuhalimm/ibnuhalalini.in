<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LatestPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2022-05-08 03:12:04',
                'updated_at' => '2022-05-08 03:12:04',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-08 03:12:05',
                'updated_at' => '2022-05-08 03:12:05',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_guests',
                'table_name' => 'guests',
                'created_at' => '2022-05-10 17:39:58',
                'updated_at' => '2022-05-10 17:39:58',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_guests',
                'table_name' => 'guests',
                'created_at' => '2022-05-10 17:39:58',
                'updated_at' => '2022-05-10 17:39:58',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_guests',
                'table_name' => 'guests',
                'created_at' => '2022-05-10 17:39:58',
                'updated_at' => '2022-05-10 17:39:58',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_guests',
                'table_name' => 'guests',
                'created_at' => '2022-05-10 17:39:58',
                'updated_at' => '2022-05-10 17:39:58',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_guests',
                'table_name' => 'guests',
                'created_at' => '2022-05-10 17:39:58',
                'updated_at' => '2022-05-10 17:39:58',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_wishes',
                'table_name' => 'wishes',
                'created_at' => '2022-05-10 19:37:24',
                'updated_at' => '2022-05-10 19:37:24',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_wishes',
                'table_name' => 'wishes',
                'created_at' => '2022-05-10 19:37:24',
                'updated_at' => '2022-05-10 19:37:24',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_wishes',
                'table_name' => 'wishes',
                'created_at' => '2022-05-10 19:37:24',
                'updated_at' => '2022-05-10 19:37:24',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_wishes',
                'table_name' => 'wishes',
                'created_at' => '2022-05-10 19:37:24',
                'updated_at' => '2022-05-10 19:37:24',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_wishes',
                'table_name' => 'wishes',
                'created_at' => '2022-05-10 19:37:24',
                'updated_at' => '2022-05-10 19:37:24',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_wedding_gifts',
                'table_name' => 'wedding_gifts',
                'created_at' => '2022-05-12 06:20:35',
                'updated_at' => '2022-05-12 06:20:35',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_wedding_gifts',
                'table_name' => 'wedding_gifts',
                'created_at' => '2022-05-12 06:20:35',
                'updated_at' => '2022-05-12 06:20:35',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_wedding_gifts',
                'table_name' => 'wedding_gifts',
                'created_at' => '2022-05-12 06:20:35',
                'updated_at' => '2022-05-12 06:20:35',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_wedding_gifts',
                'table_name' => 'wedding_gifts',
                'created_at' => '2022-05-12 06:20:35',
                'updated_at' => '2022-05-12 06:20:35',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_wedding_gifts',
                'table_name' => 'wedding_gifts',
                'created_at' => '2022-05-12 06:20:35',
                'updated_at' => '2022-05-12 06:20:35',
            ),
        ));
        
        
    }
}