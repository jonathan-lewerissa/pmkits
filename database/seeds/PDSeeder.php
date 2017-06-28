<?php

use Illuminate\Database\Seeder;
use App\PersekutuanDoa;

class PDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pd1 = new PersekutuanDoa();
        $pd1->name = 'PDTC';
        $pd1->fakultas = 'FTIf';
        $pd1->departemen = 'Informatika';
        $pd1->notes = '';
        $pd1->save();
        
        $pd2 = new PersekutuanDoa();
        $pd2->name = 'PDTL';
        $pd2->fakultas = 'FTI';
        $pd2->departemen = 'Teknik Lingkungan';
        $pd2->notes = '';
        $pd2->save();
        
        $pd3 = new PersekutuanDoa();
        $pd3->name = 'PD Sipil';
        $pd3->fakultas = 'FTI';
        $pd3->departemen = 'Teknik Sipil';
        $pd3->notes = '';
        $pd3->save();
        
        $pd4 = new PersekutuanDoa();
        $pd4->name = 'PD Geo';
        $pd4->fakultas = 'FTI';
        $pd4->departemen = 'Teknik Geomatika & Teknik Geofisika';
        $pd4->notes = '';
        $pd4->save();
        
        $pd5 = new PersekutuanDoa();
        $pd5->name = 'PD Desain';
        $pd5->fakultas = 'FTSP';
        $pd5->departemen = 'Desain';
        $pd5->notes = '';
        $pd5->save();
    }
}
