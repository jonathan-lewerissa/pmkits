<?php

use Illuminate\Database\Seeder;
use App\Alumni;

class AlumniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumni1 = new Alumni();
        $alumni1->name = 'Prasetyo Nugrohadi';
        $alumni1->email = 'pras@example.com';
        $alumni1->jk = 'L';
        $alumni1->asal = 'Sidoarjo';
        $alumni1->tgl_lahir = '1997-02-12';
        $alumni1->alamat = 'Wisper';
        $alumni1->gereja = 'Gereja';
        $alumni1->no_hp = '081122233344';
        $alumni1->pekerjaan = 'dosen';
        $alumni1->tempat_kerja = 'ITS';
        $alumni1->asal_fakultas = 'FTIF';
        $alumni1->asal_departemen = 'Informatika';
        $alumni1->angkatan = '2000';
        $alumni1->save();
    }
}
