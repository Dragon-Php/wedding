<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
            	'key'=>'address',
                'value'=>'234, Second Floor, Rising TowerKarol Bagh, New Delhi - 110002', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'contact_email',
                'value'=>'info@weddingcompany.com', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'contact_number',
                'value'=>'+91-766571118', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'fb_share_link',
                'value'=>'#', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'tw_share_link',
                'value'=>'#', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'Admin',
                'value'=>'admin', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'ln_share_link',
                'value'=>'#', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],[
            	'key'=>'copyright',
                'value'=>'Copyright © 2019 Wedding Event comapny', 
                'is_active'=>'1', 
            	'created_at'=>date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
