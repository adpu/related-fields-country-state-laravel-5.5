<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sortname', 'name'
    ];

    public function statescountries()
    {
        return $this->hasMany('App\State','country_id','id')->orderBy('name','ASC');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


}
