<?php

use Illuminate\Database\Seeder;

class Expense_catTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Expense_cat::insert([
        	[
        		'name' => 'Beli Bahan Pembungkus'
        	],
        	[
        		'name' => 'Beli Bahan Bumbu'
        	],
        	[
        		'name' => 'Gaji Karyawan'
        	],
            [
                'name' => 'Beli Alat dan Bahan'
            ],
            [
                'name' => 'Sewa Barang'
            ],
            [
                'name' => 'Transportasi Barang'
            ],
            [
                'name' => 'Asuransi Barang'
            ],
        ]);
    }
}
