<?php

namespace Database\Seeders;

use App\Models\ServiceSchedule;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'date' => '2022-02-18',
                'type' => 'Cool',
                'worship_leader' => 'Brian',
                'singer1' => 'Clara',
                'singer2' => 'Tiera',
                'guitarist' => 'Cevin',
                'bassist' => 'David',
                'keyboardist' => 'Fresa',
                'drummer' => 'Farino',
            ],
            [
                'date' => '2022-02-20',
                'type' => 'Ibadah',
                'worship_leader' => 'Brian',
                'singer1' => 'Clara',
                'singer2' => 'Tiera',
                'guitarist' => 'Cevin',
                'bassist' => 'David',
                'keyboardist' => 'Fresa',
                'drummer' => 'Farino',
            ],
        ];

        foreach ($user as $key => $value) {
            ServiceSchedule::create($value);
        }
    }
}
