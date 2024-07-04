<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id_role';
    public $incrementing = false;
    protected $keyType = 'int';

    public function users(){
        return $this->hasMany(Users::class, 'id_role');
    }

}
