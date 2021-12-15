<?php

namespace Devsbuddy\Laraworld\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ['id'];
    protected $table = 'countries';

    public function states()
    {
        return $this->hasMany(State::class);
    }

}
