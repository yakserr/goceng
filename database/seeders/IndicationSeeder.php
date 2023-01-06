<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [indication_code => 'G01', indication_name => 'Bersin'],
            [indication_code => 'G02', indication_name => 'Masalah pada pernapasan'],
            [indication_code => 'G03', indication_name => 'Hilang nafsu makan'],
            [indication_code => 'G04', indication_name => 'Lemah lesu'],
            [indication_code => 'G05', indication_name => 'Mata berair'],
            [indication_code => 'G06', indication_name => 'Anemia'],
            [indication_code => 'G07', indication_name => 'Batuk'],
            [indication_code => 'G08', indication_name => 'Pilek'],
            [indication_code => 'G09', indication_name => 'Perut kembung atau buncit'],
            [indication_code => 'G10', indication_name => 'Diare yang disertai darah'],
            [indication_code => 'G11', indication_name => 'Bulu Rontok'],
            [indication_code => 'G12', indication_name => 'Nafsu makan yang berlebihan'],
            [indication_code => 'G13', indication_name => 'Dehidrasi'],
            [indication_code => 'G14', indication_name => 'Sering buang air kecil'],
            [indication_code => 'G15', indication_name => 'Lesi kulit, semacam jaringan abnormal pada kulit'],
            [indication_code => 'G16', indication_name => 'Gatal yang akut'],
            [indication_code => 'G17', indication_name => 'Sering'],
            [indication_code => 'G18', indication_name => 'menggaruk'],
            [indication_code => 'G19', indication_name => 'Demam'],
            [indication_code => 'G20', indication_name => 'Diare'],
            [indication_code => 'G21', indication_name => 'Muntah'],
            [indication_code => 'G22', indication_name => 'Aneroksia'],
            [indication_code => 'G23', indication_name => 'Melebarnya pupil'],
            [indication_code => 'G24', indication_name => 'Keluar air liur secara berlebihan'],
            [indication_code => 'G25', indication_name => 'Agresif berlebihan'],
            [indication_code => 'G26', indication_name => 'Keluar cairan berlebihan pada hidung'],
            [indication_code => 'G27', indication_name => 'Berat badan berkurang drastis'],
        );
    }
}
