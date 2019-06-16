<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
            	'name'=>'Admin',
                'guard_name'=>'admin', 
            	'created_at'=>date('Y-m-d H:i:s'),
            	'updated_at'=>date('Y-m-d H:i:s')
            ],[
            	'name'=>'User',
                'guard_name'=>'web', 
            	'created_at'=>date('Y-m-d H:i:s'),
            	'updated_at'=>date('Y-m-d H:i:s')
            ],[
            	'name'=>'Vendor',
                'guard_name'=>'vendor', 
            	'created_at'=>date('Y-m-d H:i:s'),
            	'updated_at'=>date('Y-m-d H:i:s')
            ],
        ]);
    }
}
