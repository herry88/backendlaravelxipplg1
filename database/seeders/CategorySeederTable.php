<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'namacategory' => 'baju pria',
                'keterangan' => 'baru'
            ],
            [
                'namacategory' => 'baju anak',
                'keterangan' => 'baru'
            ],
            [
                'namacategory' => 'baju wanita',
                'keterangan' => 'baru'
            ]

        ];
        foreach ($categories as $key) {
           Category::create($key);
        }
    }
}
