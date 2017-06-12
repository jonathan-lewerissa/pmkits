<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MahasiswaTableSeeder::class);
         $this->call(DosenkaryawanTableSeeder::class);
         $this->call(AlumniTableSeeder::class);
    }
}
