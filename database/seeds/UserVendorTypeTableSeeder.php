<?php

use Illuminate\Database\Seeder;

class UserVendorTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_vendor_type')->insert([
            [
            	'vendor_type_id'=>'1',
                'user_id'=>'3', 
            ],[
            	'vendor_type_id'=>'2',
                'user_id'=>'3',
            ],
        ]);
    }
}
