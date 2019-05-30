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
                'slug'=>'weddings', 
            	'is_active' => '1',
                'image' => 'images/category/Category_1.jpg',
                'icon' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Corporate Events', 
                'slug'=>'corporate_events', 
            	'is_active' => '1',
                'image' => 'images/category/Category_2.jpg',
                'icon' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Birthdays', 
                'slug'=>'birthdays', 
            	'is_active' => '1',
                'image' => 'images/category/Category_3.jpg',
                'icon' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'KidsParty', 
                'slug'=>'kidsparty', 
            	'is_active' => '1',
                'image' => 'images/category/Category_4.jpg',
                'icon' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Theme Parties', 
                'slug'=>'theme_parties', 
            	'is_active' => '1',
                'image' => 'images/category/Category_5.jpg',
                'icon' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Misceaneous Parties', 
                'slug'=>'misceaneous_parties', 
            	'is_active' => '1',
                'image' => 'images/category/Category_6.jpg',
                'icon' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],
        ]);
    }
}
