<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfHomeSlider = \DB::table('home_sliders')->count();

    	if($numberOfHomeSlider == 0)
    	{
    		DB::table('home_sliders')->insert([
	        	'image' => 'img.png',
	        ]);
    	}

    	$numberOfHomeContent = \DB::table('home_contents')->count();

    	if($numberOfHomeContent == 0)
    	{
    		DB::table('home_contents')->insert([
	        	'heading' => 'Crypto Cipher is Known Worldwide for Their Work',
	        	'content' => 'Before you zero down on one of our Crypto Cipher Courses, please check out what Crypto cipher has done to attract countless OSCAR/GRAMMY/BAFTA award winning guys.'
	        ]);
	        DB::table('home_contents')->insert([
	        	'heading' => 'Crypto Cipher Never Forgets to Promote Indian Culture Worldwide',
	        	'content' => 'Check out the artist Videos done by Crypto Cipher inside Ancient Monument Qutab Minar. All the audio recordings are done outdoor live- Promoting Indian Musical Art Worldwide.'
	        ]);
    	}
    }
}
