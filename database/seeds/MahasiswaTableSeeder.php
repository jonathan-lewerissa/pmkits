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
        $mhs1->email = 'prstngrhd@gmail.com';
        $mhs1->jk = 'L';
        $mhs1->asal = 'Sidoarjo';
        $mhs1->tgl_lahir = '1997-02-12';
        $mhs1->alamat_sby = 'Wisma Permai XI/3, Mulyosari';
        $mhs1->alamat_asal = 'Wisma Permai XI/3, Mulyosari';
        $mhs1->gereja = 'GPIB Bhaskara Surabaya';
        $mhs1->no_hp = '087854444653';
        $mhs1->line_id = 'prasetyonz';
        $mhs1->talenta = 'musik';
        $mhs1->kehadiran_pj = 0;
        $mhs1->kehadiran_pd = 0;
        $mhs1->kehadiran_rapat = 0;
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
        $mhs2->talenta = 'musik';
        $mhs2->kehadiran_pj = 0;
        $mhs2->kehadiran_pd = 0;
        $mhs2->kehadiran_rapat = 0;
        $mhs2->save();
    }
}
