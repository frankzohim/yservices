<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create([
            'id'=>1,
            'type'=>'admin'
        ],
    );

    role::create([
        'id'=>2,
        'type'=>'intervenant'
    ],
    );
    
    role::create([
        'id'=>3,
        'type'=>'client'
    ],
    );
    }
}
