<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->name = 'Prasetyo Nugrohadi';
        $mhs1->nrp = '5114100070';
        $mhs1->email = 'Pras@example.com';
        $mhs1->jk = 'L';
        $mhs1->asal = 'Sidoarjo';
        $mhs1->tgl_lahir = '1997-02-12';
        $mhs1->alamat_sby = 'Wisma Permai';
        $mhs1->alamat_asal = 'Sidoarjo';
        $mhs1->gereja = 'Gereja';
        $mhs1->no_hp = '081122233344';
        $mhs1->line_id = 'pras';
        $mhs1->save();
        
        $mhs2 = new Mahasiswa();
        $mhs2->name = 'Joshua Resamuel';
        $mhs2->nrp = '5115100172';
        $mhs2->email = 'Josh@example.com';
        $mhs2->jk = 'L';
        $mhs2->asal = 'Bekasi';
        $mhs2->tgl_lahir = '1997-02-11';
        $mhs2->alamat_sby = 'Blok U';
        $mhs2->alamat_asal = 'Bekasi';
        $mhs2->gereja = 'Gereja';
        $mhs2->no_hp = '081112233344';
        $mhs2->line_id = 'josh';
        $mhs2->save();
    }
}
