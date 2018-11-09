<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->timestamp('date')->useCurrent();
            $table->string('type');
            $table->integer('id')->unsigned()->index();
            $table->integer('expense_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->bigInteger('amount');
            
            $table->foreign('id')
                  ->references('account_id')
                  ->on('accounts')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
            $table->foreign('expense_id')
                  ->references('expense_id')
                  ->on('expense_cats')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('category_id')
                  ->references('category_id')
                  ->on('income_cats')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
