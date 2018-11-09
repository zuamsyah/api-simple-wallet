<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Transaction::insert([
        	[
        		'type' => 'Pemasukan',
        		'id' => 1,
        		'expense_id' => 2,
        		'category_id' => 1,
        		'amount' => 140000
        	],
        	[
        		'type' => 'Pemasukan',
        		'id' => 2,
        		'expense_id' => 3,
        		'category_id' => 1,
        		'amount' => 220000
        	],
        	[
                'type' => 'Pengeluaran',
                'id' => 3,
                'expense_id' => 1,
                'category_id' => 3,
                'amount' => 950000
            ],
            [
                'type' => 'Pemasukan',
                'id' => 4,
                'expense_id' => 5,
                'category_id' => 3,
                'amount' => 753000
            ],
            [
                'type' => 'Pemasukan',
                'id' => 5,
                'expense_id' => 7,
                'category_id' => 3,
                'amount' => 692000
            ],
            [
                'type' => 'Pengeluaran',
                'id' => 6,
                'expense_id' => 5,
                'category_id' => 1,
                'amount' => 153000
            ],
            [
        		'type' => 'Pengeluaran',
        		'id' => 7,
        		'expense_id' => 4,
        		'category_id' => 7,
        		'amount' => 553000
        	]

        ]);
    }
}
