<?php

namespace TLC;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
   	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id', 'name', 'phone',
    ];

    public function payment()
    {
        return $this->hasMany('TLC\Payment');
    }
}
