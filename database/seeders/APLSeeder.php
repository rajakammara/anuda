<?php

namespace Database\Seeders;

use App\Models\ApprovedLayout;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class APLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i=0; $i < 10; $i++) { 
	    	ApprovedLayout::create([
                'village' => Str::random(8),
                'surveyno' => Str::random(8),
                'extent' => "23.22",
                'flpno' => Str::random(8),
                'proceedings' => Str::random(8),
                'drawings' => Str::random(8),
                'mortgageplotnos' => Str::random(8),
	        ]);
    	}
    }
}
