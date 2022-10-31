<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswa;
use App\Models\matakuliah;

class krsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class1 = mahasiswa::inRandomOrder()->first();
        $class2 = matakuliah::inRandomOrder()->first();

         DB::table('krs')->insert([
            'npm' => $class1->npm,
            'kode_matakuliah' => $class2->kode_matakuliah,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
