<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class income_cat extends Model
{
    protected $table = 'income_cats';
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    protected $fillable = [
    	'name'
    ];

    public function transactions(){
    	return $this->hasMany('App/Transaction', 'category_id');
    }
}
