<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $primaryKey = 'id_article';
    public $incrementing = false; // nếu các ID không tự tăng
    protected $keyType = 'int'; // Đổi thành 'string' nếu khóa chính là chuỗi

    protected $fillable = [
        'id_article',
        'id_user',
        'id_category',
        'id_status',
        'title_article',
        'subtitle_article',
        'content_article',
        'date_article',
    ];

    public function users(){
        return $this->belongsTo(Users::class, 'id_user');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'id_status');
    }

}
