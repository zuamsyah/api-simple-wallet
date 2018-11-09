<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Accounts::insert([
        	[
        		'name' => 'Sholeh Zuam',
        		'balance' => 40000
        	],
        	[
        		'name' => 'Fitra',
        		'balance' => 80000
        	],
            [
                'name' => 'Adi Aswara',
                'balance' => 75000
            ],
            [
                'name' => 'Agus',
                'balance' => 52500
            ],
            [
                'name' => 'Ilham',
                'balance' => 95300
            ],
        	[
                'name' => 'Yusuf',
                'balance' => 82100
            ],
            [
        		'name' => 'Miko',
        		'balance' => 99200
        	],
        ]);
    }
}
