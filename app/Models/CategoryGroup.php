<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    use HasFactory;

    protected $table = 'category_group';
    protected $primaryKey = 'id_cg';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'name_cg',
    ];

    public function category(){
        return $this->hasMany(Category::class, 'id_cg');
    }

}
