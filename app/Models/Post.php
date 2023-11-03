<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    // fillが可能なプロパティを指定する
    protected $fillable = [
        'title',
        'body',
        'category_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // updated_atカラムの降順で並び替え　// ページネーションして取得
    }
    
    //　Categoryに対するリレーション
    
    // 「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
