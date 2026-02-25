<?php

namespace Database\Seeders;

use App\Models\DataPengacara;
use Illuminate\Database\Seeder;

class DataPengacaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataPengacara = [
            [
                'nama_pengacara' => 'Rizky Pratama, S.H.',
                'alamat_pengacara' => 'Jl. Melati No. 12, Surakarta',
                'no_hp_pengacara' => '081234567890',
                'spesialisasi_pengacara' => 'Perdata',
            ],
            [
                'nama_pengacara' => 'Dewi Anggraini, S.H., M.H.',
                'alamat_pengacara' => 'Jl. Slamet Riyadi No. 88, Surakarta',
                'no_hp_pengacara' => '081298765432',
                'spesialisasi_pengacara' => 'Pidana',
            ],
            [
                'nama_pengacara' => 'Bima Saputra, S.H.',
                'alamat_pengacara' => 'Jl. Ahmad Yani No. 5, Karanganyar',
                'no_hp_pengacara' => '082112223334',
                'spesialisasi_pengacara' => 'Sengketa Tanah',
            ],
        ];

        foreach ($dataPengacara as $item) {
            DataPengacara::updateOrCreate(
                ['no_hp_pengacara' => $item['no_hp_pengacara']],
                $item
            );
        }
    }
}
