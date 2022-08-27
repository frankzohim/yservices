<?php

namespace Database\Seeders;

use App\Models\agency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        agency::create([
            'name'=>'youdom-care',
            'adress'=>'france',
            'phone_number'=>'129927355'
        ]);
    }
}
