<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // run the seeder
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@sa.com',
            'password' => bcrypt('passowrd'),
        ]);

        DB::table('diseases')->insert(
            [
                ['disease_code' => 'P01', 'disease_name' => 'Ispa atau flu kucing'],
                ['disease_code' => 'P02', 'disease_name' => 'Feline Chlamyda'],
                ['disease_code' => 'P03', 'disease_name' => 'Cacingan'],
                ['disease_code' => 'P04', 'disease_name' => 'Diabetes'],
                ['disease_code' => 'P05', 'disease_name' => 'Stud Tail'],
                ['disease_code' => 'P06', 'disease_name' => 'Penyakit saluran kemih'],
            ]
        );

        DB::table('indications')->insert(
            [
                ['indication_code' => 'G01', 'indication_name' => 'Bersin'],
                ['indication_code' => 'G02', 'indication_name' => 'Masalah pada pernapasan'],
                ['indication_code' => 'G03', 'indication_name' => 'Hilang nafsu makan'],
                ['indication_code' => 'G04', 'indication_name' => 'Lemah lesu'],
                ['indication_code' => 'G05', 'indication_name' => 'Mata berair'],
                ['indication_code' => 'G06', 'indication_name' => 'Anemia'],
                ['indication_code' => 'G07', 'indication_name' => 'Batuk'],
                ['indication_code' => 'G08', 'indication_name' => 'Pilek'],
                ['indication_code' => 'G09', 'indication_name' => 'Perut kembung atau buncit'],
                ['indication_code' => 'G10', 'indication_name' => 'Diare yang disertai darah'],
                ['indication_code' => 'G11', 'indication_name' => 'Bulu Rontok'],
                ['indication_code' => 'G12', 'indication_name' => 'Nafsu makan yang berlebihan'],
                ['indication_code' => 'G13', 'indication_name' => 'Dehidrasi'],
                ['indication_code' => 'G14', 'indication_name' => 'Sering buang air kecil'],
                ['indication_code' => 'G15', 'indication_name' => 'Lesi kulit, semacam jaringan abnormal pada kulit'],
                ['indication_code' => 'G16', 'indication_name' => 'Gatal yang akut'],
                ['indication_code' => 'G17', 'indication_name' => 'Sering'],
                ['indication_code' => 'G18', 'indication_name' => 'menggaruk'],
                ['indication_code' => 'G19', 'indication_name' => 'Demam'],
                ['indication_code' => 'G20', 'indication_name' => 'Diare'],
                ['indication_code' => 'G21', 'indication_name' => 'Muntah'],
                ['indication_code' => 'G22', 'indication_name' => 'Aneroksia'],
                ['indication_code' => 'G23', 'indication_name' => 'Melebarnya pupil'],
                ['indication_code' => 'G24', 'indication_name' => 'Keluar air liur secara berlebihan'],
                ['indication_code' => 'G25', 'indication_name' => 'Agresif berlebihan'],
                ['indication_code' => 'G26', 'indication_name' => 'Keluar cairan berlebihan pada hidung'],
                ['indication_code' => 'G27', 'indication_name' => 'Berat badan berkurang drastis'],
            ]
        );
        DB::table('indication_of_diseases')->insert(
            [
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
            ]
        );
    }
}
