<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_role',
        'name_user',
        'phone_user',
        'address_user',
        'email',
        'avatar_user',
        'password'
    ];

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $keyType = 'int';

    public function role(){
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function article(){
        return $this->hasMany(Article::class, 'id_user');
    }
    
}
