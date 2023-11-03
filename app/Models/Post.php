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
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // Eagerローディング機能を使って、リレーションによって増えてしまうデータベースアクセスの回数を減らす
    }
    
    //　Categoryに対するリレーション
    
    // 「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
