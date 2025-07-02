<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Gaming Headset',
                'harga'  => 250000,
                'jumlah' => 10,
                'foto' => 'headset.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Mechanical Keyboard',
                'harga'  => 350000,
                'jumlah' => 7,
                'foto' => 'keyboard.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Mouse Pad RGB',
                'harga'  => 7009000,
                'jumlah' => 6,
                'foto' => 'mousepad.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}