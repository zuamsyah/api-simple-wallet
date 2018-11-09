<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Transaction extends Model
{
	protected $table = 'transactions';
    public $timestamps = false;
    protected $primaryKey = 'transaction_id';
    

    protected $fillable = [
    	'date', 'type', 'id', 'amount', 'expense_id', 'category_id'
    ];

    public function Accounts(){
    	return $this->belongsTo('App/Accounts', 'account_id');
    }

    public function Expense_cat(){
    	return $this->belongsTo('App/Expense_cat', 'expense_id');
    }

    public function Income_cat(){
        return $this->belongsTo('App/Income_cat', 'category_id');
    }

}
