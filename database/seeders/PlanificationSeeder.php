<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Planification;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planification::insert([
            [
                'id' => Str::uuid(),
                'title' => 'Evenement 1',
                'start' => '2021-04-02',
                'end' => null
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Evenement 2',
                'start' => '2021-04-10T08:00:00',
                'end' => '2021-04-10T16:00:00'
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Evenement 3',
                'start' => '2021-04-20',
                'end' => '2021-04-22'
            ],
        ]);
    }
}
