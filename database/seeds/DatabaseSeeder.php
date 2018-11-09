<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountsTableSeeder::class);
        $this->call(Expense_catTableSeeder::class);
        $this->call(Income_catTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
    }
}
