<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
            	'title'=>'Blog Test ',
            	'auther'=>'Author Blog Test ',
                'short_description'=>'weddings', 
            	'is_active' => '1',
                'image' => 'images/page/Page_1.jpg',
                'description' => 'Test',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Blog Test ', 
            	'auther'=>'Author Blog Test ', 
                'short_description'=>'You will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS with a link to download the WedMeGood App for freeYou will receive an SMS', 
            	'is_active' => '1',
                'image' => 'images/category/Category_2.jpg',
                'description' => '<h2>Who We Are?</h2>

					<p>Sugar, spice and everything nice! WedMeGood is a team of powerpuff humans, that link their professional expertise to their personal love for weddings.We work at weddings, from weddings, for weddings. So sit back, log on to WedMeGood, and feed all your whims and fancies!</p>',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Blog Test ', 
            	'auther'=>'Author Blog Test ', 
                'short_description'=>'birthdays', 
            	'is_active' => '1',
                'image' => 'images/category/Category_3.jpg',
                'description' => '<p>Our management has created this Privacy Statement (Policy) in order to demonstrate our firm commitment to help our users better understand what information we collect about them and what may happen to that information. The terms &quot;We, WedMeGood, Us&quot; refer to Wedmegood.com and the terms &quot;You, Your&quot; refer to a user of Wedmegood.com. In the course of our business of helping our viewers plan their wedding, we collect certain information from you. In the course of registering for and availing various services we provide from time to time through our website: WedMeGood, you may be required to give your Name, address, Email address, phone number. The Personal Information is used for three general purposes: to customize the content you see, to fulfill your requests for certain services, and to contact you about our services. Unless otherwise stated explicitly, this Policy applies to Personal Information as disclosed on any of the Media.</p>',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Blog Test ', 
            	'auther'=>'Author Blog Test ', 
                'short_description'=>'Ditch The Dupatta! Here Are Some Cool New Ideas Instead!', 
            	'is_active' => '1',
                'image' => 'images/category/Category_4.jpg',
                'description' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Blog Test ', 
            	'auther'=>'Author Blog Test ', 
                'short_description'=>'Mehndi Designs for 2019 Brides : 100+ Unique Designs', 
            	'is_active' => '1',
                'image' => 'images/category/Category_5.jpg',
                'description' => 'images/category/Icon_1.png',
            	'created_at'=>date('Y-m-d H:i:s')
            ],[
            	'title'=>'Blog Test ', 
            	'auther'=>'Author Blog Test ', 
                'short_description'=>'misceaneous_parties', 
            	'is_active' => '1',
                'image' => 'images/category/Category_6.jpg',
                'description' => '<h2>Vendors</h2>

						<p>If you are a registered vendor or a business looking to promote your brand on our portal, please send in your queries at vendors@wedmegood.com</p>',
            	'created_at'=>date('Y-m-d H:i:s')
            ],
        ]);
    }
}
