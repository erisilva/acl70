<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * Operadores desse perfil
     *
     * @var User
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Permissões desse perfil
     *
     * @var Permissions
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }  
}
