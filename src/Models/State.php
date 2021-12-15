<?php

namespace Devsbuddy\Laraworld\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = ['id'];
    protected $table = 'states';

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
