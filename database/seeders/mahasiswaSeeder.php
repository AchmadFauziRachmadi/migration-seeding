<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\dosen;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = dosen::inRandomOrder()->first();

         DB::table('mahasiswas')->insert([
            'npm' => rand(5520120000, 5520120999),
            'nidn' => $class->nidn,
            'nama' => Str::random(10),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
