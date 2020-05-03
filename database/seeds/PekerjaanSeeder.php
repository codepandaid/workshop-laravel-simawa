<?php

use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaan_master')->delete();
        DB::table('pekerjaan_master')->insert([
            'id' => 1, 'nama_pekerjaan' => 'Tidak Bekerja'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 2, 'nama_pekerjaan' => 'Petani'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 3, 'nama_pekerjaan' => 'Pedagang'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 4, 'nama_pekerjaan' => 'Polisi/TNI'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 5, 'nama_pekerjaan' => 'PNS'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 6, 'nama_pekerjaan' => 'Guru Non PNS'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 7, 'nama_pekerjaan' => 'Pensiunan'
        ]);
        DB::table('pekerjaan_master')->insert([
            'id' => 8, 'nama_pekerjaan' => 'Lainnya'
        ]);
    }
}
