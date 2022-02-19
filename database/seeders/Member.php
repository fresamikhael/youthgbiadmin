<?php

namespace Database\Seeders;

use App\Models\MemberData;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Member extends Seeder
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
                'name' => 'Admin',
                'nickname' => 'Admin',
                'birth_date' => '2022-02-18',
                'interest' => 'Menyanyi',
            ],
            [
                'name' => 'Joko',
                'nickname' => 'USER',
                'birth_date' => '2022-02-18',
                'interest' => 'Bermain Musik',
            ],
        ];

        foreach ($user as $key => $value) {
            MemberData::create($value);
        }
    }
}
