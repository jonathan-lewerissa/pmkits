<?php

use Illuminate\Database\Seeder;
use App\Dosenkaryawan;

class DosenkaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dsn1 = new Dosenkaryawan();
        $dsn1->name = 'Prasetyo Nugrohadi';
        $dsn1->pekerjaan = 'dosen';
        $dsn1->fakultas = 'FTIF';
        $dsn1->departemen = 'Informatika';
        $dsn1->email = 'pras@example.com';
        $dsn1->jk = 'L';
        $dsn1->asal = 'Sidoarjo';
        $dsn1->tgl_lahir = '1997-02-12';
        $dsn1->alamat = 'Wisper';
        $dsn1->gereja = 'Gereja';
        $dsn1->no_hp = '081122233344';
        $dsn1->save();
    }
}
