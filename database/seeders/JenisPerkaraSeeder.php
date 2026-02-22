<?php

namespace Database\Seeders;

use App\Models\JenisPerkara;
use Illuminate\Database\Seeder;

class JenisPerkaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master = [
            ['nama_jenis_perkara' => 'Pidana', 'keterangan' => 'Perkara pidana umum'],
            ['nama_jenis_perkara' => 'Perdata', 'keterangan' => 'Perkara perdata umum'],
            ['nama_jenis_perkara' => 'Wanprestasi', 'keterangan' => 'Sengketa wanprestasi/perjanjian'],
            ['nama_jenis_perkara' => 'Sengketa Tanah', 'keterangan' => 'Sengketa agraria/tanah'],
            ['nama_jenis_perkara' => 'Tata Usaha Negara', 'keterangan' => 'Perkara PTUN'],
        ];

        foreach ($master as $item) {
            JenisPerkara::updateOrCreate(
                ['nama_jenis_perkara' => $item['nama_jenis_perkara']],
                $item
            );
        }
    }
}
