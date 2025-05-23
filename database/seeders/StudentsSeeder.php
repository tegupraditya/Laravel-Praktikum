<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Teguh Praditya',
                'student_id_number' => 'F55123046',
                'email' => 'teguh@gmail.com',
                'phone_number' => '6282259105873',
                'birth_date' => '2005-8-01',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
        ]);
    }
}