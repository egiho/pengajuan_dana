<?php

namespace Database\Seeders;

use App\Model\Income;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Income::create([
            'nama' => "Dorkas",
            'divisi' => "HC & GA",
            'nominal' => "400000",
            'metode' => "cash",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);

    }
}
