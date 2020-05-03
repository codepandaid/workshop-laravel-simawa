<?php

use Illuminate\Database\Seeder;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departemen_master')->delete();
        DB::table('departemen_master')->insert([
            'id' => 1, 'nama_departemen' => 'Ilmu Komputer'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 2, 'nama_departemen' => 'Sistem Informasi'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 3, 'nama_departemen' => 'Teknik Mesin'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 4, 'nama_departemen' => 'Teknik Industri'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 5, 'nama_departemen' => 'Teknik Komputer'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 6, 'nama_departemen' => 'Teknik Sipil'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 7, 'nama_departemen' => 'Teknik Elektro'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 8, 'nama_departemen' => 'Kedokteran'
        ]);
        DB::table('departemen_master')->insert([
            'id' => 9, 'nama_departemen' => 'Kedokteran Hewan'
        ]);
    }
}
