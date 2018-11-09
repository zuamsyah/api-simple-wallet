<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense_cat extends Model
{
    protected $table = 'expense_cats';
    protected $primaryKey = 'expense_id';
    public $timestamps = false;

    protected $fillable = [
    	'name'
    ];

    public function transactions(){
    	return $this->hasMany('App/Transaction', 'expense_id');
    }
}
