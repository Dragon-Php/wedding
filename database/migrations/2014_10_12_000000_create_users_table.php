<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('contact')->unsigned();
            $table->string('city', 191)->nullable();
            $table->enum('isAdmin', ['0', '1'])->default('0');
            $table->isActive(['In Active', 'Active'])->default('0');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert(
            [
                array(
                    'name' => 'Admin Kumar',
                    'email' => 'admin@gmail.com',
                    'contact' => '9846464584',
                    'password' => bcrypt('admin123'),
                    'isAdmin'=>'1',
                    'is_active'=>'1',
                    'slug' => substr(strtoupper(str_replace(' ', '', 'Admin Kumar')), 0, 6).rand(10000, 100000),
                ),
    
                array(
                    'name' => 'User Kumar',
                    'email' => 'user@gmail.com',
                    'contact' => '9846464584',
                    'password' => bcrypt('admin123'),
                    'isAdmin'=>'0',
                    'is_active'=>'1',
                    'slug' => substr(strtoupper(str_replace(' ', '', 'User Kumar')), 0, 6).rand(10000, 100000),
                ),
    
                array(
                    'name' => 'Vendor Kumar',
                    'email' => 'vendor@gmail.com',
                    'contact' => '9846464584',
                    'password' => bcrypt('admin123'),
                    'isAdmin'=>'0',
                    'is_active'=>'1',
                    'slug' => substr(strtoupper(str_replace(' ', '', 'Vendor Kumar')), 0, 6).rand(10000, 100000),
                )
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
