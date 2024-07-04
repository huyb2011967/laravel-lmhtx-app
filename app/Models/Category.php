<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $primaryKey = 'id_category';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'name_category',
    ];

    public function article(){
        return $this->hasMany(Article::class, 'id_category');
    }

    public function gr_category(){
        return $this->belongsTo(CategoryGroup::class, 'id_cg');
    }

}
