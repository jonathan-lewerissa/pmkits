<?php

use Illuminate\Database\Seeder;
use App\PersekutuanJumat;

class PJSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pj1 = new PersekutuanJumat();
        $pj1->name = 'PJ 1';
        $pj1->date = '2017-09-01';
        $pj1->absence = 0;
        $pj1->persembahan = 0;
        $pj1->notes = '';
        $pj1->save();
    }
}
