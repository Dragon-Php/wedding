<?php

use Illuminate\Database\Seeder;

class VendorTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendor_types')->insert([



			[
				'title' =>  'Event venues',
				'slug'=> 'event_venues',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_1.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Event Planners',
				'slug'=> 'event_planners',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_2.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Photographers',
				'slug'=> 'photographers',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_3.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Cakes',
				'slug'=> 'cakes',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_4.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Catering',
				'slug'=> 'catering',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_5.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Make up',
				'slug'=> 'make_up',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_6.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Bridal Wear',
				'slug'=> 'bridal_wear',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_7.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Groom Wear',
				'slug'=> 'Groom_wear',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_8.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Favours',
				'slug'=> 'favours',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_9.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Invitation Cards',
				'slug'=> 'invitation_cards',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_10.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'DJ´s',
				'slug'=> 'djs',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_11.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Cars',
				'slug'=> 'cars',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_12.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'MC',
				'slug'=> 'mc',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_13.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Coreographist',
				'slug'=> 'coreographist',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_14.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Event Decorators',
				'slug'=> 'event_decorators',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_15.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Florist',
				'slug'=> 'florist',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_16.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Wedding Cards',
				'slug'=> 'wedding_cards',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_17.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Event animators',
				'slug'=> 'event_animators',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_18.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Dancers',
				'slug'=> 'dancers',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_19.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Singers',
				'slug'=> 'singers',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_20.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Party Cards',
				'slug'=> 'party_cards',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_21.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Kids Wear',
				'slug'=> 'kids_wear',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_22.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Theme Wear',
				'slug'=> 'theme_wear',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_23.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],
			[
				'title' =>  'Miscelaneous Wear',
				'slug'=> 'miscelaneous_wear',
				'is_active'=> '1',
				'image'=> 'images/vendor_type/VendorType_24.jpg',
				'created_at' => date('Y-m-d H:i:s')
			],

        ]);
    }
}


