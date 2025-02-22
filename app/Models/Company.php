<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    //
    public function users():  BelongsToMany
    {
        return $this->belongsToMany(Rol::class,'companies_roles_users');
    }
    
}
