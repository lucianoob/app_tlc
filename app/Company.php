<?php

namespace TLC;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'cnpj', 'email', 'phone', 'cep', 'address',
    ];

    public function supplier()
    {
        return $this->hasMany('TLC\Supplier');
    }
}
