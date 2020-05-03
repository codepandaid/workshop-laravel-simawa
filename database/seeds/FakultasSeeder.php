<?php

use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultas_master')->delete();
        DB::table('fakultas_master')->insert([
            'id' => 1, 'nama_fakultas' => 'Ilmu Komputer'
        ]);
        DB::table('fakultas_master')->insert([
            'id' => 2, 'nama_fakultas' => 'Teknik'
        ]);
        DB::table('fakultas_master')->insert([
            'id' => 3, 'nama_fakultas' => 'Kedokteran'
        ]);
        DB::table('fakultas_master')->insert([
            'id' => 4, 'nama_fakultas' => 'Kedokteran Hewan'
        ]);
    }
}
