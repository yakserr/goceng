<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndicationOfDiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indication_of_diseases')->insert(
            [
                'disease_id' => 1,
                'indication_id' => 1,
            ],
            [
                'disease_id' => 1,
                'indication_id' => 2,
            ],
            [
                'disease_id' => 1,
                'indication_id' => 3,
            ],
            [
                'disease_id' => 1,
                'indication_id' => 4,
            ],
            [
                'disease_id' => 1,
                'indication_id' => 5,
            ],
            [
                'disease_id' => 1,
                'indication_id' => 6,
            ],
            [
                'disease_id' => 1,
                'indication_id' => 27,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 1,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 2,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 3,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 4,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 5,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 6,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 7,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 8,
            ],
            [
                'disease_id' => 2,
                'indication_id' => 9,
            ],
            [
                'disease_id' => 3,
                'indication_id' => 3,
            ],
            [
                'disease_id' => 3,
                'indication_id' => 4,
            ],
            [
                'disease_id' => 3,
                'indication_id' => 9,
            ],
            [
                'disease_id' => 3,
                'indication_id' => 10,
            ],
            [
                'disease_id' => 3,
                'indication_id' => 11,
            ],
            [
                'disease_id' => 3,
                'indication_id' => 27,
            ],
            [
                'disease_id' => 4,
                'indication_id' => 12,
            ],
            [
                'disease_id' => 4,
                'indication_id' => 13,
            ],
            [
                'disease_id' => 4,
                'indication_id' => 14,
            ],
            [
                'disease_id' => 4,
                'indication_id' => 27,
            ],
            [
                'disease_id' => 5,
                'indication_id' => 15,
            ],
            [
                'disease_id' => 5,
                'indication_id' => 16,
            ],

            [
                'disease_id' => 5,
                'indication_id' => 17,
            ],
            [
                'disease_id' => 5,
                'indication_id' => 18,
            ],
            [
                'disease_id' => 6,
                'indication_id' => 3,
            ],
            [
                'disease_id' => 6,
                'indication_id' => 13,
            ],
            [
                'disease_id' => 6,
                'indication_id' => 14,
            ],

        );
    }
}
