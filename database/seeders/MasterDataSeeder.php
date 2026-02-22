<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataPengacaraSeeder::class,
            JenisPerkaraSeeder::class,
        ]);
    }
}
