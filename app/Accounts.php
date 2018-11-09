<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
	protected $table = 'accounts';
	protected $primaryKey = 'account_id';
	public $timestamps = false;

	protected $fillable = [
    	'name', 'balance'
    ];

    public function transactions(){
    	return $this->hasMany('App/Transaction', 'account_id', 'id');
    }
}
