<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:
        table('diseases')->insert(
            ['disease_code' => 'P01', 'disease_name' => 'Ispa atau flu kucing'],
            ['disease_code' => 'P02', 'disease_name' => 'Feline Chlamyda'],
            ['disease_code' => 'P03', 'disease_name' => 'Cacingan'],
            ['disease_code' => 'P04', 'disease_name' => 'Diabetes'],
            ['disease_code' => 'P05', 'disease_name' => 'Stud Tail'],
            ['disease_code' => 'P06', 'disease_name' => 'Feline Infectious Peritonitis'],
            ['disease_code' => 'P07', 'disease_name' => 'Feline Leukimia Virus'],
            ['disease_code' => 'P08', 'disease_name' => 'Rabies'],
            ['disease_code' => 'P09', 'disease_name' => 'Feline Calicivirus'],
            ['disease_code' => 'P10', 'disease_name' => 'Penyakit saluran kemih'],
        );
    }
}
