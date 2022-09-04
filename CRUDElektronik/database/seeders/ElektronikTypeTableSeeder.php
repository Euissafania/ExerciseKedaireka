<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ElektronikTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elektronik_types')->insert([
          'nama_type'  =>"Kulkas",
          'stok' => "3",
          'description'  =>"Kulkas 2 Pintu"
        ]);
    }
}
