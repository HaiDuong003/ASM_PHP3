<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('students')->insert([
            "name" => "Nguyễn Văn A",
            "gender" => 1,
            "phone" => "0987654321",
            "address" => "Hanoi",
            "image" => "avatar.jpg",
        ]);
    }
}
