<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\matakuliah;
use App\Models\dosen;

class jadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class1 = matakuliah::inRandomOrder()->first();
        $class2 = dosen::inRandomOrder()->first();

         DB::table('jadwals')->insert([
            'kode_matakuliah' => $class1->kode_matakuliah,
            'nidn' => $class2->nidn,
            'kelas' => Str::random(1),
            'hari' => Str::random(10),
            'jam' => now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
