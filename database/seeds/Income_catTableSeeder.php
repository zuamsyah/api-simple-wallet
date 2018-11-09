<?php

use Illuminate\Database\Seeder;

class Income_catTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Income_cat::insert([
        	[
        		'name' => 'Penjualan Pasar'
        	],
        	[
        		'name' => 'Penjualan Eceran'
        	],
        	[
        		'name' => 'Penjualan Online'
        	],
            [
                'name' => 'Penjualan Market'
            ],
            [
                'name' => 'Penjualan Toko'
            ],
            [
                'name' => 'Export luar negri'
            ],
            [
                'name' => 'Penjualan supermarket'
            ],

        ]);
    }
}
