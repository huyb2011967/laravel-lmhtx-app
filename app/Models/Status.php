<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'name_status',
    ];

    public function article(){
        return $this->hasMany(Article::class, 'id_status');
    }

}
