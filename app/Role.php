<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\Relation;

class Role extends Model
{
    protected $table = 'roles';

    public function user()
    {

    	return $this->hasMany(User::class);

    }
}
