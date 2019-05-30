<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            	'title'=>'Weddings', 
            	'is_active' => '1',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Corporate Events', 
            	'is_active' => '1',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Birthdays', 
            	'is_active' => '1',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'KidsParty', 
            	'is_active' => '1',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Theme Parties', 
            	'is_active' => '1',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Misceaneous Parties', 
            	'is_active' => '1',
            	'created_at'=>date('Y-m-d H:i:s')
            ],
        ]);
    }
}
